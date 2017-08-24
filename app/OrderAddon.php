<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddon extends Model
{
    protected $fillable = [ 'custom_order_item_id', 'item_id' , 'addons_id'];
    protected $table = 'custom_order_items_addons';	
}
