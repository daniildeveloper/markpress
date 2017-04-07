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
        // $this->call(UsersTableSeeder::class);
        $this->call(StringSettingsSeeder::class);
        $this->call(RouteSeeder::class);

        // CMS
        
        // base settings seeder
        $this->call(CMSStringSeeder::class);
        // END CMS
    }
}
