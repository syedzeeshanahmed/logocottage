<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\Guest;
use App\LogoReq;
use App\GenReq;
use App\SocReq;
use App\WebReq;
use Validator;
use Mail;
use App\User;
use App\Http\Controllers\Users;


class Requirements extends Controller
{

    protected  $rules_logo = [
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'description'=>'required',
            'package_name'=>'required',
            'package_price'=>'required',
            'title'=>'required',
            'comments'=>'required',
            'features'=>'required',
            'perception'=>'required'
        ];

    protected $users;

    protected $rules_web = [
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'description'=>'required',
            'business_name'=>'required',
            'package_name'=>'required',
            'package_price'=>'required',
            'audience'=>'required',
            'navigation'=>'required',
            'state'=>'required',
        ];

    protected $rules_social = [
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'country'=>'required',
            'description'=>'required',
            'budget'=>'required',
            'outlets'=>'required',
            'call'=>'required'
        ];


    protected $rules_general = [
            'name'=>'required',
            'email'=>'required',
            'number'=>'required',
            'country'=>'required',
            'description'=>'required',
            'budget'=>'required',
            'call'=>'required'
        ];




    public function __construct(){
        $this->users = new Users();
    }    


    function logo(Request $request){

        $validator = Validator::make($request->all(), $this->rules_logo);
        
        if ($validator->fails()) {
            return redirect( route('order.logo', [ $request->package_name, $request->package_price ]) )
                        ->withErrors($validator)
                        ->withInput();
        }

        $isUser = true;
        $mailUser = null;
        $id = $this->users->isUser( $request->email );
        if( $id == null ){
            $id = $this->users->isGuest( $request->email );
            $isUser = false;
        }   
        
        if( $id == null ){
            $guest = Guests::create( $request );
            $id = $guest->id;
            $isUser = false;
        }

        $quote = [ 'description'=> $request->description,
                   'package_name'=> $request->package_name,
                    'package_price'=> $request->package_price,
                    'title'=> $request->title,
                    'comments'=> $request->comments,
                    'features'=> $request->features,
                    'perception'=> $request->perception,   
                   'user_id'=> ($isUser) ? $id : null ,
                   'guest_id'=> (!$isUser) ? $id : null ];

        $reqs = LogoReq::create( $quote );
        if( $isUser ){
                $mailUser = User::where( 'id' , $id )->get()->first();
            } else{
                $mailUser = Guest::where('id' , $id)->get()->first();
            }
         

            Mail::send('mails_layout.thankyou-custom', ['title' => 'Order Requirements | Design Proficient', 'content' => ''], function ($message) use ($request)
            {   

                $subject = 'Design Proficient | Order Requirements Noted';
                $message->subject($subject);

                $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
                $message->to( $request->email);

            });

        $this->notify_stakeholders( $quote, $mailUser  );    

            return redirect( 'https://www.designquotations.com/pg2/paynow/index.php?amount='.$request->package_price.'&currency=USD&item='. $request->package_name .'&semail='.$request->email.'&site=4&pp=&tw=1'  );


    }

    function web(Request $request){
        $validator = Validator::make($request->all(), $this->rules_web);
        
        if ($validator->fails()) {
            return redirect( route('order.web', [ $request->package_name, $request->package_price ]) )
                        ->withErrors($validator)
                        ->withInput();
        }

        $mailUser = null;
        $isUser = true;
        $id = $this->users->isUser( $request->email );
        if( $id == null ){
            $id = $this->users->isGuest( $request->email );
            $isUser = false;
        }   
        
        if( $id == null ){
            $guest = Guests::create( $request );
            $id = $guest->id;
            $isUser = false;
        }

        $quote = [ 'business_description'=> $request->description,
                   'package_name'=> $request->package_name,
                    'package_price'=> $request->package_price,
                    'business_name'=> $request->business_name,
                    'audience'=> $request->audience,
                    'navigation'=> $request->navigation,
                    'state'=> $request->state,   
                   'user_id'=> ($isUser) ? $id : null ,
                   'guest_id'=> (!$isUser) ? $id : null ];

        

            WebReq::create($quote);

            if( $isUser ){
                $mailUser = User::where( 'id' , $id )->get()->first();
            } else{
                $mailUser = Guest::where('id' , $id)->get()->first();
            }

            Mail::send('mails_layout.thankyou-custom', ['title' => 'Order Requirements | Design Proficient', 'content' => ''], function ($message) use ($request)
            {   

                $subject = 'Design Proficient | Order Requirements Noted';
                $message->subject($subject);

                $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
                $message->to( $request->email);

            });
            $this->notify_stakeholders( $quote, $mailUser  );   
            return redirect( 'https://www.designquotations.com/pg2/paynow/index.php?amount='.$request->package_price.'&currency=USD&item='. $request->package_name .'&semail='.$request->email.'&site=4&pp=&tw=1'  );

    }




