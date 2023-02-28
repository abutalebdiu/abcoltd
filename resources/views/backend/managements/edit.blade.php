@extends('backend.layouts.app')
@section('title','Edit Managment Team')
@section('content')



 			<div id="content" class="content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-10">
                        <div class="panel-heading">
                            <h4 class="panel-title">Edit Managment Team</h4>
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
                            <form action="{{ route('website.management.update') }}" method="POST" enctype="multipart/form-data">
                            	@csrf
                            	
                            	
                                   <div class="form-group">
                                        <label for="">Chairman Name</label>
                                        <input type="text"  name="ch_name" value="{{ $team->ch_name }}" class="form-control" placeholder="Enter chairman Name" /> 
                                        <div class="text-danger">{{ $errors->first('ch_name') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Chairman Designation</label>
                                        <input type="text"  name="ch_designation" value="{{$team->ch_designation }}" class="form-control" placeholder="Enter Chairman Designation" /> 
                                        <div class="text-danger">{{ $errors->first('ch_designation') }}</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Chairman Image</label>
                                        <input type="file" name="ch_image" class="form-control">
                                        <div class="text-danger">{{ $errors->first('meta_tags') }}</div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="">Chairman Description</label>
                                        <textarea name="ch_description" id="" class="form-control" placeholder="Enter chairman Description">{{$team->ch_description }}</textarea>
                                        <div class="text-danger">{{ $errors->first('ch_description') }}</div>
                                    </div>

                                     
                                     
                                     
                                     
                                     
                                     
                                    <div class="form-group">
                                        <label for="">Managing Director Name</label>
                                        <input type="text"  name="mg_name" value="{{ $team->mg_name }}" class="form-control" placeholder="Enter Managing Director Name" /> 
                                        <div class="text-danger">{{ $errors->first('mg_name') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Managing Director Designation</label>
                                        <input type="text"  name="mg_designation" value="{{$team->mg_designation }}" class="form-control" placeholder="Enter Managing Designation" /> 
                                        <div class="text-danger">{{ $errors->first('mg_designation') }}</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Managing Director Image</label>
                                        <input type="file" name="mg_image" class="form-control">
                                        <div class="text-danger">{{ $errors->first('mg_image') }}</div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="">Managing Director Description</label>
                                        <textarea name="mg_description" id="" class="form-control" placeholder="Enter Managing Description">{{$team->mg_description }}</textarea>
                                        <div class="text-danger">{{ $errors->first('mg_description') }}</div>
                                    </div>
 
                                     
                                     
                                     
                                        
                                    <div class="form-group">
                                        <label for=""> Director Name</label>
                                        <input type="text"  name="di1_name" value="{{ $team->di1_name }}" class="form-control" placeholder="Enter Director Name" /> 
                                        <div class="text-danger">{{ $errors->first('di1_name') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""> Director Designation</label>
                                        <input type="text"  name="di1_designation" value="{{$team->di1_designation }}" class="form-control" placeholder="Enter Director Designation" /> 
                                        <div class="text-danger">{{ $errors->first('di1_designation') }}</div>
                                    </div>


                                    <div class="form-group">
                                        <label for=""> Director Image</label>
                                        <input type="file" name="di1_image" class="form-control">
                                        <div class="text-danger">{{ $errors->first('di1_image') }}</div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for=""> Director Description</label>
                                        <textarea name="di1_description" id="" class="form-control" placeholder="Enter chairman Description">{{$team->di1_description }}</textarea>
                                        <div class="text-danger">{{ $errors->first('di1_description') }}</div>
                                    </div>
 
                                              
                                        
                                    <div class="form-group">
                                        <label for=""> Director Name</label>
                                        <input type="text"  name="di2_name" value="{{ $team->di2_name }}" class="form-control" placeholder="Enter Director Name" /> 
                                        <div class="text-danger">{{ $errors->first('di2_name') }}</div>
                                    </div>

                                    <div class="form-group">
                                        <label for=""> Director Designation</label>
                                        <input type="text"  name="di2_designation" value="{{$team->di2_designation }}" class="form-control" placeholder="Enter Director Designation" /> 
                                        <div class="text-danger">{{ $errors->first('di2_designation') }}</div>
                                    </div>


                                    <div class="form-group">
                                        <label for=""> Director Image</label>
                                        <input type="file" name="di2_image" class="form-control">
                                        <div class="text-danger">{{ $errors->first('di2_image') }}</div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for=""> Director Description</label>
                                        <textarea name="di2_description" id="" class="form-control" placeholder="Enter Director Description">{{$team->di2_description }}</textarea>
                                        <div class="text-danger">{{ $errors->first('di2_description') }}</div>
                                    </div>
 
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     


                                    
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Submit</button>
                                    <a  class="btn btn-sm btn-default" href="{{ route('website.management.index') }}">Cancel</a>
                                
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
         </div>
        
        











@section('customjs')


@endsection
@endsection