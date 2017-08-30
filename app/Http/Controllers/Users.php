<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guest;
use App\Quote;
use Validator;
use Hash;
use App\Subscription;
use Mail;

class Users extends Controller
{

       protected $rules = [
            'email'=>'required',
            'password'=>'required'
        ];

        protected $rules_subscribe = [
            'email'=>'required',
            'password'=>'required'
        ];     

       protected $register_rules = [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'number'=>'required',
            'city'=>'required',
            'country'=>'required',
        ];   

    public function Subscribe(Request $request){
                $title = 'Design Profecient | mail';
                $content = 'Mail at Design Profecient';

        $user = [
                'email' =>  $request->email,
                'name' => 'not applicable'
            ];


            $subUser = Subscription::where( 'email' , $request->email )->get()->first();

            if( !collect($subUser)->isNotEmpty() ){
                Subscription::create($user);

                Mail::send('mails_layout.subscribe', ['title' => 'Subscription at Design Profecient | ' . $user['name'] , 'content' => ''], function ($message) use ($request)
                    {   

                        $subject = 'Design Profecient | Subscription';
                        $message->subject($subject);
                        $message->attach( asset('files/ebook-design-proficient.pdf') );

                        $message->from(  env('MAIL_USERNAME_SUBSCRIBE') , 'Design Profecient');
                        $message->to( $request->email);

                    });        
            } 
            

        $user['status'] = 'eBook Sent';
            
        $this->notify_stakeholders($user, null);        
    
        
        return redirect( route('thankyou') );
    }
    
    
    public function login(Request $request){
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect( route('login') )
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = User::where('email' , $request->email)->first();
        
        if( collect($user)->isNotEmpty() && Hash::check( $request->password , $user->password) ){
            if( $user->verified == 1 ){
                session( [ 'dp_dash_em'=> $user->email, 'dp_dash_nm'=> $user->name,  'dp_dash_id'=> $user->id, 'is_logged'=>1 ] );
                
                return redirect( route( 'user.profile' ) );
            } else{
                $creds = 'Please verify your email to login';
                return redirect( route('login'))
                    ->withErrors($creds)
                    ->withInput();
            }
            
        } else{
            $creds = 'wrong Email/Password field';
            return redirect( route('login'))
                    ->withErrors($creds)
                    ->withInput();
        }             
        
    }

     public function toProfile(){
        if(session('is_logged') == 1){
            $user = User::where( 'id' , session('dp_dash_id'))->first();
            $quotes = Quote::where('user_id' , session('dp_dash_id') )->get();
            return view('dashboard' , compact('user', 'quotes'));
        } else{
            return redirect( route( 'login' ) );
        }
    }

    public function create(){
        $user = new User;
        $user->name = 'Talha Sheikh';
        $user->email = 'talhasheikh.pro@gmail.com';
        $user->password = Hash::make('test123');
        $user->city = 'isl';
        $user->country = 'pak';
        $user->number = '654321';
        $user->verified = '1';
        $user->save();
    }

    public function logout(){
        session( [ 'dp_dash_em'=> null, 'dp_dash_nm'=> null,  'dp_dash_id'=> null, 'is_logged'=> 0 ] );
            return redirect( route( 'login' ) );
    }

    public function verify($id, $hash){
        $user = User::find( $id );
       if( collect($user)->isNotEmpty() && Hash::check(  $user->email,  $hash) ){
            $user->verified = 1;
            $user->save();
            $creds = 'verified successfully, login to continue';
            return redirect( route('login'))
                    ->withErrors($creds);
        } else{
            $creds = 'incorrect verification, please try again';
            return redirect( route('login'))
                    ->withErrors($creds)
                    ->withInput();
        } 

    }


