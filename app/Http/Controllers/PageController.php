<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPage($id) {
    	dd($id);
    }

    public static function error404(){
    	dd(404);
    }
}
