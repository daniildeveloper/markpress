<?php

namespace App\Http\Controllers;

use App\Page;

class PageController extends Controller
{
    public $active = null;

    public function __construct()
    {
        $this->active = active_theme();
    }
    public function showIndexPage()
    {
        $active = active_theme();
        return view("themes.$active.index");
    }

    /**
     * show single page
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function show($id)
    {
        return view("themes.default.index");
    }

    public static function error404()
    {
        dd(404);
    }
}
