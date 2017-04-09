<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    private $activeTheme = null;
    public function __construct()
    {
        $this->activeTheme = active_theme();
    }
    public function start($slug)
    {
        $element = null;
        $elems   = DB::table("routes")->where('slug', $slug)->get();
        if (count($elems) === 0) {
            dd(404);
        } else {
            $element = $elems[0];
        }
        $model = $element->model;

        $forRenderQuery = DB::table($model)->where("slug", $slug)->get();
        $forRender      = null;
        if (count($forRenderQuery) === 0) {
            dd(301);
        } else {
            $forRender = $forRenderQuery[0];
        }

        $template = $forRender->template;

        return view("themes.$this->activeTheme.$template", [
            'element' => $forRender,
        ]);
    }
}
