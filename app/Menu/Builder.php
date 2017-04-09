<?php

namespace App\Menu;

/**
 * Menu builder
 */
class Builder
{
    /**
     * The items container
     * @var array
     */
    protected $items;

    /**
     * this menu name
     * @var string
     */
    protected $name;

    /**
     * menu configuration data
     * @var array
     */
    protected $conf;

    /**
     * the route group attibute stack
     * @var array
     */
    protected $groupStack = array();

    /**
     * reserved attributes
     * @var array
     */
    protected $reserved = array(
        "route",
        "action",
        "url",
        "prefix",
        "parent",
        "resource",
        "raw",
    );

    /**
     * init menu manager
     */
    public function __construct($name, $conf)
    {
        $this->name = $name;

        // create laravel collection to store menu items
        $this->items = new Collection();

        $this->conf = $conf;

    }

    public function add($title, $options = "") {
      $id = isset($options['id']) ? $options['id'] : $this->id();

      $item = new Item($this, $id, $title, $options);
      // 
      // 
      // 
      // 
      // 
    }

    /**
     * generate an integer identifier for each new item 
     * @return int
     */
    public function id() {
      return uniqid(rand());
    }
}
