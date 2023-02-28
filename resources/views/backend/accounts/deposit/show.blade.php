@extends('backend.layouts.app')
@section('title','Show Deposit')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Show Deposit</h4>
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
                                        <td>{{ $deposit->client_code }}</td>
                                    </tr>
                                    <tr>
                                        <th>Client Name</th>
                                        <td>{{ $deposit->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>
                                            {{ $deposit->number }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>
                                            {{ $deposit->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Deposit For</th>
                                        <td>{{ $deposit->for_deposit }}</td>
                                    </tr>
                                
                                    <tr>
                                        <th>Bank</th>
                                        <td>
                                            {{ $deposit->bank }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Amonut</th>
                                        <td>{{ $deposit->amount }}</td>
                                    </tr>
                                    </tr>
                                    <th>Comment</th>
                                    <td>{{ $deposit->comment }}</td>
                                </tr>
                                
                                
                                
                                
                                    
                                    <tr>
                                        <th>Date</th>
                                        <td class="date">{{ $deposit->created_at->format('d-m-Y : h-i-s A') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>
                                            @if($deposit->status==1)
                                            <div class="text-warning">Pending</div>
                                            @elseif($deposit->status==2) 
                                            <div class="text-primary">Approved</div>
                                            @elseif($deposit->status==3) 
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