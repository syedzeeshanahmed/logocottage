<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPackageItems extends Model
{
    protected $fillable = [ 'item_id' , 'order_id', 'quantity' ];
    protected $table = 'custom_order_items';
}
