@extends('backend.layouts.app')
@section('title','Edit Job')
@section('content')



<div id="content" class="content">
    <div class="row">
        <div class="col-xl-6">
            <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
                <div class="panel-heading">
                    <h4 class="panel-title">Edit Job</h4>
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
                    <form action="{{ route('job.update',$job->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          
                        <div class="form-group">
                            <label for="url">Job Title</label>
                            <input type="text" name="title" value="{{ $job->title }}" class="form-control" placeholder="Enter job title" />
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                        </div>
                           
                        <div class="form-group">
                            <label for="details">Position</label>
                            <input type="text" name="position" value="{{ $job->position }}" class="form-control" placeholder="Enter Job Position" />
                            <div class="text-danger">{{ $errors->first('position') }}</div>
                        </div>
                           
                        <div class="form-group">
                            <label for="name">Qualification</label>
                            <input type="text" name="qualification" value="{{ $job->qualification }}" class="form-control" placeholder="Enter job Qualification" />
                            <div class="text-danger">{{ $errors->first('qualification') }}</div>
                        </div>
                           
                        <div class="form-group">
                            <label for="">Experice</label>
                            <input type="text" name="experice" value="{{ $job->experice }}" class="form-control" placeholder="Enter experice" />
                            <div class="text-danger">{{ $errors->first('experice') }}</div>
                        </div>  

                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="location" value="{{ $job->location }}" class="form-control" placeholder="Enter location" />
                            <div class="text-danger">{{ $errors->first('location') }}</div>
                        </div>


                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" name="salary" value="{{ $job->salary }}" class="form-control" placeholder="Enter salary" />
                            <div class="text-danger">{{ $errors->first('salary') }}</div>
                        </div>


                        <div class="form-group">
                            <label for="">Dead Line</label>
                            <input type="date" name="dead_line" value="{{ $job->dead_line }}" class="form-control" placeholder="Enter dead_line" />
                            <div class="text-danger">{{ $errors->first('dead_line') }}</div>
                        </div>


                        <div class="form-group">
                            <label for="">Vacancy</label>
                            <input type="text" name="vacancy" value="{{ $job->vacancy }}" class="form-control" placeholder="Enter Vacancy" />
                            <div class="text-danger">{{ $errors->first('vacancy') }}</div>
                        </div>


                        <div class="form-group">
                            <label for="">Link</label>
                            <input type="text" name="link" value="{{ $job->link }}" class="form-control" placeholder="Enter link" />
                            <div class="text-danger">{{ $errors->first('link') }}</div>
                        </div>

                        

                         
                        <div class="form-group">
                            <label for="">Status </label>
                            <select name="status" class="form-control">
                                <option value="" > select status</option>
                                <option {{ $job->status == 1 ? 'selected' : 'selected'  }} value="1"> Active</option>
                                <option {{ $job->status == 2 ? 'selected' : ''  }} value="0"> Inactive</option>
                            </select>
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                        <a class="btn btn-sm btn-default" href="{{ route('job.index') }}">Back</a>

                    </form>
                </div>

            </div>
        </div>

    </div>
</div>


@section('customjs')


@endsection
@endsection
