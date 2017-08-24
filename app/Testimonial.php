<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['status', 'rating', 'description', 'user_id','guest_id', 'order_id'];
}
