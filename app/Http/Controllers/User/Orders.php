<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Order;

class Orders extends Controller
{

    public function __construct(){
        $this->middleware('DashboardAccessPermission');
    }


    public function index(){
        $orders = Order::join('packages as p', 'p.id', 'orders.package_id')
                        ->where('user_id', session('dp_dash_id'))->get();
        return view('user.order', compact('orders'));
    	
    }
}
