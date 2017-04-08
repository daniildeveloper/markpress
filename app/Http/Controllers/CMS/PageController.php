<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * show pages in table.
     * @return [type] [description]
     */
    public function index() {
      return view("dashboard.cms.page.index", [
        "pages" => DB::table("pages")->paginate(30),
        ]);
    }
}
