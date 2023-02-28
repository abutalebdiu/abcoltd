<?php

namespace App\Http\Controllers;

use App\Model\Balance;
use Illuminate\Http\Request;
use App\Imports\BalanceImport;
use Excel;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       

        $query = Balance::query();


        if($request->code)
        {
            $query = $query->where('code',$request->code);
        }

        $data['balances'] =  $query->paginate(100);
        return view('backend.balances.view',$data);
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
     * @param  \App\Model\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function show(Balance $balance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function edit(Balance $balance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balance $balance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Balance  $balance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balance $balance)
    {
        //
    }

    public function balanceimport(Request $request)
    {



        $path = $request->file('balance_file');

        if($path)
        {   
            Balance::truncate();

            $clientdata = Excel::toArray(new BalanceImport(),$path)[0];

        }
        $length = count($clientdata);

        foreach (array_chunk($clientdata, 10000000) as $clients)
        {
            for($i = 10; $i < $length; $i++){

                $balance = New Balance();
                $balance->code = $clients[$i][0];
                $balance->balance = $clients[$i][2];
                $balance->save();

            }
        }


         $notification = array(
                'message' => 'Balance upload successfully!',
                'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);

 
 
    }






}
