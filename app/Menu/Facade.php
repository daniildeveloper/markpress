<?php
namespace App\Menu;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Facade extends BaseFacade
{
    /**
     * get registred name of component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'menu';
    }
}
