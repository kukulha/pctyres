<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
    	'name', 'last_name', 'email', 'phone', 'city', 'company', 'job', 'body'
    ];
}
