@extends('backend.layouts.app')
@section('title', 'Child Ipo Approve List')
@section('content')

 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Child Ipo Approved List</h4>
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

                    

                    <div class="float-right">
                        <form class="form-inline" method="" accept="">
                          <div class="form-group mb-2">
                            <label for="" class="sr-only">Child Code</label>
                            <input type="text" name="code" class="form-control" value="" placeholder="Client Code">
                          </div>
                          
                          <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i>Search</button>
                        </form>
                        </div>


                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr class="text-nowrap">
                                <th width="1%">SL</th>
                                <th class="">Master Code</th>
                                <th class="">Child Code</th>
                                <th class="">Name</th>
                                <th class="">BOID</th>
                                <th class="">Mobile</th>
                                <th class=" text-center" width="16%">Action</th>

                            </tr>
                        </thead>
                        <tbody>

                  	    @foreach($ipo as  $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->user?$data->user->code:'' }}</td>
                            <td>{{ $data->client_code }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->boid }}</td>
                            <td>{{ $data->mobile }}</td>
                            
                            <td>
                                <a href="" class="btn btn-xs btn-aqua" data-toggle="modal" data-target="#exampleModal_{{$data->id}}">
                                    <i class="fa fa-eye"></i> change status
                                </a>
                               {{-- <a href=""  class="btn btn-warning btn-sm"> <i class="fa fa-refresh"></i> Status</a> --}}
                           </td> 


                           <div class="modal fade" id="exampleModal_{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('admin.child-ipo.status.update',$data->id)}}" method="post">
                                            @csrf
                                            <div>
                                                <label for="verify"><b>Child Ipo Status</b></label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="" selected>--select--</option>
                                                    <option value="3">Reject</option>
                                                </select>
                                            </div>
                                            <div class="pt-2 text-right">
                                                <button type="submit" class="btn btn-aqua">Save Change</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </tr> 
                       @endforeach 




                       

                        </tbody>
                    </table>

                </div>
            </div>
        </div>



@endsection
