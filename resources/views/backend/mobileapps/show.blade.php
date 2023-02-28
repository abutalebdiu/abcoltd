@extends('backend.layouts.app')
@section('title','Mobile Application Client Show')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Mobile Application Client Show</h4>
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
                                
                                <th class="text-nowrap">Menu</th>
                                <th class="text-nowrap">Information</th>
                                  
                            </tr>
                        </thead>
                        <tbody>
                 	    


                         
                            <tr>
                                <th>UID</th>
                                <td>{{ $mobileapp->uid }}</td>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <td>{{ $mobileapp->name }}</td>
                            </tr>


                            <tr>
                                <th>Client Code</th>
                                <td>{{ $mobileapp->code }}</td>
                            </tr>

                            <tr>
                                <th>BOID</th>
                                <td>{{ $mobileapp->boid }}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td>{{ $mobileapp->type }}</td>
                            </tr>

                            <tr>
                                <th>Client Type</th>
                                <td>{{ $mobileapp->client_type }}</td>
                            </tr>
                            <tr>
                                <th>Domicile</th>
                                <td>{{ $mobileapp->domicile }}</td>
                            </tr>

                            <tr>
                                <th>User Type</th>
                                <td>{{ $mobileapp->usetype }}</td>
                            </tr>

                            <tr>
                                <th>Mobile</th>
                                <td>{{ $mobileapp->mobile }}</td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td>{{ $mobileapp->email }}</td>
                            </tr>

                            <tr>
                                <th>Signature</th>
                                <td><img src="{{ asset($mobileapp->signature) }}" alt="" width="100"></td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><img src="{{ asset($mobileapp->photo) }}" alt="" width="100"></td>
                            </tr>

                            <tr>
                                <th>status</th>
                                <td>
                                    @if($mobileapp->status==1)
                                    <p class="btn btn-primary btn-xs">Active</p>
                                    @elseif($mobileapp->status==2)
                                    <p class="btn btn-danger btn-xs">Deactive</p>
                                    @endif
                                </td>
                            </tr>

                            <tr>
                                <th>Action</th>
                                <td>
                                     <a href="" class="btn btn-dark btn-sm"> <i class="fa fa-download"></i> Download</a> 
                                    

                                        <a href="{{ route('mobile.app.edit', $mobileapp->id) }}" class="btn btn-xs btn-success">
                                            <i class="fa fa-edit"></i> Edit
                                        </a> 
                                         
                                        <a href="{{ route('mobile.app.destroy',$mobileapp->id) }}" id="delete" class="btn btn-xs btn-danger">
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