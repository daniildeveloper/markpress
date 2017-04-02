<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicRoute extends Model
{
    protected $table = "dynamic_routes";

    protected $fillable = [
        "method",
        "name",
        "pattern",
        "handler",
        "configuration",
    ];

    public static $validation = [
        "method"  => ['required'],
        'name'    => ['required'],
        'pattern' => ['required'],
        'handler' => ['required'],
    ];

    
}
