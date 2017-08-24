<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Booking;
use Validator;


class Bookings extends Controller
{
    protected $rules_quote = [
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
            'number'=>'required',
            'date'=>'required'
        ];

    public function book(Request $request){
        $validator = Validator::make($request->all(), $this->rules_quote);
        $isUser = true;
        if ($validator->fails()) {
            return redirect( route('user.book') )
                        ->withErrors($validator)
                        ->withInput();
        }

        $row = [
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'number'=>$request->number,
            'date'=>$request->date
        ];

        Mail::send('mails_layout.thankyou', ['quote'=> $row], function ($message) use ($row )
        {   

            $subject = 'Design Proficient | Call Booking';
            $message->subject($subject);

            $message->from (env('MAIL_USERNAME_SUPPORT')  , 'Design Proficient');
            $message->to( $row['email'] , $row['name'] );

        });
        
        Booking::create( $row );
        $this->notify_stakeholders( $row );
        return redirect( route('thankyou') );
    }

    public function notify_stakeholders($quote){
        $title = 'Design Proficient | Call booking';
        $content = 'Design Proficient';

        Mail::send('mails_layout.notification', ['row'=> $quote , 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Design Proficient | Call Booking';
            $message->subject($subject);

            $message->from(env('MAIL_USERNAME_QUERY') , 'Design Proficient');
            $message->to(env('MAIL_USERNAME_QUERY') );

        });
    }
}
