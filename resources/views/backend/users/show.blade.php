@extends('backend.layouts.app')
@section('title','Add New Category')
@section('content')

<div id="content" class="content">
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">User Request List</h4>
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
                <tbody>    
                    <tr>
                        <th class="text-nowrap">User Id</th>
                        <td>{{ $user->user_uid }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Client Code</th>
                        <td>{{ $user->code }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Bo Id</th>
                        <td>{{ $user->boid }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Role</th>
                        <td>{{ $user->role?$user->role->name:'' }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Mobile</th>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Image</th>
                        <td><img src="{{ asset($user->image) }}" alt="" width="50"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Created at</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">status</th>
                        <td>
                            @if($user->status==1)
                            <p class="btn btn-primary btn-xs">Pending</p>
                            @elseif($user->status==2)
                            <p class="btn btn-success btn-xs">Approved</p>
                            @elseif($user->status==3)
                            <p class="btn btn-danger btn-xs">Rejected</p>
                            @endif
                        </td>
                    </tr>
                     
                </tbody>
            </table>
        </div>
    </div>
</div>



@section('customjs')






@section('customjs')


@endsection
@endsection