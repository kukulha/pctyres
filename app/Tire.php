<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tire extends Model
{
    protected $fillable = [
    	'name', 'slug', 'brand', 'file', 'data'
    ];
}
