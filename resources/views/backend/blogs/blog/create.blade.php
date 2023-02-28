@extends('backend.layouts.app')
@section('title','Add New Blog')
@section('content')

    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Create Blog</h4>
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

                                            <div class="text-right"><a href="{{route('admin.blog.index')}}" class="btn btn-info btn-sm"> Blog</a></div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mt-1">
                                                        <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="py-2">
                                                                            <label for="name">Title <span class="text-danger">*</span></label>
                                                                            <input type="text" id="name" name="title" class="form-control" value="{{ old('title') }}" id="" placeholder=" Blog Title">
                                                                            <div class="text-danger">{{ $errors->first('title') }}</div>
                                                                        </div>

                                                                        <div class="py-2">
                                                                            <label for="slug">Slug <span class="text-danger">*</span></label>
                                                                            <input type="text" name="slug" value="{{old('slug')}}" class="form-control">
                                                                            <div class="text-danger">{{ $errors->first('slug') }}</div>
                                                                        </div>

                                                                        <div class="py-2">
                                                                            <label for="slug">Catgory <span class="text-danger">*</span></label>
                                                                            <select name="category_id" id="" class="form-control">
                                                                                <option value="" selected>Select Category</option>
                                                                                @foreach($cat as $cat)
                                                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                                                        </div>
                                                                        <div class="py-2">
                                                                            <label for="image">image <span class="text-danger">*</span></label>
                                                                            <input type="file" name="image" id="image" value="{{old('image')}}">
                                                                            <div class="text-danger">{{ $errors->first('image') }}</div>
                                                                        </div>

                                                                        <div class="py-2">
                                                                            <label for="">Description <span class="text-danger">*</span></label>
                                                                            <textarea name="description" class="summernote" class="form-control" placeholder="description">{{old('description')}}</textarea>
                                                                            <div class="text-danger">{{ $errors->first('description') }}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="mt-6 col-12">
                                                                    <button type="submit" class="btn btn-primary w-md"><i class="fa fa-check"></i> create</button>
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
                    <!-- End Page-content -->

            </div>
        </div>



@endsection
