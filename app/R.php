<?php
namespace App;

use Illuminate\Support\Facades\DB;

/**
 * Хранит в е важне данные
 */
class R
{
    /**
     * return site name
     * @return string site name
     */
    public static function getSiteName()
    {
        return DB::table('site_datas')->where("slug", "site_name")->get()[0]->value;
    }

}
