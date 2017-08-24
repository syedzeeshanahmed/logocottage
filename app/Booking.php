<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    	'name',
            'email',
            'description',
            'number',
            'date'
    ];
}
