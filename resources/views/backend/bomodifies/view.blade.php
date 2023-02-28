@extends('backend.layouts.app')
@section('title','BO Modify')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">BO Modify</h4>
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
                                <th class="text-nowrap"><b>Client Code</b></th>
                                <th class="text-nowrap"><b>Client Name</b></b></th>
                                <!-- <th class="text-nowrap">BOID</th> -->
                                <th class="text-nowrap"><b>Mobile</b></th>
                                <th class="text-nowrap"><b>Modify For</b></th>
                                <th class="text-nowrap"><b>Old Data</b></th>
                                <th class="text-nowrap"><b>New Data</b></th>
                                <th class="text-nowrap"><b>Signature</b></th>
                                <th class="text-nowrap"><b>Attachment</b></th>
                                <th class="text-nowrap"><b>Application</b></th>
                                <th class="text-nowrap"><b>Status</b></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($bomodifies as  $bomodify)
                        <tr>
 
                            <td>{{ $bomodify->uid }}</td>
                            <td>{{ $bomodify->code }}</td>
                            <td>{{ $bomodify->name }}</td>
                        <!--    <td>{{ $bomodify->boid }}</td> -->
                            <td>{{ $bomodify->mobile }}</td>
                            <td>{{ $bomodify->reason }}</td>
                            <td>{{ $bomodify->old }}</td>
                            <td>{{ $bomodify->new_data }}</td>
                            <td><a href="{{ asset($bomodify->signature) }}">Downlaod</a></td>
                            <td><a href="{{ asset($bomodify->attachment) }}">Download</a></td>
                            <!-- <td><a href="{{ route('bomodify.download',$bomodify->id) }}">Preview & Print</a></td> -->
                            <td><a class="btn btn-dark btn-sm" href="{{ route('bomodify.download',$bomodify->id) }}">Preview & Print</a></td>
                            
                            <td>
                            	@if($bomodify->status==1)
                            	<p class="btn btn-primary btn-xs">Active</p>
                            	@elseif($bomodify->status==2)
                            	<p class="btn btn-danger btn-xs">Deactive</p>
                            	@endif
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