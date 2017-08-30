<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Guests;
use App\Guest;
use Mail;
use App\Quote as QuoteModel;
use Validator;

class Quote extends Controller
{	
	protected $rules_quote = [
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
            'number'=>'required',
            'interest'=>'required',
            'budget'=>'required',
            'country'=>'required'
        ];

    protected $Short_quote = [
        'name' => 'required',
        'email' => 'required',
        'number' => 'required',
        'additional' => 'required',
        'page' => 'required',
    ];
    
	public function save(Request $request){
		$validator = Validator::make($request->all(), $this->rules_quote);
        $isUser = true;
        if ($validator->fails()) {
            return redirect( $request->page )
                        ->withErrors($validator)
                        ->withInput();
        }

        if( session( 'is_logged' ) == 1 ){
            $id = $this->isUser( session( 'dp_dash_em' ) );
        } else{
            $id = $this->isUser( $request->email );
            if( $id == null ){
                $id = $this->isGuest( $request->email );
                $isUser = false;
            }   

            if( $id == null ){
                $guest = Guests::create( $request );
                $id = $guest->id;
                $isUser = false;
            }            
        }



       
 
        
        $title = 'Design Proficient | Quote';
        $content = 'Quote at Design Proficient';

        $quote = [ 
                   'description'=> $request->description,
                   'interest'=> $request->interest,
                   'budget'=> $request->budget,
                   'page'=> $request->page,
                   'user_id'=> ($isUser) ? $id : null ,
                   'guest_id'=> (!$isUser) ? $id : null ];

        QuoteModel::create($quote);
        

        Mail::send('mails_layout.thankyou-quote', ['quote'=> $quote , 'title' => $title, 'content' => $content], function ($message) use ($request )
        {   

            $subject = 'Design Proficient | Quote';
            $message->subject($subject);

            $message->from(env('MAIL_USERNAME_SUPPORT'), 'Design Proficient');
            $message->to( $request->email , $request->name );

        });

        if( $isUser ){
            $mailUser = User::where( 'id' , $id )->get()->first();
        } else{
            $mailUser = Guest::where('id' , $id)->get()->first();
        }

        $this->notify_stakeholders( $quote, $mailUser );

        return redirect( route('thankyou') );


	}


public function saveShortQuote(Request $request){
    
        $row = [
            'name' =>  $request->name,
            'email' =>  $request->email,
            'number' =>  $request->number,
            'additional' =>  $request->additional,
            'page' => $request->page
        ];
        
        

       $validator = Validator::make($request->all(), $this->Short_quote);
       $isUser = true;
       if ($validator->fails()) {
            echo 404;
            return false;
       }

       if( session( 'is_logged' ) == 1 ){
           $id = $this->isUser( session( 'dp_dash_em' ) );
       } else{
           $id = $this->isUser( $request->email );
           if( $id == null ){
               $id = $this->isGuest( $request->email );
               $isUser = false;
           }

           if( $id == null ){
               $guest = Guests::create( $request );
               $id = $guest->id;
               $isUser = false;
           }
       }






       $title = 'Design Proficient | Quote';
       $content = 'Quote at Design Proficient';

       $quote = [
           'description'=> $request->additional,
           'interest'=> $request->page,
           'budget'=> 'not applicable',
           'page'=> $request->page,
           'user_id'=> ($isUser) ? $id : null ,
           'guest_id'=> (!$isUser) ? $id : null ];

       QuoteModel::create($quote);


       Mail::send('mails_layout.thankyou', ['quote'=> $row , 'title' => $title, 'content' => $content], function ($message) use ($request )
       {

           $subject = 'Design Proficient | Quote';
           $message->subject($subject);

           $message->from(env('MAIL_USERNAME_SUPPORT'), 'Design Proficient');
           $message->to( $request->email , $request->name );

       });

       if( $isUser ){
           $mailUser = User::where( 'id' , $id )->get()->first();
       } else{
           $mailUser = Guest::where('id' , $id)->get()->first();
       }

       $this->notify_stakeholders( $quote, $mailUser );

       return response(  $row  , 200 );

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

    public function notify_stakeholders($quote, $mailUser){
        $title = 'Design Proficient | Quote';
        $content = 'Design Proficient';

        Mail::send('mails_layout.notification', ['row'=> $quote, 'user' => $mailUser , 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Design Proficient | Query';
            $message->subject($subject);

            $message->from( env('MAIL_USERNAME_QUERY') , 'Design Proficient');
            $message->to( env('MAIL_USERNAME_QUERY')  );

        });
    }	
}
