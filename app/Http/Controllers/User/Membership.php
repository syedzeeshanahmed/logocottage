<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Membership as mb;

class Membership extends Controller
{
    public function index(){
    	$memberships = mb::where('user_id', session('dp_dash_id'))->get();
    	$membershipsDetail = [ 
            [ 'bronze', 275] , ['silver',375], ['gold',475], ['platinum',575] 
        ];
    	return view('user.membership', compact('membershipsDetail', 'memberships'));
    }
}
