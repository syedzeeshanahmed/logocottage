<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'number', 'city', 'country', 'verified', 'user_id', 'guest_id'
    ];
}
