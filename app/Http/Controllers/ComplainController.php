<?php

namespace App\Http\Controllers;

use App\Model\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['complains'] = Complain::latest()->get();
        return view('backend.complain.view',$data);
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
     * @param  \App\Model\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain,$id)
    {
        $data['complain'] = Complain::find($id);
         return view('backend.complain.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain,$id)
    {
        
        $complain =  Complain::find($id)->delete();

        $notification = array(
            'message' => 'Complain Delete Successfully!',
            'alert-type' => 'danger'
        );

        return redirect()->route('complain.index')->with($notification);
    }
}






