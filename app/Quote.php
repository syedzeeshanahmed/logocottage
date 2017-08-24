<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
    	'name', 'email', 'number', 'country', 'interest', 'budget', 'description', 'page', 'user_id', 'guest_id'
    ];
}
