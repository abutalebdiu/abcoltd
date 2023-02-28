@extends('backend.layouts.app')
@section('title','BO Open show')
@section('content')
    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">BO Open Show </h4>
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
                    <thead>
                    <tr>
                        <th class="text-nowrap">Uid</th>
                        <td>{{ $data->uid }}</td>
                        </tr>
                    <tr>
                        <th class="text-nowrap">Client Name</th>
                        <td>{{ $data->name }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Father Name</th>
                        <td>{{ $data->father }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Mother Name</th>
                        <td>{{ $data->mother }}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Gender </th>
                        <td> 
                            @if($data->sex==1)
                            Male
                            @elseif($data->sex==2)
                            Female
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Date Of Birth  </th>
                        <td>{{ $data->birthday_date}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Occupation </th>
                        <td>{{ $data->profession}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Address</th>
                        <td>{{ $data->address}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">City</th>
                        <td>{{ $data->city}}</td>
                    </tr>
                    <th class="text-nowrap">Postal Code</th>
                    <td>{{ $data->zip_code}}</td>
                    <tr>
                        <th class="text-nowrap">Division</th>
                        <td>{{ $data->division}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Country </th>
                        <td>{{ $data->country}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Mobile Number </th>
                        <td>{{ $data->mobile}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Email </th>
                        <td>{{ $data->email}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">NID No</th>
                        <td>{{ $data->nid}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">NID Attachment</th>
                        <td><img src="{{ asset($data->nid_att) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">User Photo </th>
                        <td><img src="{{ asset($data->photo) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Signature </th>
                        <td><img src="{{ asset($data->sign) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Bank Name(BI)</th>
                        <td>{{ $data->bank}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Branch Name(BI)</th>
                        <td>{{ $data->branch}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Bank Account No(BI)</th>
                        <td>{{ $data->account}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Routing Number (BI)</th>
                        <td>{{ $data->routing}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Cheque Leaf (BI)</th>
                        <td><img src="{{ asset($data->bi_cheque) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Nomineee Name(NI) </th>
                        <td>{{ $data->n_name}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Relationship(NI) </th>
                        <td>{{ $data->relation}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Percentage(NI) </th>
                        <td>{{ $data->percentage}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Mobile Number(NI) </th>
                        <td>{{ $data->n_mobile}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Nominee NID No(NI) </th>
                        <td>{{ $data->n_nid}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">NID Attachment(NI) </th>
                        <td><img src="{{ asset($data->n_nid_att) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Nomineee Photo(NI) </th>
                        <td><img src="{{ asset($data->n_photo) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Nomineee Signature(NI) </th>
                        <td><img src="{{ asset($data->n_sign) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Full Name(JH) </th>
                        <td>{{ $data->jh_name}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Gender(JH) </th>
                        <td>{{ $data->jh_sex}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Mobile Number (JH) </th>
                        <td>{{ $data->jh_mobile}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">NID No(JH) </th>
                        <td>{{ $data->jh_nid}}</td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">NID Attachment(JH) </th>
                        <td><img src="{{ asset($data->jh_nid_att) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Photo(JH) </th>
                        <td><img src="{{ asset($data->jh_photo) }}" alt="" width="60"></td>
                    </tr>
                    <tr>
                        <th class="text-nowrap">Signature(JH) </th>
                        <td><img src="{{ asset($data->jh_sign) }}" alt="" width="60"></td>
                    </tr>

                    </tbody>
                </table>

{{--                {{ $clients->links() }}--}}
            </div>
        </div>
    </div>



@section('customjs')

@endsection
@endsection
