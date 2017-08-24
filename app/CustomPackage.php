<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPackage extends Model
{
    protected $fillable = [ 'item_id', 'user_id' , 'guest_id', 'status', 'amount' ];
    protected $table = 'custom_order';	
}
