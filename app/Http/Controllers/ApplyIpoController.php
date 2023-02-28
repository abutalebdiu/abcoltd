<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ApplyIpo;
use App\Model\user;
use App\Model\IPO;
use App\Model\Auth;
use App\Exports\ApplyIPOExport;
use Excel;


class ApplyIpoController extends Controller
{
    public function index(Request $request){

        $data['ipos'] = IPO::latest()->get();


        $query = ApplyIpo::query();


        if($request->ipo_id)
        {
            $data['ipo_id'] = $request->ipo_id;
            $query   =  $query->where('ipo_id',$request->ipo_id);
        }  


        if($request->client_code)
        {
            $data['client_code'] = $request->client_code;
            $query   =  $query->where('client_code',$request->client_code);
        } 
 

        $data['appliedipos'] =  $query->where('status',1)->latest()->get();
        return view('backend.apply-ipo.index',$data);
    }
    public function approve(Request $request){

        $data['ipos'] = IPO::latest()->whereDate('end_date', '>=', date('Y-m-d'))->get();


        $query = ApplyIpo::query();


        if($request->ipo_id)
        {
            $data['ipo_id'] = $request->ipo_id;
            $query   =  $query->where('ipo_id',$request->ipo_id);
        }  


        if($request->client_code)
        {
            $data['client_code'] = $request->client_code;
            $query   =  $query->where('client_code',$request->client_code);
        } 
 

        $data['appliedipos'] =  $query->where('status',2)->latest()->get();
        return view('backend.apply-ipo.approve',$data);
    }
    public function reject(Request $request){
        $data['ipos'] = IPO::latest()->whereDate('end_date', '>=', date('Y-m-d'))->get();



       $query = ApplyIpo::query();


        if($request->ipo_id)
        {
            $data['ipo_id'] = $request->ipo_id;
            $query   =  $query->where('ipo_id',$request->ipo_id);
        }  


        if($request->client_code)
        {
            $data['client_code'] = $request->client_code;
            $query   =  $query->where('client_code',$request->client_code);
        } 
 

        $data['appliedipos'] =  $query->where('status',3)->latest()->get();
        return view('backend.apply-ipo.reject',$data);
    }






    

    public function applyipoexport(Request $request)
     {
       

         $query = ApplyIpo::query();     

        if($request->ipo_id)
        {
            $data['ipo_id'] = $request->ipo_id;
            $query   =  $query->where('ipo_id',$request->ipo_id);
        }  


        if($request->client_code)
        {
            $data['client_code'] = $request->client_code;
            $query   =  $query->where('client_code',$request->client_code);
        } 

         if($request->status)
        {
            $data['status'] = $request->status;
            $query   =  $query->where('status',$request->status);
        } 

         



        if($request->has('excel')){
 
 
            $appliedipos =  $query->latest()->get();
 
            return  Excel::download(new ApplyIPOExport($appliedipos), 'Apply_IPO_report.xlsx');
        }else if($request->has('pdf')){
            

            $appliedipos =  $query->latest()->get();
 
            
            return  Excel::download(new ApplyIPOExport($appliedipos), 'Apply_IPO_report.pdf');
        } 

    }














    public function changeupdate(Request $request, $id){

    $data = ApplyIpo::find($id);
    $data->status =$request->status;
    $data->save();
    $notification = array(
        'message' => 'Apply Ipo Change Status Successfully!',
        'alert-type' => 'success'
        );
        
        return redirect()->route('admin.apply-ipo.index')->with($notification);
    }



    public function submitaction(Request $request)
    {
 


        $input = $request->all();

        if($request->has('approved')){


            foreach ($input['ipoid'] as $key => $value) {
                
               $data = ApplyIpo::find($input['ipoid'][$key]);
               $data->status = 2;
               $data->save();

            }

        }
        elseif($request->has('rejected'))
        {
             foreach ($input['ipoid'] as $key => $value) {
                
               $data = ApplyIpo::find($input['ipoid'][$key]);
               $data->status = 3;
               $data->save();

            }
        }

        $notification = array(
        'message' => 'Apply Ipo Change Status Successfully!',
        'alert-type' => 'success'
        );
        
        return redirect()->route('admin.apply-ipo.index')->with($notification);


    }

















}