    function social(Request $request){
        $validator = Validator::make($request->all(), $this->rules_social);
        
        if ($validator->fails()) {
            return redirect( route('order.media', [ $request->package_name, $request->package_price ]) )
                        ->withErrors($validator)
                        ->withInput();
        }

        $isUser = true;
        $mailUser = null;
        $id = $this->users->isUser( $request->email );
        if( $id == null ){
            $id = $this->users->isGuest( $request->email );
            $isUser = false;
        }   
        
        if( $id == null ){
            $guest = Guests::create( $request );
            $id = $guest->id;
            $isUser = false;
        }

        $requirements = [
            'description'=> $request->description ,
            'package_name'=> $request->package_name,
            'package_price'=> $request->package_price,
            'budget'=> $request->budget ,
            'outlets'=> $request->outlets ,
            'schedule'=> $request->call ,
           'user_id'=> ($isUser) ? $id : null ,
           'guest_id'=> (!$isUser) ? $id : null
        ];

        

            SocReq::create($requirements);

            Mail::send('mails_layout.thankyou-custom', [ 'Order Requirements | Design Proficient', 'content' => ''], function ($message) use ($request)
            {   

                $subject = 'Design Proficient | Order Requirements Noted';
                $message->subject($subject);

                $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
                $message->to( $request->email);

            });
            
            if( $isUser ){
                $mailUser = User::where( 'id' , $id )->get()->first();
            } else{
                $mailUser = Guest::where('id' , $id)->get()->first();
            }
            
            $this->notify_stakeholders( $requirements , $mailUser  );   
            return redirect( 'https://www.designquotations.com/pg2/paynow/index.php?amount='.$request->package_price.'&currency=USD&item='. $request->package_name .'&semail='.$request->email.'&site=4&pp=&tw=1'  );

    }


    function general(Request $request){
        $validator = Validator::make($request->all(), $this->rules_general);
        
        if ($validator->fails()) {
            return redirect( route('order.media', [ $request->package_name, $request->package_price ]) )
                        ->withErrors($validator)
                        ->withInput();
        }

        $isUser = true;
        $mailUser = null;
        $id = $this->users->isUser( $request->email );
        if( $id == null ){
            $id = $this->users->isGuest( $request->email );
            $isUser = false;
        }   
        
        if( $id == null ){
            $guest = Guests::create( $request );
            $id = $guest->id;
            $isUser = false;
        }
        
        $requirements = [
            'description'=> $request->description ,
            'package_name'=> $request->package_name,
            'package_price'=> $request->package_price,
            'budget'=> $request->budget ,
            'schedule'=> $request->call ,
           'user_id'=> ($isUser) ? $id : null ,
           'guest_id'=> (!$isUser) ? $id : null
        ];

        

            $gen = GenReq::create($requirements);

            Mail::send('mails_layout.thankyou-custom', [ 'Order Requirements | Design Proficient',  'content' => ''], function ($message) use ($request)
            {   

                $subject = 'Design Proficient | Order Requirements Noted';
                $message->subject($subject);

                $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
                $message->to( $request->email);

            });
            
            
            if( $isUser ){
                $mailUser = User::where( 'id' , $id )->get()->first();
            } else{
                $mailUser = Guest::where('id' , $id)->get()->first();
            }
            
            $this->notify_stakeholders( $requirements, $mailUser );   
            return redirect( 'https://www.designquotations.com/pg2/paynow/index.php?amount='.$request->package_price.'&currency=USD&item='. $request->package_name .'&semail='.$request->email.'&site=4&pp=&tw=1'  );

    }

    public function notify_stakeholders($quote, $user){
        $title = 'Design Proficient | Requirement Quote';
        $content = 'Design Proficient';

        Mail::send('mails_layout.notification', ['row'=> $quote , 'user'=> $user, 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Design Proficient | Query';
            $message->subject($subject);

            $message->from( env('MAIL_USERNAME_QUERY') , 'Design Proficient');
            $message->to( env('MAIL_USERNAME_QUERY')  );

        });
    }





}
