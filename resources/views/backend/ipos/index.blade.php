@extends('backend.layouts.app')
@section('title','IPO')
@section('content')


    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">IPO Declaration  </h4>
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

                <a href="{{route('ipo.create')}}" class="btn btn-primary btn-sm float-right mb-1" id="create-new-class"><i class="fa fa-plus"></i> New IPO Declaration</a>

                <table id="laravel_datatable" class="table table-striped table-bordered table-td-valign-middle">
                    <thead>
                    <tr>
                        <th class="text-nowrap">SL</th>
                         <th class="text-nowrap">IPO Name</th>
                         <th class="text-nowrap">Instrument Code</th>
                        <th class="text-nowrap">Start Date</th>
                        <th class="text-nowrap">End Date</th>
                        <th class="text-nowrap">IPO Summary</th>
                        <th class="text-nowrap">Result</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($ipos as $ipo)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $ipo->ipo}}</td>
                            <td>{{ $ipo->instrument_code}}</td>
                            <td>{{ $ipo->start_date}}</td>
                            <td>{{ $ipo->end_date}}</td>
                            <td>
                                <a href="{{ asset($ipo->attachment) }}"  download="">Download</a>
                             </td>
                             <td>
                                <a href="{{ asset($ipo->result) }}"  download="">Download</a>
                             </td>
                            
                            
                            <td>
                                
                                <a href="{{route('ipo.admin.edit',$ipo->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-edit"></i> Edit</a>
                                {{-- <a href="{{route('ipo.destroy',$ipo->id)}}" id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delate</a> --}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


             </div>
        </div>
    </div>

@endsection
