@extends('backend.layouts.app')
@section('title','Withdraw Accpeted List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Withdraw Accepted List</h4>
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

                       <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Client code</th>
                                    <th>Client Name</th>
                                    <th>Date</th>
                                    <th>Balance</th>
                                    <th>Withdraw</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($withdraws as $withdraw)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $withdraw->code }}</td>
                                    <td>{{ $withdraw->user?$withdraw->user->name:'' }}</td>
                                    <td class="date">{{ $withdraw->created_at }}</td>
                                  
                                    <td>{{ $withdraw->balance }}</td>
                                    <td>{{ $withdraw->withdraw }}</td>
                                   
                                    <td>
                                        <a href="" title="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-refresh"></i> Change Status</a>
                                       <a href="{{ route('withdraw.preview',$withdraw->id) }}" title="" class="btn btn-info btn-sm"> <i class="fa fa-file"></i> Print & Preview</a>
                                        <a href="{{ route('withdraw.show',$withdraw->id) }}" title="" class="btn btn-danger btn-sm"> <i class="fa fa-eye"></i> show</a>

                                    </td>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            
                                            <form action="{{ route('withdraw.change.status',$withdraw->id) }}" method="post">
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