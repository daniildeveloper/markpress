<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $main = new Page();
        $main->slug = "main";
        $main->first_title ="Main Page";
        $main->second_title="demo data";
        $main->content = "Some content";
        $main->author_id = 1;
        $main->save();
    }
}
