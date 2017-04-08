<?php

namespace App\Http\Controllers\CMS;

use App\DynamicRoute as DRoute;
use App\Http\Controllers\Controller;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * show pages in table.
     * @return [type] [description]
     */
    public function index(Request $request)
    {
        return view("dashboard.cms.page.index", [
            "pages" => DB::table("pages")->paginate(30),
        ]);
    }

    /**
     * show pages in table.
     * @return [type] [description]
     */
    public function show($id, Request $request)
    {
        return view("dashboard.cms.page.index", [
            "pages" => DB::table("pages")->where("id", $id)->paginate(30),
        ]);
    }

    public function create()
    {
        return view("dashboard.cms.page.new", [
            "title" => "Новая страница",

        ]);
    }

    public function store(Request $request)
    {
        $page              = new Page();
        $page->first_title = $request["title"];
        $page->slug        = $request["title"];

        $page->second_title = $request["second_title"];
        $page->content      = $request['content'];
        $page->description  = $request["description"];
        $page->author_id    = Auth::user()->id;
        $page->save();

        // create route
        $route        = new DRoute();
        $route->slug  = $request["title"];
        $route->model = "Page";
        $route->save();
        
        return redirect()->route("page.show", ["id" => $page->id]);
    }
}