    public function reset(Request $request){

                $title = 'Design Profecient | mail';
        $content = 'Mail at Design Profecient';

        $user = User::where('email' , $request->email)->first();
        if( !collect($user)->isNotEmpty() ){
            $creds = [ 'main' => ['Email could not be found'], 'second' => ['Your email does not exist, maybe check spelling?' ] ] ;
            return redirect( route('user.forgot'))
                    ->withErrors($creds);
        }
                
        $link = env('WEB_URL') . 'user/reset/password/' . $user->id   . '/' . Hash::make( $user->email );
        try{
            Mail::send('mails_layout.reset', ['link'=> $link , 'title' => $title, 'content' => $content], function ($message) use ($user )
                {   

                    $subject = 'Design Proficient | Password Reset Request';
                    $message->subject($subject);

                    $message->from( env('MAIL_USERNAME_SUPPORT') , 'Design Proficient');
                    $message->to( $user['email'] , $user['name'] );

                });
        }catch(Exception $e){
            echo $e->getMessage();
        }

        if( collect($user)->isNotEmpty() ){
            $creds = [ 'main' => ['Reset link sent'], 'second' => ['Please check your email, we have sent you a password reset link' ] ] ;
            return redirect( route('user.forgot'))
                    ->withErrors($creds);
        }
    }

    public function savePassword(Request $request){


                $title = 'Design Profecient | mail';
        $content = 'Mail at Design Profecient';

        $user = User::where( 'email' ,session('reset_email') )->first();
        if( collect($user)->isNotEmpty() ){
            $user->password = Hash::make( $request->password );
            $user->save();

            $creds = [  'changed'=>true, 'main'=> 'Password Changed successfully' , 'second'=>'Login to continue further'] ;
            return view( 'verify', compact('creds') );
        } else{
            $creds = [ 'main' => ['Could not Reset'], 'second' => ['incorrect verification, please try again' ] ] ;
            return redirect( route('user.forgot'))
                    ->withErrors($creds);
        }

    }

    public function resetPassword($id, $hash){
            
                    $title = 'Design Profecient | mail';
        $content = 'Mail at Design Profecient';

        $user = User::find( $id );
        
       if( collect($user)->isNotEmpty() && Hash::check(  $user->email,  $hash) ){
            session( [ 'reset_email' => $user->email ] );
            $creds = [  'password'=> 'true'] ;
            return redirect( route('user.forgot'))
                    ->withErrors($creds);
        } else{
            $creds = [ 'main' => ['Could not Reset'], 'second' => ['incorrect verification, please try again' ] ] ;
            return redirect( route('user.forgot'))
                    ->withErrors($creds);
        }         
    }

    public function register(Request $request){

                $title = 'Design Profecient | mail';
        $content = 'Mail at Design Profecient';

        $validator = Validator::make($request->all(), $this->register_rules);

        if ($validator->fails()) {
            return redirect( route('user.signup') )
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = User::where('email' , $request->email)->first();
        if( collect($user)->isNotEmpty() ){
            $creds = 'You are already registered, please login to continue' ;
            return redirect( route('login'))
                    ->withErrors($creds);
        }

        $title = 'Design Proficient | Query';
        $content = 'Query at Design Proficient';
        $user = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),
            'number'=>$request->number,
            'city'=>$request->city,
            'country'=>$request->country,
            'verified'=> '0'
        ];

        $single = User::create($user);

        $link = env('WEB_URL') . 'user/verify/' . $single->id   . '/' . Hash::make( $request->email );

        try{
            Mail::send('mails_layout.register', ['link'=> $link , 'title' => $title, 'content' => $content], function ($message) use ($user )
                {   

                    $subject = 'Design Proficient | Email Verification';
                    $message->subject($subject);

                    $message->from(  env('MAIL_USERNAME_SUPPORT') , 'Design Proficient');
                    $message->to( $user['email'] , $user['name'] );

                });
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
            return view('verify');
        
    }


   public function isUser($email){
        
        $user = User::where('email', $email)
                         ->first();

        if( collect($user)->isNotEmpty()){
            return $user->id;
        } else{
            return null;
        }

    }

    public function isGuest($email){
        
        $guest = Guest::where('email', $email)
                         ->first();

        if( collect($guest)->isNotEmpty()){
            return $guest->id;
        } else{
            return null;
        }

    }    



    public function notify_stakeholders($quote, $user){
        $title = 'Design Proficient | User Subscription';
        $content = 'Design Proficient';

        Mail::send('mails_layout.notification', ['row'=> $quote , 'user'=> $user, 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Design Proficient |  User Subscription';
            $message->subject($subject);

            $message->from( env('MAIL_USERNAME_QUERY') , 'Design Proficient');
            $message->to( env('MAIL_USERNAME_QUERY')  );

        });
    }



}
