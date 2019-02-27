<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    protected $fillable = [
    	'name', 'slug', 'excerpt', 'brand', 'file', 'data', 'category'
    ];
}
