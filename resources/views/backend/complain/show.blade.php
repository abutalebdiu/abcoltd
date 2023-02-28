@extends('backend.layouts.app')
@section('title','Complain Show')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Complain Show</h4>
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
                          <tbody>
                            <tr>
                                 <th class="text-nowrap">UID</th>
                                  <td>{{ $complain->uid }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Name</th>
                                   <td>{{ $complain->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Mobile</th>
                                 <td>{{ $complain->mobile }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Email</th>
                                <td>{{ $complain->email }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Client Code</th> 
                                 <td>{{ $complain->code }}</td>    
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>
                                    {!! $complain->message !!}
                                </td>
                            </tr>

                            <tr>
                                <th class="text-nowrap">Created at</th>
                                 <td>{{ $complain->created_at }}</td>
                            </tr>

                            <tr>
                                 <th class="text-nowrap">Status</th>
                                  <td>
                                    @if($complain->status==1)
                                    <p class="btn btn-warning btn-xs">Request</p>
                                    @elseif($complain->status==2)
                                    <p class="btn btn-danger btn-xs">Deactive</p>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                  <th class="text-nowrap">Action</th>
                                  <td>
                                        <a href="{{ route('complain.index') }}" class="btn btn-xs btn-success">
                                            <i class="fa fa-list"></i> back
                                        </a> 
                                         
                                        <a href="{{ route('complain.destroy',$complain->id) }}" id="delete" class="btn btn-xs btn-danger">
                                            <i class="fa fa-times"></i> Delete
                                        </a>
                                    </td>
                            </tr>


                 	         
                 	     
                             
                             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        


@section('customjs')


@endsection
@endsection