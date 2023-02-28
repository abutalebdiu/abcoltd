<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;
use App\Model\Client;
use App\Model\Deposit;
use App\Model\ChildIpo;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data['student'] = User::find($id);
        return view('frontend.clients.profile',$data);
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
    public function edit()
    {
        $id = Auth::user()->id;
        $data['student'] = User::find($id);
        return view('frontend.clients.editprofile',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'mobile'=> 'required',
            'email' => 'nullable|email|unique:users,email,'.Auth::user()->id.',id' 
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

    
            $user =  User::find(Auth::user()->id);
            $user->name     = $request->name;
            $user->mobile   = $request->mobile;
            $user->email    = $request->email;
            
            if($request->new_password)
            {
                $user->password = bcrypt($request->new_password);
            }
            
            $result =  $user->save();



            if($result)
            {
                $notification = array(
                    'message' => 'Profile Update Successfully Complete!',
                    'alert-type' => 'success'
                );

                return redirect()->route('client.profile');
            }
            else{

                $notification = array(
                    'message' => 'Something Wrong!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

            
        }
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




    public function balanceinquery()
    {
        $data['client'] = Client::where('code',Auth::user()->code)->first();
        
        $data['clients'] = ChildIpo::where('master_code',Auth::user()->code)->get();
        
        
        return view('frontend.clients.balanceinquery',$data);
    }



    public function withdrawrequest()
    {

    }


    public function deposit()
    {
        $data['deposit'] = Deposit::where('client_code',Auth::user()->code)->get();

 


        return view('frontend.clients.deposit',$data);
    }



    public function depositstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount'=> 'required',
            'type'=> 'required',
            'attachment' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

    
            $deposit =  new Deposit();



            $lastdepositcount = Deposit::count();
            $lastdepositid    = Deposit::orderBy('id','DESC')->first();

           
            if($lastdepositcount>0){
                $deposit->uid   = $lastdepositid->uid+1;
            }
            else{
                $deposit->uid   = '1001';
            } 

            $deposit->code      = Auth::user()->code;
            $deposit->type      = $request->type;
            $deposit->amount    = $request->amount;

            $attachment = $request->attachment;

            if($attachment){
                $uniqname = uniqid();
                $ext = strtolower($attachment->getClientOriginalExtension());
                $filepath = 'public/attachments/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $attachment->move($filepath,$imagename);
                $deposit->attachment  = $imagename;
            }


            $deposit->status    = 1;
            $result = $deposit->save();



            if($result)
            {
                $notification = array(
                    'message' => 'Profile Update Successfully Complete!',
                    'alert-type' => 'success'
                );

                return redirect()->route('client.profile');
            }
            else{

                $notification = array(
                    'message' => 'Something Wrong!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }

            
        }
    }















}
