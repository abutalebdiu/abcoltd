@extends('backend.layouts.app')
@section('title','User List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">User List</h4>
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
                                <input type="date" name="start_date" class="form-control" value="" placeholder="Client Code">
                              </div>
                              
                              <div class="form-group mb-2">
                                <label for="" class="sr-only">Child Code</label>
                                <input type="date" name="end_date" class="form-control" value="" placeholder="Client Code">
                              </div>
                              
                              <button type="submit" name="pdf" class="btn btn-primary mb-2"><i class="fa fa-search"></i>PDF</button>
                              <button type="submit" name="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i>Search</button>
                            </form>
                        </div>
                       <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Client code</th>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th>Deposit type</th>
                                    <th>Amonut</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $deposit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $deposit->code }}</td>
                                    <td>{{ $deposit->user?$deposit->user->name:'' }}</td>
                                    <td class="date">{{ $deposit->created_at }}</td>
                                    <td>{{ $deposit->type }}</td>
                                    <td>{{ $deposit->amount }}</td>
                                    <td>
                                        @if($deposit->status==1)
                                        <div class="text-warning">Pending</div>
                                        @elseif($deposit->status==2) 
                                        <div class="text-primary">Accepted</div>
                                        @elseif($deposit->status==3) 
                                        <div class="text-success">Completed</div>
                                        @elseif($deposit->status==0) 
                                        <div class="text-danger">Rejected</div> 
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" title="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-refresh"></i> Change Status</a>
                                        <a href="{{ route('backend.deposit.show',$deposit->id) }}" title="" class="btn btn-secondary btn-sm"> <i class="fa fa-eye"></i> Show</a>
                                        {{-- <a href="{{ route('deposit.destroy',$deposit->id) }}" title="" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> --}}
                                    </td>

                                    <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              
                                              <form action="{{ route('deposit.change.status',$deposit->id) }}" method="post">
                                                @csrf
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">
                                                       <div class="form-group">
                                                           <label for="">Status</label>
                                                           <select name="status" class="form-control">
                                                                <option value="">Select Status</option>
                                                                <option value="2">Accepted</option>
                                                                <option value="3">Completed</option>
                                                                <option value="0">Rejected</option>
                                                            </select>
                                                        </div> 
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                  </div>
                                                </form>
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
        


@section('customjs')


@endsection
@endsection