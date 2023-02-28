@extends('backend.layouts.app')
@section('title','Contact List')
@section('content')


    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Contact List  </h4>
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
 

                <table id="laravel_datatable" class="table table-striped table-bordered table-td-valign-middle">
                    <thead>
                    <tr>
                        <th class="text-nowrap">SL</th>
                     
                        <th class="text-nowrap">Name</th>
                        <th class="text-nowrap">Mobile Number</th>
                        <th class="text-nowrap">Email</th>
                        <th class="text-nowrap">Subject</th>
                         
                        <th class="text-nowrap">Status</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($contacts as $contact)
                        <tr>
                            
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$contact->name }}</td>
                            <td>{{$contact->mobile }}</td>
                            <td>{{$contact->email }}</td>
                            <td>{{$contact->subject }}</td>
                             

                            <td>
                                @if($contact->status==1)
                                    <p class="btn btn-primary btn-sm">Active</p>
                                @elseif($contact->status==2)
                                    <p class="btn btn-danger btn-sm">inactive</p>
                                @endif
                            </td>

                            <td>
                                <a href="{{route('contact.show',$contact->id)}}" class="btn btn-success btn-sm"> <i class="fa fa-eye"></i> view</a>
         
                                <a href="{{route('contact.destroy',$contact->id)}}" id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> delate</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


 






        </div>
    </div>

@endsection
