@extends('backend.layouts.app')
@section('title','Show Blog')
@section('content')

    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Show Blog</h4>
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
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-right"><a href="{{route('admin.blog.index')}}" class="btn btn-info btn-sm"> Blog</a></div>
                                            <hr>
                                            <div class="table-responsive">
                                                <table id="" class="table dt-responsive nowrap w-100">
                                                    <thead>

                                                    <tr>
                                                        <th>title</th>
                                                        <th>{{ $blog->title }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>image</th>
                                                        <th><img src="{{ asset($blog->image) }}" alt="" width="100"></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>{{ $blog->blogCat->name }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Created At</th>
                                                        <th>{{ $blog->created_at->format('Y.m.d H:i A') }}</th>

                                                    </tr>

                                                    <tr>
                                                        <th>Discription</th>
                                                        <th> {!!  $blog->description  !!} </th>

                                                    </tr>
                                                    </thead>


                                                    <tbody>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end card-body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->




                        </div> <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->

            </div>
        </div>



@endsection
