<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Trading;


class TradingTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['trading'] = Trading::latest()->get();
        return view('backend.trading-time.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trading-time.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Trading();
        $data->pre_opening = $request->pre_opening;
        $data->cotinuous = $request->cotinuous;
        $data->post_closing = $request->post_closing;
        $data->save();
        $notification = array(
            'message' => 'Trading Time Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('trading.time.index')->with($notification);
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
        $data['trading'] = Trading::find($id);
        return view('backend.trading-time.edit',$data);
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
        $data = Trading::find($id);
        $data->pre_opening = $request->pre_opening;
        $data->cotinuous = $request->cotinuous;
        $data->post_closing = $request->post_closing;
        $data->save();
        $notification = array(
            'message' => 'Trading Time Update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('trading.time.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trading::find($id)->delete();

        $notification = array(
        'message' => 'Trading Time Delete Successfully!',
        'alert-type' => 'success'
        );
        
        return redirect()->route('trading.time.index')->with($notification);
    }
}
