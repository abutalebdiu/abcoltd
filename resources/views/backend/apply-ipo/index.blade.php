@extends('backend.layouts.app')
@section('title', 'Apply IPO Request List')
@section('content')

 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Apply IPO Request List</h4>
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
                         <form class="form-inline" method="get" accept="">
                          <div class="form-group mb-2">
                            <label for="" class="sr-only">Apply Code</label>
                            <input type="text" name="client_code" class="form-control" value="@if(isset($client_code)){{ $client_code }}@endif" placeholder="Client Code">
                          </div>
                           <div class="form-group mb-2">
                                <select name="ipo_id" id="name"  class="form-control  custom-input  select2">
                                    <option value="">Select IPO</option>
                                    @foreach($ipos as $ipo)
                                        <option @if(isset($ipo_id)){{ $ipo_id == $ipo->id  ? 'selected'  : '' }}@endif value="{{ $ipo->id }}">{{ $ipo->instrument_code }}</option>
                                    @endforeach
                                </select>
                          </div>
                          
                          <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i>  Search</button>
                        </form>
                     </div>
                     <div class="float-left">
                          <form action="{{ route('admin.apply-ipo.export') }}" method="post">
                            @csrf

                            <input type="hidden" value="@if(isset($ipo_id)){{ $ipo_id }}@endif">
                            <input type="hidden" value="@if(isset($client_code)){{ $client_code }}@endif">
                            <input type="hidden" value="1" name="status">
                            

                            <button type="submit" name="pdf" class="btn btn-info"><i class="fa fa-file"></i> PDF</button>
                            <button type="submit" name="excel" class="btn btn-primary">Excel</button>
                        </form>
                     </div>
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr class="text-nowrap">
                                <th width="1%">SL</th>
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Client Name</th>
                                <th class="text-nowrap">Mobile</th>
                                <th class="text-nowrap">InstrumentCode</th>
                                <th class="text-nowrap">Amount</th>
                                <th class="text-nowrap"> Order Date</th>
                                <th class="text-nowrap text-center" width="16%">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                  	    @foreach($appliedipos as  $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $data->client_code }}</td>
                            <td>{{ $data->user?$data->user->name:'' }}</td>
                            <td>{{ $data->user?$data->user->mobile:'' }}</td>
                            <td>{{ $data->ipo?$data->ipo->instrument_code:'' }}</td>
                           
                            <td>{{ $data->amount }}</td>
                            <td>{{ $data->created_at }}</td>
                            <td>
                                <a href="" class="btn btn-xs btn-aqua" data-toggle="modal" data-target="#exampleModal_{{$data->id}}">
                                    <i class="fa fa-eye"></i> change status
                                </a>
                               
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
                                        <form action="{{route('admin.apply-ipo.status.update',$data->id)}}" method="post">
                                            @csrf
                                            <div>
                                                <label for="verify"><b>Child Ipo Status</b></label>
                                                <select name="status" id="" class="form-control">
                                                    <option value="" selected>--select--</option>
                                                    <option value="2">Approve</option>
                                                    <option value="3">Reject</option>
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
                        </tr> 
                       @endforeach 




                       

                        </tbody>
                    </table>

                </div>
            </div>
        </div>



@endsection
