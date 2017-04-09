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

    public function make($name, $callback)
    {
        if (is_callable($callback)) {
            if (!array_key_exists($name, $this->menu)) {
                $this->menu[$name] = new Builder($name, $this->loadConf($name));
            }
        }
    }
}
