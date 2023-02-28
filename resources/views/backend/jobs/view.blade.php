@extends('backend.layouts.app')
@section('title','User List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">User List</h4>
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

                       <a href="{{route('job.create')}}" class="btn btn-primary btn-sm float-right mb-1" id="create-new-class"><i class="fa fa-plus"></i> Add Job</a>


                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                
                                <th class="text-nowrap">UID</th>
                                <th class="text-nowrap">Title</th>
                                <th class="text-nowrap">Position</th>
                                <th class="text-nowrap">Qualification</th>
                                <th class="text-nowrap">Experice</th>
                                <th class="text-nowrap">Location</th>
                                <th class="text-nowrap">Salary</th>
                                <th class="text-nowrap">Dead Line</th>
                                <th class="text-nowrap">Vacancy</th>
                                <th class="text-nowrap">Created at</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($jobs as  $job)
                        <tr>
 
                            <td>{{ $job->uid }}</td>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->position }}</td>
                            <td>{{ $job->qualification }}</td>
                            <td>{{ $job->experice }}</td>
                            <td>{{ $job->location }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>{{ $job->dead_line }}</td>
                            <td>{{ $job->vacancy }}</td>
                            <td>{{ $job->created_at }}</td>
                            <td>
                            	@if($job->status==1)
                            	<p class="btn btn-primary btn-xs">Active</p>
                            	@elseif($job->status==2)
                            	<p class="btn btn-danger btn-xs">Deactive</p>
                            	@endif
                            </td>
                            
                            <td>
                                <a href="{{ route('job.edit', $job->id) }}" class="btn btn-xs btn-success">
                            		<i class="fa fa-edit"></i> Edit
                            	</a> 
                            	 
                            	<a href="{{ route('job.destroy',$job->id) }}" id="delete" class="btn btn-xs btn-danger">
                            		<i class="fa fa-times"></i> Delete
                            	</a>
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