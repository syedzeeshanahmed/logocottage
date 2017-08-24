<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class Guests extends Controller
{

    public static function create($request){
    	$guest = [
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'city'=>  'not assigned' ,
            'country'=>$request->country
        ];
        return  Guest::create($guest);

    }
}
