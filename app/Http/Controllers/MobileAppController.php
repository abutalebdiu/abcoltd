<?php

namespace App\Http\Controllers;

use App\Model\MobileApp;
use Illuminate\Http\Request;
use PDF;

class MobileAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['mobileappes'] = MobileApp::latest()->get();
         return view('backend.mobileapps.view',$data);
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
     * @param  \App\Model\MobileApp  $mobileApp
     * @return \Illuminate\Http\Response
     */
    public function show(MobileApp $mobileApp,$id)
    {
        $data['mobileapp'] = MobileApp::find($id);
         return view('backend.mobileapps.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\MobileApp  $mobileApp
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileApp $mobileApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\MobileApp  $mobileApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileApp $mobileApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\MobileApp  $mobileApp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MobileApp::find($id)->delete();

        $notification = array(
            'message' => 'Mobile App Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('mobile.app.index')->with($notification);
    }



    public function downloadpdf($id)
    {
        $data['mobileapp'] = MobileApp::find($id);

        /*$pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('backend.mobileapps.mobileapppdf', $data);
        return $pdf->stream('mobileapp.pdf');*/

        return view('backend.mobileapps.mobileapppdf',$data);
    }









}
