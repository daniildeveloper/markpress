<?php

use Illuminate\Database\Seeder;
use App\DynamicRoute as R;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = new R();
        $main->slug = "main";
        $main->model = "pages" ;
        $main->save();
    }
}
