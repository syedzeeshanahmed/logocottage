<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogoReq extends Model
{
    protected $fillable = [ 'package_name', 'package_price', 'title', 'description' , 
    						'comments' , 'features' , 'perception' , 'user_id' , 'guest_id' ];
    protected $table = 'logo_requirements';						
}
