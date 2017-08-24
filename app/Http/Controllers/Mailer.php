<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Quote;

class Mailer extends Controller
{
    public function mail_quote(Request $request){
        $title = 'Logo sensation | Query';
        $content = 'Query at Logo sensation';


        Mail::send('mails_layout.contact', ['title' => $title, 'content' => $content], function ($message) use ($request)
        {   
            
            $address = $request->email;
            $name =  $request->name;

                $subject = 'Logo Sensation | Query';
                $message->subject($subject);

            $message->from('discuss@logosensation.com', 'Logo Sensation | Discuss');
            $message->to( $request->email );

        });
        $quote = [ 'name'=> $request->name,
                   'email'=> $request->email,
                   'number'=> $request->number,
                   'description'=> $request->description,
                   'interest'=> $request->interest,
                   'budget'=> $request->budget,
                   'country'=> $request->country,
                   'page'=> $request->page];
        Quote::create($quote);

        Mail::send('mails_layout.newsletter_contact', ['quote'=> $quote , 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Logo Sensation | Query';
            $message->subject($subject);

            $message->from('discuss@logosensation.com', 'Logo Sensation');
            $message->to( $quote['email'] , $quote['name'] );

        });

        $this->notify_stakeholders($quote);



        return redirect( route('thankyou') );
    }

    public function notify_stakeholders($quote){
        $title = 'test-title';
        $content = 'testing content';

        Mail::send('mails_layout.stakeholder', ['quote'=> $quote , 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Logo Sensation | Query';
            $message->subject($subject);

            $message->from('discuss@logosensation.com', 'Logo Sensation');
            $message->to( 'discuss@logosensation.com' );

        });
    }


}
