/* -*- Mode: C ; c-basic-offset: 2 -*- */
/*****************************************************************************
 *
 * Copyright (C) 2009 Nedko Arnaudov <nedko@arnaudov.name>
 *
 * LV2 UI bundle shared library for communicating with a DSSI UI
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR
 * PURPOSE.  See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public
 * License along with this program; if not, write to the Free
 * Software Foundation, Inc., 59 Temple Place, Suite 330, Boston,
 * MA 02111-1307, USA.
 *
 *****************************************************************************/

#include <stdbool.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include <sys/types.h>
#include <unistd.h>
#include <errno.h>

#include <lo/lo.h>

#include "lv2_external_ui.h"

#define MAX_OSC_PATH 1024

struct control
{
  LV2_External_UI_Widget virt;  /* WARNING: code assumes this is the first struct member */

  LV2UI_Controller controller;
  LV2UI_Write_Function write_function;
  void (* ui_closed)(LV2UI_Controller controller);

  lo_server osc_server;

  bool running;              /* true if UI launched and 'exiting' not received */
  bool visible;              /* true if 'show' sent */

  lo_address osc_address;    /* non-NULL if 'update' received */

  char osc_control_path[MAX_OSC_PATH];
  char osc_hide_path[MAX_OSC_PATH];
  char osc_quit_path[MAX_OSC_PATH];
  char osc_show_path[MAX_OSC_PATH];
};

#undef control_ptr

static
int
osc_debug_handler(
  const char * path,
  const char * types,
  lo_arg ** argv,
  int argc,
  void * data,
  void * user_data)
{
  int i;

  printf("got unhandled OSC message:\n");
  printf("path: <%s>\n", path);
  fflush(stdout);
  for (i = 0; i < argc; i++)
  {
    printf("arg %d '%c' ", i, types[i]);
    lo_arg_pp(types[i], argv[i]);
    printf("\n");
  }
  fflush(stdout);

  return 1;
}

int
osc_exiting_handler(
  struct control * control_ptr,
  lo_arg ** argv)
{
  //printf("OSC: got UI exit notification\n");

  control_ptr->running = false;
  control_ptr->visible = false;

  if (control_ptr->osc_address)
  {
    lo_address_free(control_ptr->osc_address);
  }

  control_ptr->ui_closed(control_ptr->controller);

  return 0;
}

int
osc_control_handler(
  struct control * control_ptr,
  lo_arg ** argv)
{
  int port = argv[0]->i;
  float value = argv[1]->f;

  //printf("OSC control handler: port %d = %f\n", port, value);

  control_ptr->write_function(control_ptr->controller, (uint32_t)port, sizeof(float), 0, &value);

  return 0;
}

int
osc_update_handler(
  struct control * control_ptr,
  lo_arg ** argv)
{
  const char * url = &argv[0]->s;
  char * path;
  char * host;
  char * port;

  //printf("OSC: got update request from <%s>\n", url);

  if (control_ptr->osc_address)
  {
    return 0;
  }

  host = lo_url_get_hostname(url);
  port = lo_url_get_port(url);
  control_ptr->osc_address = lo_address_new(host, port);
  free(host);
  free(port);

  path = lo_url_get_path(url);

  sprintf(control_ptr->osc_control_path, "%scontrol", path);
  sprintf(control_ptr->osc_hide_path, "%shide", path);
  sprintf(control_ptr->osc_show_path, "%sshow", path);
  sprintf(control_ptr->osc_quit_path, "%squit", path);

  free(path);

  control_ptr->running = true;

  return 0;
}

#define control_ptr ((struct control *)user_data)

static
int
osc_message_handler(
  const char * path,
  const char * types,
  lo_arg ** argv,
  int argc,
  void * data,
  void * user_data)
{
  const char *method;

  method = path;
  if (method[0] != '/' || method[1] != '/')
    return osc_debug_handler(path, types, argv, argc, data, user_data);
  method += 2;

  if (!strcmp(method, "update") && argc == 1 && !strcmp(types, "s"))
  {
    return osc_update_handler(control_ptr, argv);
  }
  else if (!strcmp(method, "control") && argc == 2 && !strcmp(types, "if"))
  {
    return osc_control_handler(control_ptr, argv);
  }
  else if (!strcmp(method, "exiting") && argc == 0)
  {
    return osc_exiting_handler(control_ptr, argv);
  }

  return osc_debug_handler(path, types, argv, argc, data, user_data);
}

#undef control_ptr

#define control_ptr ((struct control *)_this_)

