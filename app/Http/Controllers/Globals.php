<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Globals extends Controller
{
    public function notify_stakeholders($quote, $mailTemplate){
        $title = 'Design Proficient | Quote';
        $content = 'Design Proficient';

        Mail::send('mails_layout.' . $mailTemplate , ['row'=> $quote , 'title' => $title, 'content' => $content], function ($message) use ($quote )
        {   

            $subject = 'Design Proficient | Query';
            $message->subject($subject);

            $message->from( env('MAIL_USERNAME_QUERY') , 'Design Proficient');
            $message->to( env('MAIL_USERNAME_QUERY')  );

        });
    }
}
