<?php

namespace App\Http\Controllers;

use App\Model\BOOpen;
use Illuminate\Http\Request;

class BOOpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['booopen'] = BOOpen::get();
        return view('backend.boo.index',$data);

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\BOOpen  $bOOpen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['data'] = BOOpen::find($id);
        return  view('backend.boo.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\BOOpen  $bOOpen
     * @return \Illuminate\Http\Response
     */
    public function edit(BOOpen $bOOpen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\BOOpen  $bOOpen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BOOpen $bOOpen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\BOOpen  $bOOpen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BOOpen::find($id)->delete();
        $notification = array(
            'message' => 'Boo Open Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('booopenlist.index')->with($notification);
    }
    
    
    
    public function boopenddownload($id)
    {
        $data['boopen']  = BOOpen::find($id);
        return view('backend.boo.printfile',$data);
    }


    
    public function changestatus(Request $request,$id)
    {

        $boopen         = BOOpen::find($id);
        $boopen->status = $request->status;
        $boopen->save();


        $notification = array(
                'message' => 'BO Open Status Change Successfully!',
                'alert-type' => 'success'
        );

        return redirect()->route('booopenlist.index')->with($notification);




    }
    
    
    
    
    
}
