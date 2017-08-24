<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebReq extends Model
{
    protected $fillable = [ 'package_name', 'package_price', 'business_name', 'business_description' , 
    						'audience' , 'navigation' , 'state' , 'user_id' , 'guest_id' ];
    protected $table = 'web_requirements';	
}
