<?php

namespace App\Http\Controllers;

use App\Page;

class PageController extends Controller
{

    public function showIndexPage()
    {
        $active = active_theme();
        return view("themes.$active.index");
    }

    public function make($id = 0) {
        // dd("$id");
        return redirect("/");
    }

    public static function error404()
    {
        return redirect("/");
        dd(404);
    }
}
