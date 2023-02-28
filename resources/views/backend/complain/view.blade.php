@extends('backend.layouts.app')
@section('title','Complain List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Complain List</h4>
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
                                
                                <th class="text-nowrap">UID</th>
                                <th class="text-nowrap">Complain Or Query</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Created at</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($complains as  $complain)
                        <tr>
 
                            <td>{{ $complain->uid }}</td>
                            <td>{{ $complain->complain_or_query }}</td>
                            <td>{{ $complain->name }}</td>
                            <td>{{ $complain->mobile }}</td>
                            <td>{{ $complain->email }}</td>
                            <td>{{ $complain->code }}</td>                            
                            <td>{{ $complain->created_at }}</td>
                            <td>
                            	@if($complain->status==1)
                            	<p class="btn btn-warning btn-xs">Request</p>
                            	@elseif($complain->status==2)
                            	<p class="btn btn-danger btn-xs">Deactive</p>
                            	@endif
                            </td>
                            
                            <td>
                                <a href="{{ route('complain.show', $complain->id) }}" class="btn btn-xs btn-success">
                            		<i class="fa fa-eye"></i> View
                            	</a> 
                            	 
                            	<a href="{{ route('complain.destroy',$complain->id) }}" id="delete" class="btn btn-xs btn-danger">
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