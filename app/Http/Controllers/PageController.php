<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function showIndexPage()
    {
      $active = active_theme();
      return view("themes.$active.index");
    }
    public function showPage($id)
    {
        dd($id);
    }

    public static function error404()
    {
        dd(404);
    }
}
