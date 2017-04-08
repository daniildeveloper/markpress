<?php

use App\SiteData as SD;
use Illuminate\Database\Seeder;

class SiteDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // site name
        $site_name        = new SD();
        $site_name->slug  = "site_name";
        $site_name->value = "MarkPress";
        $site_name->save();
    }
}
