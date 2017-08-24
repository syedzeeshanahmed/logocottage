<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [ 'membership_id', 'user_id', 'guest_id', 'active' ];
}
