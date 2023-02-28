<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Gallery::all();
        return view('backend.gallery.view-slider',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.gallery.add-slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
         ]);

            $data =  new Gallery;
            $data->title = $request->title;


            $image = $request->file('image');
            if($image){
                 $uniqname = uniqid();
                 $ext = strtolower($image->getClientOriginalExtension());
                 $filepath = 'public/images/gallery/';
                 $imagename = $filepath.$uniqname.'.'.$ext;
                 /*@unlink($data->photo);*/
                $image->move($filepath,$imagename);
                $data->image = $imagename;
            }

            $data->save();

             $notification = array(
                    'message' => 'Gallery Photo Added Successfully!',
                    'alert-type' => 'success'
             );

            return redirect()->route('gallery.index')->with($notification);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data['data'] = Gallery::all();
        return view('frontend.pages.gallery',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editdata'] = Gallery::find($id);
        return view('backend.gallery.edit-slider',$data);
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
        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
         ]);

            $data = Gallery::find($id);
            $data->title = $request->title;
            $image = $request->file('image');
            if($image){
                 $uniqname = uniqid();
                 $ext = strtolower($image->getClientOriginalExtension());
                 $filepath = 'public/images/gallery/';
                 $imagename = $filepath.$uniqname.'.'.$ext;
                 @unlink($data->photo);
                 $image->move($filepath,$imagename);
                 $data->image = $imagename;
           }

            $data->save();

             $notification = array(
                    'message' => 'Gallery Photo Updated Successfully!',
                    'alert-type' => 'success'
             );

            return redirect()->route('gallery.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gallery::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Gallery Deleted Successfully!',
            'alert-type' => 'success'
         );

        return redirect()->back()->with($notification);

    }
}
