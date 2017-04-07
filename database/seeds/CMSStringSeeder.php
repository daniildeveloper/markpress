<?php

use App\Model\CMS\CMSStringSetting as C;
use Illuminate\Database\Seeder;

class CMSStringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // active theme
        $active_theme        = new C();
        $active_theme->slug  = "active_theme";
        $active_theme->value = "default";
        $active_theme->save();
    }
}
