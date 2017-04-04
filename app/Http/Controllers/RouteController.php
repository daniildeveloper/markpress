<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RouteController extends Controller
{
    public function start($slug) {
    	$elem = DB::table("routes")->where('slug', $slug)->get();
    	if(count($elem) === 0) {
    		PageController::error404();
    	}
    	dd($page);
    }
}
