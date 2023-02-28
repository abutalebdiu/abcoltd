<?php

namespace App\Http\Controllers;

use App\Model\IPO;
use Illuminate\Http\Request;
use Auth;
use Validator;

class IPOController extends Controller
{
    public function index()
    {
        $ipos = IPO::latest()->get();
        return view('backend.ipos.index',compact('ipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ipo' => 'required',
            'instrument_code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'attachment' => 'required'
        ]);

        $ipo = new IPO();

        $lastipocount = IPO::count();
        $lastipoid    = IPO::orderBy('id','DESC')->first();
        

        if($lastipocount>0){
            $ipo->uid   = $lastipoid->uid+1;
        }
        else{
            $ipo->uid   = '2021001';
        }

        $ipo->ipo           = $request->ipo;
        $ipo->instrument_code = $request->instrument_code;
        $ipo->start_date    = $request->start_date;
        $ipo->end_date      = $request->end_date;

        $attachment = $request->attachment;
        if($attachment){
            $uniqname = uniqid();
            $ext = strtolower($attachment->getClientOriginalExtension());
            $filepath = 'public/ipo/';
            $filename = $filepath.$uniqname.'.'.$ext;
            $attachment->move($filepath,$filename);
            $ipo->attachment = $filename;
        }


        $attachment = $request->result;

        if($attachment){
            $uniqname = uniqid();
            $ext = strtolower($attachment->getClientOriginalExtension());
            $filepath = 'public/ipo/';
            $filename = $filepath.$uniqname.'.'.$ext;
            $attachment->move($filepath,$filename);
            $ipo->result = $filename;
        }

        $ipo->balance_check = $request->balance_check;
         
        $ipo->save();

        $notification = array(
            'message' => 'IPO Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('ipo.index')->with($notification);
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
        $data['ipo'] = IPO::find($id);
        return view('backend.ipos.edit',$data);
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
        $request->validate([
            'ipo' => 'required',
            'instrument_code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $ipo = IPO::find($id);

        $ipo->ipo           = $request->ipo;
        $ipo->start_date    = $request->start_date;
        $ipo->end_date      = $request->end_date;

        $attachment = $request->attachment;
        if($attachment){
            @unlink($ipo->attachment);
            $uniqname = uniqid();
            $ext = strtolower($attachment->getClientOriginalExtension());
            $filepath = 'public/ipo/';
            $filename = $filepath.$uniqname.'.'.$ext;
            $attachment->move($filepath,$filename);
            $ipo->attachment = $filename;
        }

        $attachment = $request->result;
        if($attachment){
            @unlink($ipo->result);
            $uniqname = uniqid();
            $ext = strtolower($attachment->getClientOriginalExtension());
            $filepath = 'public/ipo/';
            $filename = $filepath.$uniqname.'.'.$ext;
            $attachment->move($filepath,$filename);
            $ipo->result = $filename;
        }

        $ipo->balance_check = $request->balance_check;
         
        $ipo->save();

        $notification = array(
            'message' => 'IPO update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('ipo.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         IPO::find($id)->delete();

        $notification = array(
            'message' => 'IPO Delete Successfully!',
            'alert-type' => 'danger'
        );

        return redirect()->route('ipo.index')->with($notification);
    }

}
