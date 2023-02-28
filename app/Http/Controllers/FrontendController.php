<?php

namespace App\Http\Controllers;
use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;
use App\Model\SocialMedia;
use DB;
use Carbon\Carbon;
use Validator;
use Session;
use App\Model\Career;
use App\Model\Client;
use App\Model\Complain;
use App\Model\Contact;
use App\Model\IPO;
use App\Model\Notice;
use App\Model\MobileApp;
use App\User;
use Auth;
use App\Model\Job;
use App\Model\BOModify;
use App\Model\BOOpen;
use App\Model\Balance;
use App\Model\Withdraw;
use App\Model\Gallery;
use App\Model\Deposit;
use App\Model\Slider;
use App\Model\ChildIpo;
use App\Model\ApplyIpo;
use App\Model\Trading;
use App\Model\BOCloser;
use App\Model\ManagementTeam;
use Image;
use Mail;
use App\Jobs\MatchSendSms;


class FrontendController extends Controller
{

	public function clientregister()
	{
		return view('auth.register');
	}



	public function clientregisterstore(Request $request)
	{
		$validator = Validator::make($request->all(), [
            'name'  => 'required',
            'mobile'=> 'required|min:11|max:11',
            'email' => 'required|email',
            'code'  => 'required',
            'boid'  => 'required',
            'password'  => 'required|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{


            $countdata = Client::where('code',$request->code)->where('boid',$request->boid)->count();
            $userdata  = User::where('code',$request->code)->where('boid',$request->boid)->count();
            
            
            if($userdata>0)
            {
                   $notification = array(
                        'message' => 'Client Code Already Exsiting Our Database',
                        'alert-type' => 'error'
                    );
    
                    return redirect()->back()->with($notification);
            }
          

            if($countdata>0)
            {
                
                
                $lastusercount = User::count();
                $lastuserid    = User::orderBy('id','DESC')->first();

                $user = new User();
    
                if($lastusercount>0){
                    $user->user_uid   = $lastuserid->user_uid+1;
                }
                else{
                    $user->user_uid   = '1001';
                }
    
                $user->code     = $request->code;
                $user->boid     = $request->boid;
                $user->name     = $request->name;
                $user->mobile   = $request->mobile;
                $user->email    = $request->email;
                $user->password = bcrypt($request->password);
                $user->role_id  = 3;
                $user->type     = 2;
                $user->status   = 1;
                $result =  $user->save();
    
    
    
                $data = array('name'=>" ");
       
                Mail::send(['text'=>'mail.registration'], $data, function($message) {
                     $message->to('rnisecurities@yahoo.com', ' ')->subject
                        ('Website Notification');
                     $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
                });


                if($result)
                {
                    $notification = array(
                        'message' => 'Client Registration Successfully Complete. Wait for Approval',
                        'alert-type' => 'success'
                    );
    
                    return redirect()->back()->with($notification);
                } 
                else{
    
                    $notification = array(
                        'message' => 'Something Wrong!',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }



            }
            else{


                 $notification = array(
                    'message' => 'Client Code OR BO ID Wrong!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);

            }




        }
	}






    public function clientlogin()
	{

		return view('auth.login');
	}



	public function clientLogindeshboard(Request $request)

	{
        $this->validate($request, [
            
            'username' => 'required',
            'password' => 'required',
        ]);

		$input = $request->all();

       

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'code';
        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {
            if(Auth::user()->role_id==3){
                return redirect()->route('client.dashboard');
            }
            else{
                return redirect()->route('home');
            }


        }
        else{

            $notification = array(
            'message' => 'Your Email OR Password Not Match!',
            'alert-type' => 'error'
            );
      
            return redirect()->route('client.user.login')->with($notification);

            
        }


	}




    public function passwordforgot()
    {
        return view('auth.password_forgot');
    }


    public function passwordreset(Request $request)
    {
        
        $mobile = $request->username;
        
        $finduser = User::where('mobile',$mobile)->first();
        
        
        if($finduser)
        {
            $newpassword = rand(100000,999999);
            
            $finduser->password = bcrypt($newpassword);
            
            $finduser->save();
            
            $notification = array(
                'message' => 'you are successfully change your password! Please check your mobile number',
                'alert-type' => 'success'
            );
            
            
            
            $data['message'] = "Dear ".$finduser->name.",
Your new password is ".$newpassword." 

RNI Securities Ltd.";
            
        
            $data['number'] = $mobile;
           
            try{
                    $smsJob = new MatchSendSms($data['number'],$data['message']);
              
                    dispatch($smsJob);
            }
            catch(\Exception $e){
                echo $e->getMessage();
            }
      
            return redirect()->route('client.user.login')->with($notification);
            
        }
        else{
            
            $notification = array(
            'message' => 'Your provided mobile number Not Match!',
            'alert-type' => 'error'
            );
      
            return redirect()->back()->with($notification);
            
        }
        
        
        
    }
    









public function index()
	{

         $data['sliders'] = Slider::latest()->get();
        $data['blogs'] = Blog::latest()->limit(4)->get();
        $data['notic'] = Notice::latest()->limit(5)->get();
        
		return view('frontend.pages.index',$data);
	}



	public function companyprofile()
	{
		return view('frontend.pages.companyprofile');
	}


	public function branches()
	{

		return view('frontend.pages.branches');

	}

    public function link(){
        return view('frontend.pages.link');
    }

    public function link_post(Request $request){
        // $request->validate([
        //     "name" => "required",
        //     "boid" => "required",
        //     "mobile" => "required",
        //     "bank" => "required",
        //     "account" => "required",
        //     "birthday_date" => "required",
        //     "nid" => "required",
        //     "bo_acknowledgement" => "required",
        //     "nid_att" => "required",
        //     "bi_cheque" => "required",
        //     "sign" => "required",
        // ]);


        $data = new BOOpen();
        $data->name = $request->name;
        $data->boid = $request->boid;
        $data->mobile = $request->mobile;
        $data->bank = $request->bank;
        $data->account = $request->account;
        $data->birthday_date = $request->birthday_date;
        $data->nid = $request->nid;
        $data->email = $request->email;

        // $image = $request->bo_acknowledgement;
        // if($image){
        // $uniqname = uniqid();
        // $ext = strtolower($image->getClientOriginalExtension());
        // $filepath = 'public/frontend/bo_acknowledgement/';
        // $imagename = $filepath.$uniqname.'.'.$ext;
        // $image->move($filepath,$imagename);
        // $data->bo_acknowledgement = $imagename;
        // }

        // $data->nid_att = $request->nid_att;
        $image = $request->nid_att;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/frontend/nid/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->nid_att = $imagename;
        }

        $image = $request->bi_cheque;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/frontend/nid/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->bi_cheque = $imagename;
        }

        $image = $request->photo;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/frontend/cheque/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->photo = $imagename;
        }

        // $data->sign = $request->sign;
        $image = $request->sign;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/frontend/sign/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->sign = $imagename;
        $data->status= 1;
        }

