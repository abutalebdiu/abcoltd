<?php

namespace App\Http\Controllers;

use App\Model\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $data['withdraws'] = Withdraw::latest()->get();
        return view('backend.accounts.withdraw',$data);
    }


    public function withdrawrequest()
    {
        $data['withdraws'] = Withdraw::latest()->where('status',1)->get();
        return view('backend.accounts.withdrawrequest',$data);
    }
    public function accept()
    {
        $data['withdraws'] = Withdraw::latest()->where('status',2)->get();
        return view('backend.accounts.withdraw_accept',$data);
    }
    public function complect()
    {
        $data['withdraws'] = Withdraw::latest()->where('status',3)->get();
        return view('backend.accounts.withdraw_complect',$data);
    }
    public function reject()
    {
        $data['withdraws'] = Withdraw::latest()->where('status',0)->get();
        return view('backend.accounts.withdraw_reject',$data);
    }
    public function show($id)
    {
        $data['withdraw'] = Withdraw::find($id);
        return view('backend.accounts.show',$data);
    }   
    
    
    public function preview($id)
    {
        $data['withdraw'] = Withdraw::find($id);
        return view('backend.accounts.preview',$data);
    }


    public function changestatus(Request $request,$id)
    {
        
        $withdraw         = Withdraw::find($id);
        $withdraw->status = $request->status;
        $withdraw->save();


        $notification = array(
                'message' => 'Withdraw Status Change Successfully!',
                'alert-type' => 'success'
        );

        return redirect()->route('withdraw.index')->with($notification);




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
     * @param  \App\Model\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function edit(Withdraw $withdraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Withdraw $withdraw)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Withdraw  $withdraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Withdraw $withdraw,$id)
    {
        $withdraw = Withdraw::find($id)->delete();

        $notification = array(
                'message' => 'withdraw Delete Successfully Completed!',
                'alert-type' => 'success'
        );

        return redirect()->route('withdraw.index')->with($notification);

    }
    
    
}
