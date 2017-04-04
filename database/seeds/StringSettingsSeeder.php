<?php

use Illuminate\Database\Seeder;
use App\StringSettings as S;

class StringSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $theme = new S();
        $theme->slug = "active_theme";
        $theme->value = "default";
        $theme->save();
    }
}
