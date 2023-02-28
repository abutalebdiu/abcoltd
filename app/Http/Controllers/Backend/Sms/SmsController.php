<?php

namespace App\Http\Controllers\Backend\Sms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CustomNumber;

class SmsController extends Controller
{
    public function custommessage(){
        $data['number'] = CustomNumber::get();
        return view('backend.sms.custom-message',$data);
    }
    public function custommessagebo(){
        return view('backend.sms.custom-message-bo');
    }
}
