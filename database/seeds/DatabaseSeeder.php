<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(StringSettingsSeeder::class);
        $this->call(RouteSeeder::class);
        $this->call(SiteDataSeeder::class);


        // CMS
        $this->call(EntitiesTableSeeder::class);

        // base settings seeder
        $this->call(CMSStringSeeder::class);
        // END CMS
        
        // DEMO DATA
         $this->call(PagesTableSeeder::class);
    }
}
