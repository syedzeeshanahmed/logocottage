<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Quote;
use App\User;

class Quotes extends Controller
{

    public function __construct(){
        $this->middleware('DashboardAccessPermission');
    }


    public function index(){

        $quotes = Quote::where('user_id', session('dp_dash_id'))->get();
            if( !collect($quotes)->isNotEmpty() ) { $quotes = null; }
            return view('user.quotes', compact('quotes') );
    }
}
