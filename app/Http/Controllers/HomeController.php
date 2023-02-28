<?php

namespace App\Http\Controllers;

use App\Model\BOModify;
use App\Model\BOOpen;
use App\Model\Complain;
use App\Model\Contact;
use App\Model\Deposit;
use App\Model\MobileApp;
use App\Model\Withdraw;
use App\Model\BOCloser;
use App\User;
use Illuminate\Http\Request;
use App\Model\News;
use App\Model\ManPower;
use Carbon\Carbon;
use Auth;
use App\Model\ChildIpo;
use App\Model\ApplyIpo;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['booopen'] = BOOpen::where('status',1)->count();
        $data['booomodify'] = BOModify::where('status',1)->count();
        $data['moboleapp'] = MobileApp::where('status',1)->count();
        $data['user'] = User::where('status',1)->count();
        $data['deposit'] = Deposit::where('status',1)->count();
        $data['withdraw'] = Withdraw::where('status',1)->count();
        $data['complain'] = Complain::where('status',1)->count();
        $data['contact'] = Contact::where('status',1)->count();
        $data['mastercode'] = ChildIpo::where('status',1)->count();
        $data['boclosercount'] = BOCloser::count();
        $data['ipoapply'] = ApplyIpo::count();

//        $data['contact'] = ::get();
        return view('backend.dashboard',$data);
    }





    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('frontend');
    }



}
