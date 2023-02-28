<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\Blog;
use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::get();
        return  view('backend.blogs.blog.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cat'] =  BlogCategory::get();
        return  view('backend.blogs.blog.create',$data);
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
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $data = new Blog();
        $data->title = $request->title;
        $data->slug = Str::slug($request->title,'-');
        $data->category_id = $request->category_id;

        $image = $request->image;
        if($image){
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/images/blogs/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data->image = $imagename;
        }
        $data->description = $request->description;
        $data->authar_id = Auth::user()->id;
        $data->save();

        $notification = array(
            'message' => 'Blog Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.blog.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['blog'] = Blog::find($id);
        return view('backend.blogs.blog.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['blog'] = Blog::find($id);
        $data['categories'] = BlogCategory::get();
        return view('backend.blogs.blog.edit',$data);
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
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        $data = Blog::find($id);
        $data->title = $request->title;
        $data->slug = Str::slug($request->title,'-');
        $data->category_id = $request->category_id;

        $image = $request->image;
        if($image){
            @unlink($data->image);
            $uniqname = uniqid();
            $ext = strtolower($image->getClientOriginalExtension());
            $filepath = 'public/images/blogs/';
            $imagename = $filepath.$uniqname.'.'.$ext;
            $image->move($filepath,$imagename);
            $data->image = $imagename;
        }
        $data->description = $request->description;
        $data->authar_id = Auth::user()->id;
        $data->save();

        $notification = array(
            'message' => 'Blog Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.blog.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();

        $notification = array(
            'message' => 'Blog Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.blog.index')->with($notification);
    }
}
