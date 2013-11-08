/*
  LV2 Configure Extension
  Copyright 2013 Filipe Coelho <falktx@falktx.com>

  Permission to use, copy, modify, and/or distribute this software for any
  purpose with or without fee is hereby granted, provided that the above
  copyright notice and this permission notice appear in all copies.

  THIS SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
  WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
  MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
  ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
  WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
  ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
  OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
*/

/**
   @file lv2_configure.h
   C header for the LV2 configure extension <http://kxstudio.sf.net/ns/lv2ext/configure>.
*/

#ifndef LV2_CONFIGURE_H
#define LV2_CONFIGURE_H

#include "lv2/lv2plug.in/ns/extensions/ui/ui.h"

#define LV2_CONFIGURE_URI    "http://kxstudio.sf.net/ns/lv2ext/configure"
#define LV2_CONFIGURE_PREFIX LV2_CONFIGURE_URI "#"

#define LV2_CONFIGURE__Host        LV2_CONFIGURE_PREFIX "Host"
#define LV2_CONFIGURE__UIInterface LV2_CONFIGURE_PREFIX "UIInterface"

#ifdef __cplusplus
extern "C" {
#endif

typedef void* LV2_Configure_Handle;

/**
   Configure extension, UI data.

   When the UI's extension_data is called with argument LV2_CONFIGURE__UIInterface,
   the UI MUST return an LV2_Configure_UI_Interface structure, which remains valid
   for the lifetime of the UI.
*/
typedef struct _LV2_Configure_UI_Interface {
    /**
     * configure()
     *
     * TODO
     */
    void (*configure)(LV2UI_Handle handle,
                      const char* key,
                      const char* value);

} LV2_Configure_UI_Interface;

/**
    Feature data for LV2_CONFIGURE__Host.
*/
typedef struct _LV2_Configure_Host {
    /**
     *  Opaque host data.
     */
    LV2_Configure_Handle handle;

    /**
     * configure()
     *
     * TODO
     */
    void (*configure)(LV2_Configure_Handle handle,
                      const char* key,
                      const char* value);

} LV2_Configure_Host;

#ifdef __cplusplus
} /* extern "C" */
#endif

#endif /* LV2_CONFIGURE_H */
