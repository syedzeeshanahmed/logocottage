<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenReq extends Model
{
    protected $fillable = [ 'package_name', 'package_price', 'description', 'budget' , 'schedule'];
    protected $table = 'general_requirements';	
}
