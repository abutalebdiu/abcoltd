@extends('backend.layouts.app')
@section('title','User Approved List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">User Approved List</h4>
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
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Image</th>
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">Email</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">Role</th>
                                <th class="text-nowrap">Created at</th>
                               
                                <th class="text-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($userrequest as  $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset($user->image) }}" alt="" width="50"></td>
                            <!--td>{{ $user->user_uid }}</td-->
                            <td>{{ $user->code }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->role?$user->role->name:'' }}</td>
                            <td>{{ $user->created_at }}</td>
                            {{-- <td>
                            	@if($user->status==1)
                            	<p class="btn btn-primary btn-xs">Pending</p>
                            	@elseif($user->status==2)
                            	<p class="btn btn-success btn-xs">Active</p>
                            	@elseif($user->status==0)
                            	<p class="btn btn-danger btn-xs">Deactive</p>
                            	@endif
                            </td> --}}
                            
                            <td>
                                <a href="#" class="btn btn-xs btn-aqua" data-toggle="modal" data-target="#exampleModal_{{$user->id}}">
                                    <i class="fa fa-refresh"></i> change status
                                </a>
                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-xs btn-success">
                            		<i class="fa fa-eye"></i> Show
                            	</a> 
                                
                            </td>
                               
                               
                               <div class="modal fade" id="exampleModal_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.user.request.change',$user->id)}}" method="post">
                                                @csrf
                                                <div>
                                                    <label for="verify"><b>User Change Status</b></label>
                                                    <select name="status" id="verify" class="form-control">
                                                        <option value="" selected>--select--</option>
                                                        <option value="1" >pending</option>
                                                        <option value="3">Rejected</option>
                                                    </select>
                                                </div>
                                                <div class="pt-2 text-right">
                                                    <button type="submit" class="btn btn-aqua">save change</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                      
                            	
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