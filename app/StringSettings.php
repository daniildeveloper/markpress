<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Настройки в виде строки:
 * 1. "active_theme" => default
 * 2. 
 */
class StringSettings extends Model
{
    protected $table = 'string_settings';
}
