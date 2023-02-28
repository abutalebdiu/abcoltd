<?php

namespace App\Http\Controllers;

use App\Model\Deposit;
use Illuminate\Http\Request;
use PDF;

class DepositController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['deposits'] = Deposit::latest()->get();
        return view('backend.accounts.deposit.index',$data);
    }

    public function request(Request $request){
        
        
        
        $query = Deposit::query();
        
        
        if($request->start_date && $request->end_date){
            
            $date_from  = date('Y-m-d', strtotime($request->start_date));
            $date_to    = date('Y-m-d', strtotime($request->end_date));

            $data['start_date'] = $date_from;
            $data['end_date']   = $date_to;

            $query              = $query->whereBetween('created_at',[$date_from."00:00:00",$date_to." 23:59:59"]);
                
        }
        
        
        if($request->has('submit'))
        {
             $data['deposits'] = $query->where('status',1)->latest()->get();
             return view('backend.accounts.deposit.request',$data);
        
        }
        elseif($request->has('pdf'))
        {
             $data['deposits'] = $query->where('status',1)->latest()->get();
             $pdf = PDF::loadView('backend.accounts.deposit.deposit_export', $data);
             return $pdf->download('deposit_request.pdf');
        }
        
        else{
             $data['deposits'] = $query->where('status',1)->latest()->get();
             return view('backend.accounts.deposit.request',$data);
        
        }
         
        
    }
    public function approve(Request $request){
        
        
        $query = Deposit::query();
        
        
        if($request->start_date && $request->end_date){
            
            $date_from  = date('Y-m-d', strtotime($request->start_date));
            $date_to    = date('Y-m-d', strtotime($request->end_date));

            $data['start_date'] = $date_from;
            $data['end_date']   = $date_to;

            $query              = $query->whereBetween('created_at',[$date_from."00:00:00",$date_to." 23:59:59"]);
                
        }
        
        
        if($request->has('submit'))
        {
             $data['deposits'] = $query->where('status',2)->latest()->get();
             return view('backend.accounts.deposit.approve',$data);
        
        }
        elseif($request->has('pdf'))
        {
             $data['deposits'] = $query->where('status',2)->latest()->get();
             $pdf = PDF::loadView('backend.accounts.deposit.deposit_export', $data);
             return $pdf->download('deposit_request.pdf');
        }
        
        else{
             $data['deposits'] = $query->where('status',2)->latest()->get();
             return view('backend.accounts.deposit.approve',$data);
        
        }
        
         
        
         
    }
    public function reject(Request $request){
        
        
        $query = Deposit::query();
        
        
        if($request->start_date && $request->end_date){
            
            $date_from  = date('Y-m-d', strtotime($request->start_date));
            $date_to    = date('Y-m-d', strtotime($request->end_date));

            $data['start_date'] = $date_from;
            $data['end_date']   = $date_to;

            $query              = $query->whereBetween('created_at',[$date_from."00:00:00",$date_to." 23:59:59"]);
                
        }
        
        
        if($request->has('submit'))
        {
             $data['deposits'] = $query->where('status',3)->latest()->get();
             return view('backend.accounts.deposit.reject',$data);
        
        }
        elseif($request->has('pdf'))
        {
             $data['deposits'] = $query->where('status',3)->latest()->get();
             $pdf = PDF::loadView('backend.accounts.deposit.deposit_export', $data);
             return $pdf->download('deposit_request.pdf');
        }
        
        else{
             $data['deposits'] = $query->where('status',3)->latest()->get();
             return view('backend.accounts.deposit.reject',$data);
        
        }
        
         
    }
    public function show($id){
        $data['deposit'] = Deposit::find($id);
        return view('backend.accounts.deposit.show',$data);
    }



    public function changestatus(Request $request,$id)
    {

        $deposit         = Deposit::find($id);
        $deposit->status = $request->status;
        $deposit->save();


        $notification = array(
                'message' => 'Deposit Status Change Successfully!',
                'alert-type' => 'success'
        );

        return redirect()->route('deposit.request')->with($notification);




    }

















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Model\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposit $deposit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposit $deposit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Deposit  $deposit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposit $deposit,$id)
    {
        $deposit = Deposit::find($id)->delete();

        $notification = array(
                'message' => 'Deposit Delete Successfully Completed!',
                'alert-type' => 'success'
        );

        return redirect()->route('deposit.index')->with($notification);

    }
}
