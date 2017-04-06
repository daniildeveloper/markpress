<?php
namespace App\Http\View;

use Illuminate\View\FileViewFinder;

/**
 * Theme View Finder.
 * Все темы находятся в директории public в разделе подтем.
 * Сейчас активная тема хранится в памяти дркументации
 * TODO: store active theme in database
 */
class ThemeViewFinder extends FileViewFinder
{
    protected $activeTheme;
    protected $basePath;

    public function setBasePath($path)
    {
        $this->basePath = $path;
    }

    public function setActiveTheme($theme)
    {
        $this->activeTheme = $theme;

        array_unshift($this->paths, $this->basePath . "/" . $theme . "/views");
    }
}
