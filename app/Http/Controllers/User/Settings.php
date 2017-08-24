<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\User;
use App\Quote;
use Validator;
use Hash;
class Settings extends Controller
{   

    public function __construct(){
        $this->middleware('DashboardAccessPermission');
    }

    protected $rules_password = [
        'curr_password'=>'required',
        'new_password'=>'required',
        'repeat_password'=>'required|same:new_password',
    ];

    public function index(){
        $user = User::where( 'id' , session('dp_dash_id'))->first();
            $errors = null;
            return view('user.settings', compact('user', 'errors'));
    }

    public function update(Request $request){
        $row = [
            "name" => $request->name ,
              "number" => $request->number ,
              "city" =>$request->city ,
              "country" =>$request->country  
        ];

        $id = User::where('email', session('dp_dash_em'))->update($row);
        $user = User::where('email', session('dp_dash_em'))->first();
        $errors = null ;
        return view('user.settings', compact('user', 'errors'));
    }

    public function changePassword(Request $request){
        $validator = Validator::make($request->all(), $this->rules_password);
        $user = User::where( 'id' , session('dp_dash_id'))->first();
        if ($validator->fails()) {
            $errors = $validator->errors()->first();
            return view('user.settings', compact('errors', 'user'));
        }

        if( Hash::check(  $request->curr_password ,$user->password ) ){
            $row = [
                "password" => Hash::make($request->new_password)
            ];
            User::where('email', session('dp_dash_em'))->update($row);
            $errors = 'Password saved successfully';
            return view('user.settings', compact('errors', 'user'));
        } else{
            $errors = 'Incorrect Current Password';
            return view('user.settings', compact('errors', 'user'));
        } 
        


        // dd($request);        
    }
}
