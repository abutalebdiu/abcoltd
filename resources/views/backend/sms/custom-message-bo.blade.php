@extends('backend.layouts.app')
@section('title','Bo Yearly Charge (Sms)')
@section('content')


    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Bo Yearly Charge (Sms)  </h4>
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
                            <form action="">
                                <div class="import-form">
                                    <label for="">Import File</label>
                                    <input type="file" class="form-control">
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
                                <button type="submit" class="btn btn-primary mb-1">Add Mobile</button>
                                
                            </div>
                            <table class="table table-striped table-hover w-100" style="border: 1px solid #ccc; padding:10px">
                                <thead>
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No</th>
                                        <th scope="col">Delivery Report</th>
                                        
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">delete</td>
                                        <td>013234</td>
                                        <td>md shough</td>
                                        <td>01723455456</td>
                                        <td>send</td>  
                                    </tr>
                                    <tr>
                                        <td scope="row">delete</td>
                                        <td>34545</td>
                                        <td>md Abu Taleb</td>
                                        <td>01765465466</td>
                                        <td>send</td>
                                    </tr>
                                     <tr>
                                        <td scope="row">delete</td>
                                        <td>013238</td>
                                        <td>md Bokul Islam</td>
                                        <td>01565565656</td>
                                        <td>send</td>
                                    </tr>
                                     <tr>
                                        <td scope="row">delete</td>
                                        <td>013239</td>
                                        <td>md Arafat</td>
                                        <td>0193453445</td>
                                        <td>send</td>
                                    </tr>
                                    
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
