<?php

namespace App\Http\Controllers\Backend\Blogs;

use App\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{

    public function index()
    {
        $data['categorys'] = BlogCategory::get();
        return view('backend.blogs.categorys.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.categorys.create');
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
            'name' => 'required'
        ]);

        $data = new BlogCategory();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Blog Category Create Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.category.index')->with($notification);
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
        $data['blog_cat'] = BlogCategory::find($id);
        return view('backend.blogs.categorys.edit',$data);
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
            'name' => 'required'
        ]);

        $data = BlogCategory::find($id);
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Blog Category Update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.category.index')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogCategory::find($id)->delete();
        $notification = array(
            'message' => 'Blog Category Delete Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.category.index')->with($notification);
    }
}
