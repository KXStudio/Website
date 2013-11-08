/*
  LV2 UI ... Extension
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
   @file lv2_ui_....h
   C header for the LV2 UI ... extension <http://kxstudio.sf.net/ns/lv2ext/configure>.
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

#include <stdbool.h>

/**
  * TODO
  */
typedef enum __Buttons {
    //reserve 0?
    kButtonOk     = 1 << 0,
    kButtonApply  = 1 << 1,
    kButtonCancel = 1 << 2
    //etc
} _Buttons;

/**
  * TODO
  */
typedef enum __Type {
    k_TypeInformation,
    k_TypeQuestion,
    k_TypeWarning,
    k_TypeError
} _Type;

/**
   Configure extension, UI data.

   When the UI's extension_data is called with argument LV2_CONFIGURE__UIInterface,
   the UI MUST return an LV2_Configure_UI_Interface structure, which remains valid
   for the lifetime of the UI.
*/
typedef struct _LV2_Configure_UI_Interface {
    /**
     * TODO
     */
    _Buttons (*msgbox)(LV2UI_Handle handle, _Type type, const char* title, const char* text, _Buttons buttons);

    /**
     * TODO
     */
    const char* (*open_file)(LV2UI_Handle handle, bool isDir, const char* title, const char* filter);

    /**
     * TODO
     */
    const char* (*save_file)(LV2UI_Handle handle, bool isDir, const char* title, const char* filter);

} LV2_Configure_UI_Interface;

#ifdef __cplusplus
} /* extern "C" */
#endif

#endif /* LV2_CONFIGURE_H */
