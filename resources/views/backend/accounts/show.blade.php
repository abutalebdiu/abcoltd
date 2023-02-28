@extends('backend.layouts.app')
@section('title','Show Withdraw')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Show Withdraw</h4>
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
                            <tbody>
                                <tr>
                                    <th>Client code</th> 
                                    <td>{{ $withdraw->code }}</td>
                                </tr>
                                <tr>
                                    <th>Client Name</th>
                                    <td>{{ $withdraw->user?$withdraw->user->name:'' }}</td>
                                </tr>
                                <tr>
                                    <th>Uid</th>
                                    <td class="date">{{ $withdraw->uid }}</td>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <td class="date">{{ $withdraw->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Balance</th>
                                    <td>{{ $withdraw->balance }}</td>
                                </tr>
                                <tr>
                                    <th>Withdraw</th>
                                    <td>{{ $withdraw->withdraw }}</td>
                                </tr>
                                <tr>
                                    <th>signature</th>
                                    <td><a href="{{ asset($withdraw->sign) }}" download> download</a></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($withdraw->status==1)
                                        <div class="text-warning">Pending</div>
                                        @elseif($withdraw->status==2) 
                                        <div class="text-primary">Approved</div>
                                        @elseif($withdraw->status==0) 
                                        <div class="text-danger">Rejected</div> 
                                        @endif
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