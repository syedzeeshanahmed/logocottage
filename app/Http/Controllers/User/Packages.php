<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class Packages extends Controller
{

    public function __construct(){
        $this->middleware('DashboardAccessPermission');
    }


    public function index(){
    	return View('user.packages');
    }
}
