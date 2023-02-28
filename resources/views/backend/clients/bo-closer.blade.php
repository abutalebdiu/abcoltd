@extends('backend.layouts.app')
@section('title','BO Closer')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Client BO Closer</h4>
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
                                    <th>SL</th>
                                    <th>Boid</th>
                                    <th>User Id</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Join Holder</th>
                                    <th>Closer Reason</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bocoser as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->boid }}</td>
                                    <td>{{ $data->uid }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->mobile }}</td>
                                    <td>{{ $data->join_holder }}</td>
                                    <td>{{ $data->closer_reason }}</td>
                                    <td>
                                        <a class="btn btn-dark btn-sm" href="{{ route('borequest.download',$data->id) }}">Preview & Print</a>
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