@extends('backend.layouts.app')
@section('title','BO Open List')
@section('content')

starting
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">BO Open List</h4>
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
                            <tr class="text-nowrap text-center">
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Uid</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Address</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Gender</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Status</th>
                                <th class="text-nowrap">Application</th>
                                <th class="text-nowrap text-center" width="16%">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                  	    @foreach($booopen as  $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->uid }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->mobile }}</td>
                            <td>
                                @if( $data->sex == 1 )
                                Male
                                @else
                                Female
                                @endif
                            </td>
                            <td>{{ $data->email }}</td>
                            <td> 
                                @if($data->sex == 1)
                                <p class ="btn btn-warning btn-sm">   Request </p> 
                                @elseif($data->sex == 2)
                                <p class ="btn btn-success btn-sm">   Accepted </p> 
                               @elseif($data->sex == 3)
                                <p class ="btn btn-danger btn-sm">   Rejected  </p> 
                                @endif
                            
                            </td>
                            <td><a class="btn btn-dark btn-sm" href="{{ route('booopenlist.download',$data->id) }}">Preview & Print</a></td>
                            
                             
                            
                            
                            
                            <td>
                               <a href="{{route('booopenlist.show',$data->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit</a>
                              <!-- <a href="{{route('booopenlist.show',$data->id)}}" class="btn btn-info btn-sm"> <i class="fa fa-eye"></i> Show</a> -->
                               <a href=""  class="btn btn-warning btn-sm"> <i class="fa fa-refresh"></i> Status</a>
                           </td> 
                        </tr> 
                       @endforeach 


                        </tbody>
                    </table>

                </div>
            </div>
        </div>



@endsection
