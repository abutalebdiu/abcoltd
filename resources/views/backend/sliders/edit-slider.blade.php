@extends('backend.layouts.app')
@section('title','Edit slider')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Edit slider</h4>
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
                    <div class="row">
                        <div class="col-sm-8">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{route('slider.update',$editdata->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" name="title" placeholder="Title" class="form-control" value="{{$editdata->title}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img width="80" class="mt-2" src="{{asset($editdata->image)}}" alt="image">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
