<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', "PageController@showIndexPage");
Route::group(["prefix" => "markpress", "middleware" => "auth"], function () {
  Route::group(["prefix"=> "cms"], function() {
    Route::get("/", "CMS\DashboardController@showDashboard");
  });
});
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get("{slug}", "RouteController@start");


