@extends('backend.layouts.app')
@section('title','Custom Message')
@section('content')


    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">All Website Notice  </h4>
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

                <div class="row py-4">
                    <div class="col-12 col-sm-6">
                        <div class="message-box">
                            <form action="">
                                <textarea name="" placeholder="Message" id="message" class="form-control" rows="5"></textarea>
                                <div class="sms-box-footer">
                                    <div class="sms-box-footer-left mt-2">
                                        <div id="sms-counter">
                                            <li class="d-inline" style="padding-right:20px; font-size: 14px; font-width:bold;">Length : <span class="length"></span></li>
                                            <li class="d-inline" style="padding-right:20px; font-size: 14px; font-width:bold;">SMS : <span class="messages"></span></li>
                                            <li class="d-inline" style="padding-right:20px; font-size: 14px; font-width:bold;">Per Sms : <span class="per_message"></span></li>
                                            <li class="d-inline" style="padding-right:20px; font-size: 14px; font-width:bold;">Remaining : <span class="remaining"></span></li>
                                        </div>
                                    </div>
                                    <div class="sms-box-footer-right mt-5">
                                        <div class="sms-button">
                                            <button type="submit" class="btn btn-primary sms">Send Custom Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 pt-5 py-sm-0">
                        <div class="import-box">
                            <form action="{{ route('mobile.import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="import-form">
                                    <label for="">Import File</label>
                                    <input type="file" name="mobilenumber_file" class="form-control">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
    
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-12 py-5">
                        <div class="sms-number-table">
                            <div>
                                <button type="submit" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal">Add Mobile</button>







  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('sms.custom.number.store') }}" method="post">
            @csrf
        <div class="modal-body">
              <div>
                    <input type="text" name="name"  placeholder="Name" class="form-control my-2">
                    <input type="text" name="number"  placeholder="Number"  class="form-control my-2">
              </div>
        </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
      </div>
    </div>
  </div>

                            </div>
                            <table class="table table-striped table-hover w-50" style="border: 1px solid #ccc; padding:10px">
                                <thead>
                                    <tr>
                                        <th scope="col">#SL</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($number as $item)
                                    <tr>
                                        <th scope="row">{{  $loop->iteration }}</th>
                                        <td> {{ $item->name }}</td>
                                        <td>{{ $item->number }}</td>
                                        <td>
                                            <a href="{{route('sms.custom.number.destroy',$item->id)}}" id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Delate</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


             </div>
        </div>
    </div>
@section('customjs')
<script>
    $('#message').countSms('#sms-counter');
</script>
@endsection
@endsection
