<?php

namespace App\Http\Controllers\Backend\Customnumber;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CustomNumber;
use App\Imports\CustomSMSImport;
use Excel;

class CustomNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            
            'name' => 'required',
            'number' => 'required'
        ]);

        $data = new CustomNumber();
        $data->name = $request->name;
        $data->number = $request->number;   
        $data->save();
        $notification = array(
            'message' => 'Sms Create Successfully!',
            'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }




    public function numberimport(Request $request)
    {

        $path = $request->file('number_file');



        if($path)
        {   
            $clientdata = Excel::toArray(new CustomSMSImport(), $path)[0];

        }
        $length = count($clientdata);

        foreach (array_chunk($clientdata, 10000000) as $clients)
        {
            for($i = 1; $i < $length; $i++){

                $number = New CustomNumber();
                $number->name = $clients[$i][0];
                $number->number = $clients[$i][1];
                $number->save();

            }
        }


         $notification = array(
                'message' => 'Number upload successfully!',
                'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);

 
 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomNumber::find($id)->delete();

        $notification = array(
        'message' => 'Number Delete Successfully!',
        'alert-type' => 'warning'
        );
        
        return redirect()->back()->with($notification);
    }
}
