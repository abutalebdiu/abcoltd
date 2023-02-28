<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jobs\MatchSendSms;
use Auth;
use App\Model\CustomNumber;

class SmsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendmessage(Request $request)
    {

        $datas =  CustomNumber::all();

        $data['message'] = $request->message;



        foreach($datas as $datanumber){

            $data['number'] = $datanumber->number;
           
            try{
                    $smsJob = new MatchSendSms($data['number'],$data['message']);
              
                    dispatch($smsJob);
            }
            catch(\Exception $e){
                echo $e->getMessage();
            }
            

        }

 
        $notification = array(
            'message' => 'SMS Send Successfully Completed!',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);

        // chunk from database
        // jobs queue


        // $SmsService = new SmsService();
        // return $SmsService->smsFire('01714078743', 'test message');



    }



    
}