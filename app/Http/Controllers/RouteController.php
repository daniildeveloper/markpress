<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function start($slug)
    {
        $elems = DB::table("routes")->where('slug', $slug)->get();
 

        if (count($elems) === 0) {
            PageController::error404();
        }



        $e = null;
        $elem = $elems[0];
        switch ($elems[0]->model) {
            case 'Page':
                $e = new PageController();
                \App::call('App\Http\Controllers\PageController@showIndexPage');
                break;
            case 'Post':
                $e = new Content\BlogPostController();
                break;

            default:
                $e = new PageController();
                break;
        }
        $e->make($elem->id);
    }
}
