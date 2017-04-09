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

    /**
     * crate new menu instance
     * @param  string $name
     * @param  callable $callback
     * @return App\Menu\Menu
     */
    public function make($name, $callback)
    {
        if (is_callable($callback)) {
            if (!array_key_exists($name, $this->menu)) {
                $this->menu[$name] = new Builder($name, $this->loadConf($name));
            }
            // register the items
            call_user_func($callback, $this->menu[$name]);

            // storing each menu instance into collection
            $this->collection->put($name, $this->menu[$name]);

            // make instance available in all views
            view()->share($name, $this->menu[$name]);
            return $this->menu[$name];
        }
    }

    /**
     * Loads and merges configuration data
     *
     * @param  string  $name
     * @return array
     */
    public function loadConf($name)
    {

        $options = config('laravel-menu.settings');
        $name    = strtolower($name);

        if (isset($options[$name]) && is_array($options[$name])) {
            return array_merge($options['default'], $options[$name]);
        }

        return $options['default'];
    }

    /**
     * Return Menu instance from the collection by key
     *
     * @param  string  $key
     * @return App\Menu\Item
     */
    public function get($key)
    {

        return $this->collection->get($key);

    }

    /**
     * Return Menu collection
     *
     * @return \Illuminate\Support\Collection
     */
    public function getCollection()
    {

        return $this->collection;

    }

    /**
     * Alias for getCollection
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {

        return $this->collection;

    }
}
