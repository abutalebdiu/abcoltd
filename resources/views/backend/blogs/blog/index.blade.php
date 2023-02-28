@extends('backend.layouts.app')
@section('title','Blog List')
@section('content')

    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Blog List</h4>
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
                                            <div class="text-right"><a href="{{route('admin.blog.create')}}" class="btn btn-info btn-sm"> <i class="fa fa-plus"></i> Create</a></div>
                                            <hr>
                                            <div class="table-responsive">
                                                <table id="" class="table dt-responsive nowrap w-100">
                                                    <thead>
                                                    <tr>
                                                        <th>#serial</th>
                                                        <th>title</th>
                                                        <th>image</th>
                                                        <th>Category</th>
                                                        <th>Created At</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>


                                                    <tbody>
                                                    @foreach($blogs as $data)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $data->title }}</td>
                                                            <td><img src="{{ asset($data->image) }}" alt="" width="100"></td>
                                                            <td>{{ $data->blogCat->name }}</td>
                                                            <td>{{ $data->created_at->format('Y.m.d H:i A') }}</td>

                                                            <td>
                                                                <a href="{{ route('admin.blog.edit',$data->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                                                <a href="{{ route('admin.blog.show',$data->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
                                                                <a href="{{ route('admin.blog.destroy',$data->id) }}"  class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

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
