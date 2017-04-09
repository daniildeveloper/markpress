<?php

namespace App\Menu;

class Menu
{
    /**
     * Menu Collection
     * @var Illuminate\Support\Collection
     */
    protected $collection;

    /**
     * list of menu items
     * @var App\Menu\Menu
     */
    protected $menu = [];

    public function __construct()
    {
        $this->collection = new Collection();
    }
}
