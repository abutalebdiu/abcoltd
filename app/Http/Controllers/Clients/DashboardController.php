<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Client;
use App\Model\Deposit;
use App\Model\ChildIpo;

class DashboardController extends Controller
{
    
	public function logout()
	{
 		Auth::logout();
        return redirect()->route('frontend');
	}


	public function index()
	{
          $data['client'] = Client::where('code',Auth::user()->code)->first();
        
        $data['clients'] = ChildIpo::where('master_code',Auth::user()->code)->where('status',2)->get();
        
        
        
		return view('frontend.clients.dashboard',$data);
	}




    public function clientcode()
    {
        
        return view('frontend.clients.child_client_code');
    }










}
