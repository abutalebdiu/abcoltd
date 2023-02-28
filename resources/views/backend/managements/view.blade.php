@extends('backend.layouts.app')
@section('title','Management List')
@section('content')



 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Management List</h4>
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
                	<style>
                		table tr th{
                			width: 20%;
                		}
                	</style>
                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                         <tr>
                         	<th>Chairman Name</th>
                         	<td>
                         		{{ $team->ch_name }}
                         	</td>
                         </tr>
                         <tr>
                         	<th>Chairman Designation</th>
                         	<td>
                         		{{ $team->ch_designation }}
                         	</td>
                         </tr>

                         <tr>
                         	<th>Chairman Image</th>
                         	<td>
                         		<image src="{{ asset($team->ch_image) }}"  width="200px"/> 
                         	</td>
                         </tr>
                         <tr>
                         	<th>Chairman Description</th>
                         	<td>
                         		{{ $team->ch_description }}
                         	</td>
                         </tr>
                         
                         
                         
                         
                         <tr>
                         	<th>Managing Director Name</th>
                         	<td>
                         		{{ $team->mg_name }}
                         	</td>
                         </tr>
                         <tr>
                         	<th>Managing Director Designation</th>
                         	<td>
                         		{{ $team->mg_designation }}
                         	</td>
                         </tr>

                         <tr>
                         	<th>Managing Director Image</th>
                         	<td>
                         		<image src="{{ asset($team->mg_image) }}" width="200px"/> 
                         	</td>
                         </tr>
                         <tr>
                         	<th>Managing Director Description</th>
                         	<td>
                         		{{ $team->mg_description }}
                         	</td>
                         </tr>
							
							
							
							
					 
							
							
						<tr>
                         	<th>Director Name</th>
                         	<td>
                         		{{ $team->di1_name }}
                         	</td>
                         </tr>
                         <tr>
                         	<th>Director Designation</th>
                         	<td>
                         		{{ $team->di1_designation }}
                         	</td>
                         </tr>

                         <tr>
                         	<th>Director Image</th>
                         	<td>
                         		<image src="{{ asset($team->di1_image) }}" width="200px"/> 
                         	</td>
                         </tr>
                         <tr>
                         	<th>Director Description</th>
                         	<td>
                         		{{ $team->di1_description }}
                         	</td>
                         </tr>
                         
                         
                         
                         
                         <tr>
                         	<th> Director Name</th>
                         	<td>
                         		{{ $team->di2_name }}
                         	</td>
                         </tr>
                         <tr>
                         	<th> Director Designation</th>
                         	<td>
                         		{{ $team->di2_designation }}
                         	</td>
                         </tr>

                         <tr>
                         	<th> Director Image</th>
                         	<td>
                         		<image src="{{ asset($team->di2_image) }}" width="200px"/> 
                         	</td>
                         </tr>
                         <tr>
                         	<th> Director Description</th>
                         	<td>
                         		{{ $team->di2_description }}
                         	</td>
                         </tr>
								
							
							
					     
                         <tr>
                         	<th>Action</th>
                         	<td>
                         		<a href="{{ route('website.management.edit') }}" class="btn btn-primary btn-sm">  <i class="fa fa-edit"></i> Edit </a>
                         	</td>
                         </tr>

 

                    </table>
                </div>
            </div>
        </div>
        


@section('customjs')


@endsection
@endsection  