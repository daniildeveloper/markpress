<?php
// TODO: export theme settings to .env
if(!function_exists("theme")) {
  function theme($path)
  {
    $activeTheme = DB::table("c_m_s_string_settings")->where("slug",'active_theme')->get()[0]->value;

    return url("/themes/$activeTheme/assets/$path");
  }
}