        $data->save();
        $notification = array(
            'message' => 'Link Submit Successfully!',
            'alert-type' => 'success'
            );
            
            return redirect()->route('link')->with($notification);




        
    }



	public function management()
	{
	    $data['team'] = ManagementTeam::find(1);
		return view('frontend.pages.management',$data);

	}



    public function singleboopening()
    {
        return view('frontend.pages.singleboopening');
    }
    
    
    public function jointboopening()
    {
        return view('frontend.pages.jointboopening');
    }
    
    
    

    public  function singleboostor(Request $request){
            echo "success";
    }



    public function fees()
    {
        return view('frontend.pages.fees');
    }


    public function balanceinqueryform()
    {
        if(Auth::Check()){

        $data['balances'] = Balance::where('code',Auth::user()->code)->first();
        $data['clients'] = ChildIpo::where('master_code',Auth::user()->code)->get();
        $data['client'] = Client::where('code',Auth::user()->code)->first();
        
        
        }
        else{
             $data['balances'] = Balance::where('id',0)->first();
             $data['clients'] = ChildIpo::where('master_code',0)->get();
             $data['client'] = Client::where('code',0)->first();
        
        }
        return view('frontend.pages.balanceinqueryform',$data);
    }


    public function depositshow()
    {
        if(Auth::Check()){

        $data['balances'] = Balance::where('code',Auth::user()->code)->first();
        $data['deposit'] = Deposit::latest()->where('client_code',Auth::user()->code)->get();
        }
        else{
             $data['balances'] = Balance::where('id',0)->first();
             $data['deposit'] = Deposit::latest()->where('client_code',0000)->get();
             
        }
        return view('frontend.pages.depositshow',$data);
    }

    public function depositpost(Request $request){
        
          if(Auth::Check()){
        }
        else{
            
            $notification = array(
                'message' => 'Please login First!',
                'alert-type' => 'error'
             );
             return redirect()->route('client.user.login')->with($notification); 
        }

        $request->validate([
            'client_code' => 'required',
            'amount' => 'required',
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'for_deposit' => 'required',
            'bank' => 'required',
            'slep' => 'required'
        ]);

        $depositcount = Deposit::count();
        $lastuserid    = Deposit::orderBy('id','DESC')->first();
        $data = new Deposit();
        if($depositcount>0){
            $data->uid = $lastuserid->uid+1;
        }
        else{
            $data->uid   = '100001';
        }
        $data->user_id = Auth::user()->id;
        $data->client_code = $request->client_code;
        $data->amount = $request->amount;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->for_deposit = $request->for_deposit;
        $data->bank = $request->bank;
        $data->type = $request->for_deposit;
         
        $image = $request->slep;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/frontend/slep/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->attachment = $imagename;
        }
        
        $data->comment = $request->comment;
        $data->status = 1;
        $data->save();
        
        
        $data = array('name'=>" ");
   
        Mail::send(['text'=>'mail.deposit'], $data, function($message) {
             $message->to('rnisecurities@yahoo.com', ' ')->subject
                ('Website Notification');
             $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
        });
        
        
        

        $notification = array(
            'message' => 'Deposit Successfully!',
            'alert-type' => 'success'
            );
            
            return redirect()->route('deposit.show')->with($notification);
    }
    
