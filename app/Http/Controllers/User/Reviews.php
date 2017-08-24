<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Testimonial;
use App\Order;


class Reviews extends Controller
{

    public function __construct(){
        $this->middleware('DashboardAccessPermission');
    }


	
    public function index(){

        $testimonials = Testimonial::where('user_id', session('dp_dash_id'))->get();
            if( !collect($testimonials)->isNotEmpty() ) { $testimonials = null; }
            return view('user.reviews', compact('testimonials') );

    }

    public function save(Request $request){

    	$reviewRow = [
    		'status' => 0,
    		'rating' => $request->rating,
    		'description' => $request->review,
    		'user_id' => session('dp_dash_id'),
    		'guest_id' => null,
    		'order_id' => $request->order_id
    	];

    	Testimonial::create( $reviewRow );
    	$order = Order::find($request->order_id );
    	$order->Testimonial = 1;
    	$order->save();
    	return redirect( route('dash.reviews') );
    }
}
