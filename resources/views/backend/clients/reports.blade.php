@extends('backend.layouts.app')
@section('title','Client Balance Report')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Client Balance Report</h4>
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
                        <label for="" class="sr-only">Client Code</label>
                        <input type="text" name="code" class="form-control"  value="{{ old('code') }}" placeholder="Client Code">
                      </div>
                      
                      <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> Balance Search</button>
                    </form>
                    </div>

                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th width="1%">SL</th>
                             
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">BOID</th>
                                <th class="text-nowrap">Balance</th>
                                 
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($clients as  $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->code }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->boid }}</td>
                            <td>{{ $client->balance?$client->balance->balance:'' }}</td>
                             
                        </tr>
                               
                        @endforeach
                             
                             
                        </tbody>
                    </table>

                    {{ $clients->links() }}
                </div>
            </div>
        </div>
        

 
@endsection