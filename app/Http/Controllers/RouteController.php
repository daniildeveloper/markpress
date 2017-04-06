<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    public function start($slug)
    {
        $elem = DB::table("routes")->where('slug', $slug)->get()[0];
        if (count($elem) === 0) {
            PageController::error404();
        }

        $e = null;
        switch ($elem->model) {
            case 'Page':
                $e = new PageController();
                break;
            case 'Post':
                $e = new Content\BlogPostController();
                break;

            default:
                $e = new PageController();
                break;
        }
        $e->show($elem->id);
    }
}
