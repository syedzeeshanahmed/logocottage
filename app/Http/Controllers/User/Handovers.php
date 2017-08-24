<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class Handovers extends Controller
{

	public function __construct(){
		$this->middleware('DashboardAccessPermission');
	}

    public function index(){
    	return view('user.handover');
    }
}
