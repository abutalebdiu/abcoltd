@extends('backend.layouts.app')
@section('title','Withdraw Rejected List')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Withdraw Rejected List</h4>
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
                                        {{-- <a href="{{ route('withdraw.destroy',$withdraw->id) }}" title="" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delete</a> --}}
                                        <a href="{{ route('withdraw.show',$withdraw->id) }}" title="" class="btn btn-danger btn-sm"> <i class="fa fa-eye"></i> show</a>

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