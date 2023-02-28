<?php

namespace App\Http\Controllers;

use App\Model\Client;
use Illuminate\Http\Request;
use App\Imports\ClientImport;
use App\Model\BOCloser;

use Excel;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['totalclients'] = Client::count();

        $query = Client::query();


        if($request->code)
        {
            $query = $query->where('code',$request->code);
        }

        $data['clients'] =  $query->paginate(100);
        return view('backend.clients.view',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientreport(Request $request)
    {
        $query = Client::query();


        if($request->code)
        {
            $query = $query->where('code',$request->code);
        }

        $data['clients'] =  $query->paginate(100);
        
        return view('backend.clients.reports',$data);
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
     * @param  \App\Model\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }





    public function balanceimport(Request $request)
    {



        $path = $request->file('balance_file');

        if($path)
        {   
            Client::truncate();

            $clientdata = Excel::toArray(new ClientImport(), $path)[0];

        }
        $length = count($clientdata);

        foreach (array_chunk($clientdata, 10000000) as $clients)
        {
            for($i = 9; $i < $length; $i++){

                $client = New Client();
                $client->code = $clients[$i][1];
                $client->name = $clients[$i][2];
                $client->boid = $clients[$i][3];
                $client->save();

            }
        }


         $notification = array(
                'message' => 'Client Balance upload successfully!',
                'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);









        
        /*$result =   Excel::import(new ClientImport(),request()->file('balance_file'));
        
        if($result)
        {
            $notification = array(
            'message' => 'Client Balance upload successfully !!',
            'alert-type' => 'success',
            );
        
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
            'message' => 'Balance file upload error !!',
            'alert-type' => 'error',
            );
        
            return redirect()->back()->with($notification);
        }*/
    }
    
    
    public function adminBoCloser(){
        $data['bocoser'] = BOCloser::get();
        
        return view('backend.clients.bo-closer',$data);
    }
    
    public function boRequestDonload($id){
        $data['bocoser'] = BOCloser::find($id);
        return view('backend.clients.bo-closer-download',$data);
    }

 
}
