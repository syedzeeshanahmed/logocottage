<?php

namespace App\Http\Controllers;
use App\CustomPackage;
use App\CustomPackageItems;
use App\Item;
use App\Addon;
use App\Http\Controllers\Globals;
use Validator;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Guest;
use App\OrderAddon;
class CustomPackages extends Controller
{

    protected $helper, $users;

    protected  $rules_custom = [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'country'=>'required',
            'items'=>'required'
        ];




    function __construct(){
        $this->helper = new Globals();
        $this->users = new Users();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $items = Item::where( 'is_addon', 0)->get();
        $addons = Item::where( 'is_addon', 1)->get(); 
        $categories = [
            'should be empty',
            'Website Design & Development',
            'Brand Development',
            'Digital Marketing',
            'Motion Graphics'
        ];
        $itemChunks = $items->groupBy('category_id');
        $addons = $addons->groupBy('category_id');

        // dd( $itemChunks );
        // dd( $addons );

        return view('custom-packages', compact('itemChunks', 'categories', 'addons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = [
            'should be empty',
            'Website Design & Development',
            'Brand Development',
            'Digital Marketing',
            'Motion Graphics'
        ];

        $emailAddons=null; 
        $isUser=true;

        $validator = Validator::make($request->all(), $this->rules_custom);
        
        if ($validator->fails()) {
            return redirect( route('custom-packages') )
                        ->withErrors($validator)
                        ->withInput();
        }

        $total = 0;
         if( session( 'is_logged' ) == 1 ){
            $id = $this->users->isUser( session( 'dp_dash_em' ) );
         } else{
            $isUser = true;
            $id = $this->users->isUser( $request->email );
            if( $id == null ){
                $id = $this->users->isGuest( $request->email );
                $isUser = false;
            }   
            
            if( $id == null ){
                $row = [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'number'=>$request->phone,
                    'country'=>$request->country
                ];
                $guest = Guest::create(  $row );
                $id = $guest->id;
                $isUser = false;
            }
         }
        
        $allItems = Item::whereIn( 'id' , $request->items  )
                            ->where('is_addon', 0)->get();

        $allAddons = Item::whereIn( 'id' , $request->items  )
                            ->where('is_addon', 1)->get();                    
        $ind=0;
        foreach ($allItems as $item) {
            $ind++;
            $line = '';
            $quantity = $request->get('qty'. $item->id)[0];
            $quantity = ($quantity==null) ? 1 : $quantity;
            $total += $item->price * $quantity;

            $row = [ 'name'=> $item->name , 'price'=>$item->price , 'quantity'=>$quantity, 'addon'=> $line ];
            $emailItems[] = $row;
        }

        foreach ($allAddons as $item) {
            $ind++;
            $line = '';
            $quantity = $request->get('qty'. $item->id)[0];
            $quantity = ($quantity==null) ? 1 : $quantity;
            $total += $item->price * $quantity;

            $row = [ 'name'=> $item->name , 'price'=>$item->price , 'quantity'=>$quantity, 'addon'=> $line ];
            $emailAddons[] = $row;
        }


        $quote = [ 'user_id'=> ($isUser) ? $id : null ,
                   'guest_id'=> (!$isUser) ? $id : null,
                   'status' => 0, 
                   'amount'=> $total ];

                
        
        $customPackage = CustomPackage::create( $quote );      



        foreach ($allItems as $item) {
            $quantity = $request->get('qty'. $item->id)[0];
            $singleOrderItem = CustomPackageItems::create( [ 'order_id' => $customPackage->id, 'item_id' => $item->id, 
            'quantity' => ($quantity==null) ? 1 : $quantity  ] );
        }

        foreach ($allAddons as $item) {
            $quantity = $request->get('qty'. $item->id)[0];
            $singleOrderItem = CustomPackageItems::create( [ 'order_id' => $customPackage->id, 'item_id' => $item->id, 
            'quantity' => ($quantity==null) ? 1 : $quantity  ] );
            
        }



        if( $isUser ){
            $mailUser = User::where( 'id' , $id )->get()->first();
        } else{
            $mailUser = Guest::where('id' , $id)->get()->first();
        }


        Mail::send('mails_layout.thankyou-custom', [ 'quote'=> $quote], function ($message) use ($request )
        {   

            $subject = 'Design Proficient | Custom Quote';
            $message->subject($subject);

            $message->from(env('MAIL_USERNAME_SUPPORT'), 'Design Proficient');
            $message->to( $request->email , $request->name );

        });


        $this->notify_stakeholders($emailItems, $emailAddons, $total, $mailUser  ,'notification-custom-order');

        return redirect( route('thankyou') );
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


    public function notify_stakeholders($emailItems, $emailAddons,  $total, $user , $mailTemplate){
        $title = 'Design Proficient | Quote';
        $content = 'Design Proficient';

        Mail::send('mails_layout.' . $mailTemplate , ['items'=> $emailItems, 'addons'=> $emailAddons, 'user'=> $user, 'total'=> $total, 'title' => $title, 'content' => $content], function ($message)
        {   

            $subject = 'Design Proficient | Custom Package Order';
            $message->subject($subject);

            $message->from( env('MAIL_USERNAME_REQUIREMENTS') , 'Design Proficient');
            $message->to( env('MAIL_USERNAME_REQUIREMENTS')  );

        });
    }


}
