@extends('frontend.layouts.app')
@section('title','BO Modify')
@section('content')

  
       
        <section class="balance-section py-3">
            <div class="custom-container">
                <div class="balance-box custom my-3">
                    <div class="row">
                        <div class="col-12">
              
                                
                                <div class="section-title text-center">
                                    <h4>BO Modify Application</h4>
                                    <div class="head-after m-auto mt-3 mb-2 clearfix">
                                     <span class="line"></span>
                                     <span class="circle"></span>
                                     <span class="line"></span>
                                 </div>
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="balance-content pt-3">
                               
                               <div>
                                   <form action="{{ route('bomodify.store.front') }}" class="withdraw-form custom" enctype="multipart/form-data" method="post">
                                    @csrf

                                        <table class="modify-table no-border">
                                            <tbody><tr>
                                                <td class="table-first"><label for="code">
                                                    <i class="fa fa-star"></i>
                                                Client Code</label></td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="code" value="{{ old('code') }}" id="code" placeholder="Client code">
                                                    <div class="text-danger">{{ $errors->first('code') }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first">                                            
                                                    <label id="client">
                                                        <i class="fa fa-star"></i>
                                                        Client Name</label></td>
                                                <td>:</td>
                                                <td> 
                                                    <input type="text" name="name" value="{{ old('name') }}" id="client" placeholder="Client Name">
                                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first"><label id="bo">BO ID</label></td>
                                                <td>:</td>
                                                <td>
                                                    <input type="text" name="boid" value="{{ old('boid') }}" id="bo" placeholder="BO ID">
                                                    <div class="text-danger">{{ $errors->first('boid') }}</div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first"><label id="mobile">
                                                    <i class="fa fa-star"></i>
                                                Mobile No</label></td>
                                                <td>:</td>
                                                <td> 

                                                    <input type="text" name="mobile" value="{{ old('mobile') }}" id="mobile" placeholder="Mobile No">
                                                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first"><label id="mobile">
                                                    <i class="fa fa-star"></i>
                                                    Sign Attachment</label></td>
                                                <td>:</td>
                                                <td><input type="file" name="signature">
                                                    <div class="text-danger">{{ $errors->first('signature') }}</div>
                                                </td>
                                                
                                            </tr>
                                            </tbody></table>

                                            <div class="bordered">
                                                 <table class="modify-table no-border">
                                            <tbody><tr>
                                                <td class="table-first">Modify For</td>
                                                <td>:</td>
                                                <td>
                                                    <select name="reason">
                                                    <option value="" selected>--select--</option>
                                                    <option {{ old('modify_for') == "Mobile" ? 'selected' : '' }} value="Mobile">Mobile</option>
                                                    <option {{ old('modify_for') == "Email" ? 'selected' : '' }} value="Email">Email</option>
                                                    <option {{ old('modify_for') == "Bank" ? 'selected' : '' }} value="Bank">Bank</option>
                                                    <option {{ old('modify_for') == "Address" ? 'selected' : '' }} value="Address">Address</option>
                                                    </select>
                                                    <div class="text-danger">{{ $errors->first('modify_for') }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first"><label id="mobile">Old Information</label></td>
                                                <td>:</td>
                                                <td> <input type="text" name="old_data" id="" value="{{ old('old_data') }}" placeholder="Old Information">
                                                     <div class="text-danger">{{ $errors->first('old_data') }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-first"><label id="">New Information</label></td>
                                                <td>:</td>
                                                <td> <input type="text" name="new_data" value="{{ old('new_data') }}" id="mobile" placeholder="New Information">
                                                    <div class="text-danger">{{ $errors->first('new_data') }}</div>
                                                </td>
                                            </tr>
                                            {{-- <tr>
                                                <td class="table-first"><label id="mobile"></label></td>
                                                <td></td>
                                                <td> <span class="add_att_open">add attachment
                                                    <span class="attachment_message">
                                                        To modify your Bank A/C,
                                                      you need to attach your cheque leaf scan copy or photo.
                                                    </span>
                                                </span></td>
                                            </tr> --}}
                                            <tr class="">
                                                <td class="table-first"><label id="mobile2">
                                                    attachment (If Bank)</label></td>
                                                <td>:</td>
                                                <td><input type="file" name="attachment" id="mobil2">
                                                    <div class="text-danger">{{ $errors->first('attachment') }}</div>       
                                                </td>
                                                    
                                            </tr>
                                            
                                        </tbody></table>
                                            </div>

                                    
                                    <div class="withdraw-btn mt-3">
                                        <button type="submit" class="custom-btn capital">Apply</button>
                                    </div>
                                   </form>
                               </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 
@endsection