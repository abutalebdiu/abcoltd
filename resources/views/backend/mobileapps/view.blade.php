@extends('backend.layouts.app')
@section('title','Mobile Application Client List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Mobile Application Client List</h4>
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
 

                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                
                                <th class="text-nowrap"><b>SL</b></th>
                                <th class="text-nowrap"><b>UID</b></th>
                                <th class="text-nowrap"><b>Client Code</b></th>
                                <th class="text-nowrap"><b>Client Name</b></th>
                                <th class="text-nowrap"><b> BOID</b></th>
                                <th class="text-nowrap"><b>Application Date</b></th>
                                <th class="text-nowrap"><b>Status</b></th>
                                <th class="text-nowrap"><b>Download</b></th>
                                <th class="text-nowrap"><b>Action</b></th>
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($mobileappes as  $mobileapp)
                        <tr>
 
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mobileapp->uid }}</td>
                            <td>{{ $mobileapp->code }}</td>
                            <td>{{ $mobileapp->name }}</td>
                            <td>{{ $mobileapp->boid }}</td>
                            <td>{{ $mobileapp->created_at }}</td>
                             
                            <td>
                            	@if($mobileapp->status==1)
                            	<p class="btn btn-primary btn-xs">Active</p>
                            	@elseif($mobileapp->status==2)
                            	<p class="btn btn-danger btn-xs">Deactive</p>
                            	@endif
                            </td>
                            <td><a href="{{ route('mobile.app.download',$mobileapp->id) }}" class="btn btn-dark btn-sm">Preview & Print</a></td>
                            
                            <td>
                                <a href="{{ route('mobile.app.show', $mobileapp->id) }}" class="btn btn-xs btn-success">
                            		<i class="fa fa-eye"></i> Show
                            	</a> 

                                {{-- <a href="{{ route('mobile.app.edit', $mobileapp->id) }}" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit"></i> Edit
                                </a>  --}}
                            	 
                            	<a href="{{ route('mobile.app.destroy',$mobileapp->id) }}" id="delete" class="btn btn-xs btn-danger">
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