//        public function depositpost(Request $request){
//        
//        
//          if(Auth::Check()){
//             
//           
//        }
//        else{
//            
//            $notification = array(
//                'message' => 'Please login First!',
//                'alert-type' => 'error'
//             );
//                
//
//             return redirect()->route('client.user.login')->with($notification); 
//            
//        }
//
//        $request->validate([
//            'type' => 'required',
//            'amount' => 'required'
//        ]);
//        
//       
//        
//        
//        
//        
//
//        $depositcount = Deposit::count();
//        $lastuserid    = Deposit::orderBy('id','DESC')->first();
//        $data = new Deposit();
//        if($depositcount>0){
//            $data->uid = $lastuserid->uid+1;
//        }
//        else{
//            $data->uid   = '100001';
//        }
//        $data->code = Auth::user()->code;
//        $data->type = $request->type;
//        $data->amount = $request->amount;
//        $data->status = 1;
//        $data->save();
//
//        $notification = array(
//            'message' => 'Deposit Successfully!',
//            'alert-type' => 'success'
//            );
//            
//            return redirect()->route('deposit.show')->with($notification);
//    }

    public function withdrawshow()
    {
        if(Auth::Check()){
          $data['withdraw'] = Withdraw::latest()->where('code',Auth::user()->code)->get();
          $data['balances'] = Balance::where('code',Auth::user()->code)->first();
          
          $data['client'] = Client::where('code',Auth::user()->code)->first();
            
          $data['clients'] = ChildIpo::where('master_code',Auth::user()->code)->where('status',2)->get();
        
        
        
        }
        else{
             $data['balances'] = Balance::where('id',0)->first();
             $data['withdraw'] = Withdraw::latest()->where('code',000)->get();
             
             $data['clients'] = ChildIpo::where('master_code',00)->get();
        
        }

      
        return view('frontend.pages.withdrawshow',$data);
    }

    public function withdrawpost(Request $request){
        
        
        if(Auth::Check()){
             
           
        }
        else{
            
            $notification = array(
                'message' => 'Please login First!',
                'alert-type' => 'error'
             );
                

             return redirect()->route('client.user.login')->with($notification);  
        }
        
        
        

        
        $request->validate([
            'code' => 'required',
            'withdraw' => 'required',
            'sign' => 'required',
            ]);

           $previous_balance = Balance::where('code',$request->code)->first();


           $new_balance = $previous_balance->balance - 10;


           if($request->withdraw <= $new_balance){
        


            $lastusercount = Withdraw::count();
            $lastuserid    = Withdraw::orderBy('id','DESC')->first();

            $data = new Withdraw();

            if($lastusercount>0){
                $data->uid   = $lastuserid->uid+1;
            }
            else{
                $data->uid   = '1001';
            }

            $data->withdraw = $request->withdraw;
            $image = $request->sign;
            if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/images/withdraw/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data->sign = $imagename;
            }

            $data->code	 = $request->code;
            $data->balance = $previous_balance->balance;
            $data->status = 1;
            $data->save();
            
            
            
            
            
            $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.withdrawal'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });
            
            
            
            

            $notification = array(
                'message' => 'Withdraw Request Successfully!',
                'alert-type' => 'success'
                );
                
                return redirect()->route('withdraw.request.show')->with($notification);

            }else{
                $notification = array(
                    'message' => 'Withdraw balance not available !',
                    'alert-type' => 'error'
                    );
                    
                    return redirect()->route('withdraw.request.show')->with($notification);
            }

    }


      public function ipo()
    {



        $data['ipos'] = IPO::latest()->whereDate('end_date', '>=', date('Y-m-d'))->get();

        return view('frontend.pages.ipo',$data);
    }




    public function applyipo(){


        if(Auth::check()){
            $data['childipo'] = ChildIpo::where('master_code',Auth::user()->code)->where('status',1)->get();
            $data['childipoactive']  = ChildIpo::where('master_code',Auth::user()->code)->where('status',2)->get();
            $data['mastercode']      = Auth::user()->code;
            $data['appliedipoes']    = ApplyIpo::whereIn('status',[1,2,3])->where('user_id',Auth::user()->id)->get();



         }
         
        else{

            $data['childipo']        = [];
            $data['childipoactive']  = [];
            $data['mastercode']      = '';
            $data['appliedipoes']    = [];
        }      
        

         

        $data['ipo'] = IPO::latest()->whereDate('end_date', '>=', date('Y-m-d'))->get();



        return view('frontend.pages.apply-ipo',$data);
    }

    public function childipopost(Request $request){




        $request->validate([
           'client_code' => 'required', 
           'name' => 'required', 
           'boid' => 'required', 
           'mobile' => 'required'
        ]);

 

        if(!Auth::check()){

            $notification = array(
                'message' => 'please Login First!',
                'alert-type' => 'warning'
            );

            return redirect()->route('client.user.login')->with($notification);
        }else{
           

          $countdata = Client::where('code',$request->client_code)->where('boid',$request->boid)->count();



            if($countdata<=0){

                $notification = array(
                    'message' => 'Client Code And BOID Not Match!',
                    'alert-type' => 'warning'
                );
                return redirect()->back()->with($notification);
            }
        }

            
        $checkexisting = ChildIpo::where('client_code',$request->client_code)->where('boid',$request->boid)->count();
        
        if($checkexisting>0)
        {
            $notification = array(
                    'message' => 'Client Code And BOID Existing Our Database!',
                    'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }
        else{


        $data = new ChildIpo();
        $data->client_code      = $request->client_code;
        $data->name             = $request->name;
        $data->boid             = $request->boid;
        $data->mobile           = $request->mobile;
        $data->master_code      = Auth::user()->code;
        $data->user_id      = Auth::user()->id;
        $data->save();
        
         
        
        
        $notification = array(
            'message' => 'Child IPO Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        }
    }




    public function applyipopost(Request $request){

        $input = $request->all();

        if(!Auth::check()){

            $notification = array(
                'message' => 'please Login First!',
                'alert-type' => 'warning'
            );

            return redirect()->route('client.user.login')->with($notification);
        }
        $request->validate([
           'ipo_id' => 'required', 
           'amount' => 'required'
        ]);

        $ipocheck = IPO::where('id',$request->ipo_id)->first(); 


        if($input['codelist']!=null && $input['codelist']!= '')
        {
            foreach ($input['codelist'] as $key => $value) {


              

                if(ApplyIpo::where('client_code',$input['codelist'][$key])->where('instrument_code',$ipocheck->instrument_code)->count()>0){

                }
                 
                else{

 
                    $data = new ApplyIpo();
                    $data->ipo_id      = $request->ipo_id;
                    $data->amount      = $request->amount;
                    $data->user_id     = Auth::user()->id;
                    $data->name        = Auth::user()->name;
                    $data->client_code = $input['codelist'][$key];
                    $data->mobile      = Auth::user()->mobile;
                    $data->instrument_code = $ipocheck->instrument_code;

                    $data->save();


                   
                    $data = array('name'=>" ");
   
                    Mail::send(['text'=>'mail.ipoorder'], $data, function($message) {
                         $message->to('rnisecurities@yahoo.com', ' ')->subject
                            ('Website Notification');
                         $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
                    });
         
 

                }
            }
        }
 
     

        
        $notification = array(
            'message' => 'Apply IPO Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }







	public function  notices()
	{
        $data['notices'] = Notice::latest()->get();
		return view('frontend.pages.notices',$data);
	}


	public function gallery()
	{
        $data['gallery'] = Gallery::latest()->get();
		return view('frontend.pages.gallery',$data);
	}

    public function boopening()
    {
        return view('frontend.pages.boopening');
    }

    public function bomodify()
    {
        return view('frontend.pages.bomodify');
    }


    public function bomodifystore(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'code'          => 'required',
            'name'          => 'required',
//            'boid'          => 'min:16|max:16',
            'mobile'          => 'required',
            'signature'           => 'required',
            'old_data'           => 'required',
            'new_data'      => 'required',
            'reason'        => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $lastbomodifycount = BOModify::count();
            $lastbomodifyid    = BOModify::orderBy('id','DESC')->first();


            $bomodify = new BOModify();

            if($lastbomodifycount>0){
                $bomodify->uid   = $lastbomodifyid->uid+1;
            }
            else{
                $bomodify->uid   = '2021001';
            }

            $bomodify->code     = $request->code;
            $bomodify->boid     = $request->boid;
            $bomodify->mobile     = $request->mobile;
            $bomodify->name     = $request->name;
            $bomodify->reason   = $request->reason;
            $bomodify->old      = $request->old_data;
            $bomodify->new_data = $request->new_data;

            $signature   = $request->signature;

            if($signature){
                $uniqname = uniqid();
                $ext = strtolower($signature->getClientOriginalExtension());
                $filepath = 'public/bomodify/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $signature->move($filepath,$imagename);
                $bomodify->signature  = $imagename;
            }

            $attachment = $request->attachment;

            if($attachment){
                $uniqname = uniqid();
                $ext = strtolower($attachment->getClientOriginalExtension());
                $filepath = 'public/bomodify/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $attachment->move($filepath,$imagename);
                $bomodify->attachment  = $imagename;
            }


            $bomodify->status  = 1;

            $bomodify->save();
            
            
            $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.bomodify'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });
    
            

            $notification = array(
                'message' => 'BO MOdify Request Send Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }
    }





	public function careers()
	{
        $data['jobs'] = Job::latest()->get();
		return view('frontend.pages.careers',$data);
	}

	public function careerstore(Request $request)
	{
		 $validator = Validator::make($request->all(), [
            'name'         => 'required',
            'mobile'      => 'required',
            'email' => 'required',
            'post_type'      => 'required',
            'cv_file'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{



            $career = new Career();

            $career->name     = $request->name;
            $career->mobile   = $request->mobile;
            $career->email    = $request->email;
            $career->post_type= $request->post_type;

            $cv_file = $request->cv_file;

            if($cv_file){
                $uniqname = uniqid();
                $ext = strtolower($cv_file->getClientOriginalExtension());
                $filepath = 'public/cvfile/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $cv_file->move($filepath,$imagename);
                $career->cv_file  = $imagename;
            }


            $career->status  = 1;

            $career->save();

            $notification = array(
                'message' => 'CV Send Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
	}

	public function contact()
	{
		return view('frontend.pages.contact');
	}

	public function contactmessagestore(Request $request)
	{

		 $validator = Validator::make($request->all(), [
            'name'         => 'required',
            'mobile'      => 'required',
            'email' 	 => 'required',
            'subject'      => 'required',
            'message'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

	        $contacts = new Contact();
	        $contacts->name    = $request->name;
	        $contacts->mobile  =  $request->mobile;
	        $contacts->email   =  $request->email;
	        $contacts->subject =  $request->subject;
	        $contacts->message =  $request->message;
	        $contacts->status  =  1;
	        $contacts->save();
	        
	        
	        $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.contact'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });
	        
	        
	        
	        

	        $notification = array(
	            'message' => 'Message Send Successfully!',
	            'alert-type' => 'success'
	        );

	        return redirect()->route('frontend')->with($notification);
	    }
	}




	public function complainmessagestore(Request $request)
	{
		 $validator = Validator::make($request->all(), [
            'name'         => 'required',
            'mobile'      => 'required',
            'message'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

        	$lastcomplaincount = Complain::count();
            $lastcomplainid    = Complain::orderBy('id','DESC')->first();


	        $complain = new Complain();


            if($lastcomplaincount>0){
                $complain->uid   = $lastcomplainid->uid+1;
            }
            else{
                $complain->uid   = '2021001';
            }


	        $complain->complain_or_query    =  $request->complain_or_query;
	        $complain->name    =  $request->name;
	        $complain->mobile  =  $request->mobile;
	        $complain->email   =  $request->email;
	        $complain->code    =  $request->code;
	        $complain->message =  $request->message;
	        $complain->status  =  1;
	        $complain->save();


 
            $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.complain'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });       
            
            
          

	        $notification = array(
	            'message' => 'Complain Send Successfully!',
	            'alert-type' => 'success'
	        );
	        return redirect()->route('frontend')->with($notification);
	    }
	}








    /* ========== dse mobile application ========================= */




    public function des_mobile_application()
    {
        return view('frontend.pages.des_mobile_application');
    }



    public function des_mobile_applicationstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'         => 'required',
            'mobile'      => 'required',
            'email'      => 'required',
            'code'      => 'required',
            'boid'      => 'required',
            'accounttype'      => 'required',
            'clienttype'      => 'required',
            'domicile'      => 'required',
            'applicantsignature'      => 'required',
            'applicantphoto'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        else{

            $lastmobileappcount = MobileApp::count();
            $lastmobileappid    = MobileApp::orderBy('id','DESC')->first();


            $mobileapp = new MobileApp();





            if($lastmobileappcount>0){
                $mobileapp->uid   = $lastmobileappid->uid+1;
            }
            else{
                $mobileapp->uid   = '2021001';
            }


            $mobileapp->code    =  $request->code;
            $mobileapp->boid    =  $request->boid;
            $mobileapp->name    =  $request->name;
            $mobileapp->type    =  $request->accounttype;
            $mobileapp->client_type    =  $request->clienttype;
            $mobileapp->domicile    =  $request->domicile;
            $mobileapp->usetype    =  'Internal';
            $mobileapp->mobile  =  $request->mobile;
            $mobileapp->email   =  $request->email;


            $applicantphoto = $request->file('applicantphoto');
            if($applicantphoto){
                $uniqname = uniqid();
                $ext = strtolower($applicantphoto->getClientOriginalExtension());
                $filepath = 'public/images/mobileapp/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $applicantphoto->move($filepath,$imagename);
                $mobileapp->photo = $imagename;
            }


            $applicantsignature = $request->file('applicantsignature');
            if($applicantsignature){
                $uniqname = uniqid();
                $ext = strtolower($applicantsignature->getClientOriginalExtension());
                $filepath = 'public/images/mobileapp/';
                $imagename = $filepath.$uniqname.'.'.$ext;
                $applicantsignature->move($filepath,$imagename);
                $mobileapp->signature = $imagename;
            }




            $mobileapp->applicationfor1 = $request->applicationfor1;
            $mobileapp->applicationfor2 = $request->applicationfor2;
            $mobileapp->applicationfor3 = $request->applicationfor3;
            $mobileapp->applicationfor4 = $request->applicationfor4;
            $mobileapp->applicationfor5 = $request->applicationfor5;
            $mobileapp->status  =  1;
            $mobileapp->save();
            
            
            
              
            $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.dsemobileapp'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });
	        
	        
	        
	        
            

            $notification = array(
                'message' => 'Mobile App Submit Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }






    public function boopeningstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'sex' => 'required',
            'birthday_date' => 'required',
            'profession' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'division' => 'required',
            'country' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'nid' => 'required',
            'nid_attachment' => 'required',
            'photo' => 'required',
            'sign' => 'required',
            'bank' => 'required',
            'branch' => 'required',
            'account' => 'required',
            'routing' => 'required',
            'bi_cheque' => 'required',
            'n_name' => 'required',
            'relation' => 'required',
            'percentage' => 'required',
            'n_mobile' => 'required',
            'n_nid' => 'required',
            'n_nid_att' => 'required',
            'n_photo' => 'required',
            'n_sign' => 'required',
        ]);

        $lastboopeningappcount = BOOpen::count();
        $lastboopeningappid    = BOOpen::orderBy('id','DESC')->first();

        $uid = '';
        if($lastboopeningappcount>0){
            $uid = $lastboopeningappid->uid+1;
        }
        else{
            $uid = "10001";
        }

        $BoOpen_id = BOOpen::insertGetId($request->except('_token', 'nid_attachment', 'photo', 'sign', 'n_nid_att', 'bi_cheque', 'n_photo', 'n_sign', 'jh_nid_att', 'jh_photo', 'jh_sign') + ['uid' => $uid]);

        if ($request->hasFile('nid_attachment')) {
            $uploaded_photo = $request->file('nid_attachment');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['nid_att' => $new_photo_location]);
        }
        if ($request->hasFile('bi_cheque')) {
            $uploaded_photo = $request->file('bi_cheque');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['bi_cheque' => $new_photo_location]);
        }
        if ($request->hasFile('bi_cheque')) {
            $uploaded_photo = $request->file('bi_cheque');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['bi_cheque' => $new_photo_location]);
        }
        if ($request->hasFile('photo')) {
            $uploaded_photo = $request->file('photo');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['photo' => $new_photo_location]);
        }
        if ($request->hasFile('sign')) {
            $uploaded_photo = $request->file('sign');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['sign' => $new_photo_location]);
        }
        if ($request->hasFile('n_nid_att')) {
            $uploaded_photo = $request->file('n_nid_att');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['n_nid_att' => $new_photo_location]);
        }
        if ($request->hasFile('n_photo')) {
            $uploaded_photo = $request->file('n_photo');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['n_photo' => $new_photo_location]);
        }
        if ($request->hasFile('n_sign')) {
            $uploaded_photo = $request->file('n_sign');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['n_sign' => $new_photo_location]);
        }
        if ($request->hasFile('jh_nid_att')) {
            $uploaded_photo = $request->file('jh_nid_att');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['jh_nid_att' => $new_photo_location]);
        }
        if ($request->hasFile('jh_nid_att')) {
            $uploaded_photo = $request->file('jh_nid_att');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['jh_nid_att' => $new_photo_location]);
        }
        if ($request->hasFile('jh_photo')) {
            $uploaded_photo = $request->file('jh_photo');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['jh_photo' => $new_photo_location]);
        }
        if ($request->hasFile('jh_sign')) {
            $uploaded_photo = $request->file('jh_sign');
            $photo_name = uniqid() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
            $new_photo_location = 'public/images/boopening/' . $photo_name;
            Image::make($uploaded_photo)->save(base_path($new_photo_location));
            BOOpen::find($BoOpen_id)->update(['jh_sign' => $new_photo_location]);
        }
        
        
        
        
          
            $data = array('name'=>" ");
   
            Mail::send(['text'=>'mail.boopen'], $data, function($message) {
                 $message->to('rnisecurities@yahoo.com', ' ')->subject
                    ('Website Notification');
                 $message->from('mail.softechbd@gmail.com','Softech BD Ltd.');
            });
	        
	        
        
        
        
        

        return back()->with('success', 'Boopening  Saved Successfully!');
    }



    public function investorlogin(){
        return view('frontend.pages.investorlogin');
    }
    
    public function blog(){
        return view('frontend.pages.blog');
    }
     public function blogall(){
        $data['blogs'] = Blog::latest()->get();
        return view('frontend.pages.blog',$data);
    }
    
    
    public  function  blogdetails($slug){
        $data['blog'] = Blog::where('slug',$slug)->first();
        $data['blogall'] = Blog::latest()->limit(6)->get();
        $data['categorys'] = BlogCategory::get();
        return view('frontend.pages.blog-details',$data);
    }
    public  function blog_category($slug){

        $findcat=BlogCategory::where('slug',$slug)->first();
        $data['blog_category'] = Blog::where('category_id',$findcat->id)->get();
        $data['category_name'] = BlogCategory::find($findcat->id);
        return view('frontend.pages.blog-category',$data);

    }


    public function noticeview($id){
        $data['notice'] = Notice::find($id);
        return view('frontend.pages.notice-view',$data);
    }
    
    
        public function boCloser(){
        return view('frontend.pages.bo-closer');
    }

    public function boCloserPost(Request $request){
        
        
    // if(Auth::check()){
             $request->validate([
            'boid' => 'required',
            'name' => 'required',
            'mobile' => 'required|max:15',
            'closer_reason' => 'required',
            'signature' => 'required',
            'client_code' => 'required',
        ]);

        $data = new BOCloser();
        $data->client_code  = $request->client_code;
        $data->boid         = $request->boid;
        $data->name         = $request->name;
        $data->mobile       = $request->mobile;
        $data->join_holder  = $request->join_holder;
        $data->closer_reason= $request->closer_reason;
        // $data->uid          = Auth::user()->id;
        
        $image = $request->signature;
        if($image){
        $uniqname = uniqid();
        $ext = strtolower($image->getClientOriginalExtension());
        $filepath = 'public/images/bocloser/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $image->move($filepath,$imagename);
        $data->signature = $imagename;
        }
        
        
        
        $joint_signature = $request->joint_signature;
        
        if($joint_signature){
        $uniqname = uniqid();
        $ext = strtolower($joint_signature->getClientOriginalExtension());
        $filepath = 'public/images/bocloser/';
        $imagename = $filepath.$uniqname.'.'.$ext;
        $joint_signature->move($filepath,$imagename);
        $data->joint_signature = $imagename;
        }
        
        
        
        
        $data->save();
        $notification = array(
            'message' => 'Closer Request Successfully!',
            'alert-type' => 'success'
            );
            
            return redirect()->back()->with($notification);
    // }
    // else{
    //     $notification = array(
    //         'message' => 'Please Login First',
    //         'alert-type' => 'success'
    //         );
            
    //         return redirect()->route('client.user.login')->with($notification);
    // }
       
           
    }











}
