<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Membership;
use Validator;
use App\Http\Controllers\Users;


class Memberships extends Controller
{


    protected $users;


    public function __construct(){
        $this->users = new Users();
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function apply(Request $request)
    {
        $memberships = [ 
            [ 'bronze', 275] , ['silver',375], ['gold',475], ['platinum',575] 
        ];

        $validator = Validator::make($request->all(), [ 'email' => 'required']  );
        
        if ($validator->fails()) {
            return redirect( route('dash.membership') )
                        ->withErrors($validator)
                        ->withInput();
        }

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


        $record = [
           'membership_id' => $request->membership_id,   
           'user_id'=> ($isUser) ? $id : null ,
           'guest_id'=> (!$isUser) ? $id : null 
        ];


        $membership = Membership::create( $record );


        Mail::send('mails_layout.membership', ['title' => 'Membership | Design Proficient', 'content' => ''], function ($message) use ($request)
            {   

                $subject = 'Membership | Design Proficient';
                $message->subject($subject);

                $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
                $message->to( $request->email);

        });


        return redirect('https://www.designquotations.com/pg2/paynow/index.php?amount='. $memberships[ $request->membership_id ][1] .'&currency=USD&item='. $memberships[ $request->membership_id ][0] .'&semail='. $request->email.'&site=4&pp=&tw=1');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
