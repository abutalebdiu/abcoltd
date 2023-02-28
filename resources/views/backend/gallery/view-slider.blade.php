@extends('backend.layouts.app')
@section('title','Gallery List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Gallery List</h4>
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

                    <a href="{{ route('gallery.create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Add Gallery</a>
                    <br>
                    <br>
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                     
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><img width="70" src="{{asset($row->image)}}" alt="image"></td>
                                    <td>{{ $row->title }}</td>
                                    
                                    <td>
                                        <a href="{{route('gallery.edit',$row->id)}}" class="btn btn-info btn-mini"><i class="fa fa-check"></i> Edit</a>

                                        <a id="delete" href="{{route('gallery.destroy',$row->id)}}" class="btn btn-danger btn-mini"><i class="fa fa-check"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        


@section('customjs')


@endsection
@endsection