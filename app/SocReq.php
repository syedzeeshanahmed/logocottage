<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocReq extends Model
{
    protected $fillable = [ 'package_name', 'package_price', 'outlets' ,'description', 'budget' , 'schedule'];
    protected $table = 'social_requirements';	
}
