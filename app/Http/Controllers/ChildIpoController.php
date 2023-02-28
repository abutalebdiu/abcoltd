<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ChildIpo;

class ChildIpoController extends Controller
{
    public function index(){
        $data['ipo'] = ChildIpo::where('status',1)->latest()->get();
        return view('backend.child-ipo.index',$data);
    }
    
    public function approve(){
        $data['ipo'] = ChildIpo::where('status',2)->latest()->get();
        return view('backend.child-ipo.approve',$data);
    }
    public function reject(){
        $data['ipo'] = ChildIpo::where('status',0)->latest()->get();
        return view('backend.child-ipo.reject',$data);
    }



    public function changeupdate(Request $request, $id){

        $data = ChildIpo::find($id);
        $data->status =$request->status;
        $data->save();
        $notification = array(
            'message' => 'Child Ipo Change Status Successfully!',
            'alert-type' => 'success'
            );
            
            return redirect()->route('admin.child-ipo.index')->with($notification);
    }
}