static
void
run(
  LV2_External_UI_Widget * _this_)
{
  //printf("run() called\n");
  while (lo_server_recv_noblock(control_ptr->osc_server, 0) != 0) {}
}

static
void
show(
  LV2_External_UI_Widget * _this_)
{
  //printf("show() called\n");

  if (control_ptr->visible)
  {
    return;
  }

  if (control_ptr->osc_address)
  {
    lo_send(control_ptr->osc_address, control_ptr->osc_show_path, "");
    control_ptr->visible = true;
  }
}

static
void
hide(
  LV2_External_UI_Widget * _this_)
{
  //printf("hide() called\n");

  if (!control_ptr->visible || !control_ptr->osc_address)
  {
    return;
  }

  lo_send(control_ptr->osc_address, control_ptr->osc_hide_path, "");
  control_ptr->visible = false;
}

#undef control_ptr

static
LV2UI_Handle
instantiate(
  const struct _LV2UI_Descriptor * descriptor,
  const char * plugin_uri,
  const char * bundle_path,
  LV2UI_Write_Function write_function,
  LV2UI_Controller controller,
  LV2UI_Widget * widget,
  const LV2_Feature * const * features)
{
  struct control * control_ptr;
  LV2_External_UI_Host * ui_host_ptr;
  char * filename;
  char * osc_url;

  //printf("instantiate('%s', '%s') called\n", plugin_uri, bundle_path);

  ui_host_ptr = NULL;
  while (*features != NULL)
  {
    if (strcmp((*features)->URI, LV2_EXTERNAL_UI__Host) == 0)
    {
      ui_host_ptr = (*features)->data;
    }

    features++;
  }

  if (ui_host_ptr == NULL)
  {
    goto fail;
  }

  control_ptr = malloc(sizeof(struct control));
  if (control_ptr == NULL)
  {
    goto fail;
  }

  control_ptr->virt.run = run;
  control_ptr->virt.show = show;
  control_ptr->virt.hide = hide;

  control_ptr->controller = controller;
  control_ptr->write_function = write_function;
  control_ptr->ui_closed = ui_host_ptr->ui_closed;

  filename = malloc(strlen(bundle_path) + strlen(UI_EXECUTABLE) + 1);
  if (filename == NULL)
  {
    goto fail_free_control;
  }

  strcpy(filename, bundle_path);
  strcat(filename, UI_EXECUTABLE);

  control_ptr->running = false;
  control_ptr->visible = false;
  control_ptr->osc_address = NULL;

  control_ptr->osc_server = lo_server_new(NULL, NULL);
  osc_url = lo_server_get_url(control_ptr->osc_server);
  //printf("host OSC URL is %s\n", osc_url);
  lo_server_add_method(control_ptr->osc_server, NULL, NULL, osc_message_handler, control_ptr);

  if (fork() == 0)
  {
    execlp(
      filename,
      filename,
      osc_url,
      plugin_uri,
      plugin_uri,
      ui_host_ptr->plugin_human_id != NULL ? ui_host_ptr->plugin_human_id : "",
      NULL);
    fprintf(stderr, "exec of UI failed: %s", strerror(errno));
    exit(1);
  }

  while (!control_ptr->running)
  {
    if (lo_server_recv_noblock(control_ptr->osc_server, 0) == 0)
    {
      usleep(300000);
    }
  }

  *widget = (LV2UI_Widget)control_ptr;

  return (LV2UI_Handle)control_ptr;

fail_free_control:
  free(control_ptr);

fail:
  return NULL;
}

#define control_ptr ((struct control *)ui)

static
void
cleanup(
  LV2UI_Handle ui)
{
  //printf("cleanup() called\n");
  free(control_ptr);
}

static
void
port_event(
  LV2UI_Handle ui,
  uint32_t port_index,
  uint32_t buffer_size,
  uint32_t format,
  const void * buffer)
{
  //printf("port_event(%u, %f) called\n", (unsigned int)port_index, *(float *)buffer);

  lo_send(control_ptr->osc_address, control_ptr->osc_control_path, "if", (int)port_index, *(float *)buffer);
}

#undef control_ptr

static LV2UI_Descriptor descriptors[] =
{
  {UI_URI, instantiate, cleanup, port_event, NULL}
};

const LV2UI_Descriptor *
lv2ui_descriptor(
  uint32_t index)
{
  //printf("lv2ui_descriptor(%u) called\n", (unsigned int)index);

  if (index >= sizeof(descriptors) / sizeof(descriptors[0]))
  {
    return NULL;
  }

  return descriptors + index;
}
