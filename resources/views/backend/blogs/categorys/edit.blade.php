@extends('backend.layouts.app')
@section('title','Edit Blog Category')
@section('content')

    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Blog Catagory</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                        <i class="fa fa-expand"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload">
                        <i class="fa fa-redo"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse">
                        <i class="fa fa-minus"></i>
                    </a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove">
                        <i class="fa fa-times"></i>
                    </a>

                </div>
            </div>
            <div class="panel-body">

                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="text-right"><a href="{{route('blog.category.index')}}" class="btn btn-info btn-sm"> Category</a></div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mt-1">
                                                        <form action="{{ route('blog.category.update',$blog_cat->id) }}" method="post">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="name">Name <span class="text-danger">*</span></label>
                                                                        <input type="text" id="name" name="name" class="form-control" value="{{ $blog_cat->name }}" id="" placeholder=" Blog Category name">
                                                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                                                    </div>
                                                                </div>


                                                                <div class="mt-4">
                                                                    <button type="submit" class="btn btn-primary w-md"><i class="fa fa-check"></i> Update</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div> <!-- container-fluid -->
                    </div>

            </div>
        </div>
    </div>



@endsection
