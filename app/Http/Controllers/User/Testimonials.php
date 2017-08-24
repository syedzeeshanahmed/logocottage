<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Testimonials extends Controller
{
    

	public function __construct(){
		$this->middleware('DashboardAccessPermission');
	}


}
