<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\File;
use App\Order;
use App\Handover;

class Files extends Controller
{
	public function __construct(){
		$this->middleware('DashboardAccessPermission');
	}
	
    public function index(){

        $files = Order::join('handovers as h' , 'h.order_id', '=' , 'orders.id')
        				->join('files as f' , 'f.handover_id', '=' , 'h.id')
        				->where('orders.user_id', session('dp_dash_id') )
        				->get();
        if( !collect($files)->isNotEmpty() ) { $files = null; }

    	return view('user.files',  compact('files') );
    }

    public function download($file){
    	$path = storage_path('app/files/'. session('dp_dash_id') . "/" . $file);
    	return response()->download( $path );
    }
}
