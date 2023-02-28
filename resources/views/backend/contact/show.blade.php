@extends('backend.layouts.app')
@section('title','Contact Show')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Contact Show</h4>
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
                                <th class="text-nowrap" style="width: 10%">Name</th>
                                   <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Mobile</th>
                                 <td>{{ $contact->mobile }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap">Subject</th> 
                                 <td>{{ $contact->subject }}</td>    
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>
                                    {!! $contact->message !!}
                                </td>
                            </tr>

                            <tr>
                                <th class="text-nowrap">Created at</th>
                                 <td>{{ $contact->created_at }}</td>
                            </tr>

                            <tr>
                                 <th class="text-nowrap">Status</th>
                                  <td>
                                    @if($contact->status==1)
                                    <p class="btn btn-warning btn-xs">Request</p>
                                    @elseif($contact->status==2)
                                    <p class="btn btn-danger btn-xs">Deactive</p>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                  <th class="text-nowrap">Action</th>
                                  <td>
                                        <a href="{{ route('contact.index') }}" class="btn btn-xs btn-success">
                                            <i class="fa fa-list"></i> back
                                        </a> 
                                         
                                        <a href="{{ route('contact.destroy',$contact->id) }}" id="delete" class="btn btn-xs btn-danger">
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