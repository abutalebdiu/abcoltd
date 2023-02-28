@extends('frontend.layouts.app')
@section('title','BO Closer')
@section('content')

  
       
        <section class="balance-section py-3">
            <div class="custom-container">
                <div class="balance-box custom my-3">
                    <div class="row">
                        <div class="col-12">
              
                                
                                <div class="section-title text-center">
                                    <h4>BO Closer Application</h4>
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
                                   <form action="{{ route('bo.closer.post') }}" class="withdraw-form custom" enctype="multipart/form-data" method="post">
                                    @csrf

                                        <table class="modify-table no-border">
                                            <tbody>
                                                <tr>
                                                    <td class="table-first">
                                                        <label id="bo"><i class="fa fa-star"></i> Client Code </label>
                                                        
                                                        </td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="client_code" value="{{ old('client_code') }}" id="bo" placeholder="Client Code">
                                                        <div class="text-danger">{{ $errors->first('client_code') }}</div>
    
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="table-first"><label id="bo"><i class="fa fa-star"></i> BO ID</label></td>
                                                    <td>:</td>
                                                    <td>
                                                        <input type="text" name="boid" value="{{ old('boid') }}" id="bo" placeholder="BO ID">
                                                        <div class="text-danger">{{ $errors->first('boid') }}</div>
    
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
                                                    <td class="table-first"><label id="mobile">
                                                       
                                                    Joint Holder</label></td>
                                                    <td>:</td>
                                                    <td> 
    
                                                        <input type="text" name="join_holder" value="{{ old('join_holder') }}" id="join_holder" placeholder="Joint Holder">
                                                        <div class="text-danger">{{ $errors->first('join_holder') }}</div>
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
                                                    Closer Reason</label></td>
                                                    <td>:</td>
                                                    <td> 
    
                                                       <textarea name="closer_reason">{{ old('closer_reason') }}</textarea>
                                                        <div class="text-danger">{{ $errors->first('join_holder') }}</div>
                                                    </td>
                                                </tr>

                                            <tr>
                                                <td class="table-first"><label id="mobile">
                                                    <i class="fa fa-star"></i>
                                                    Signature Attachment</label></td>
                                                <td>:</td>
                                                <td><input type="file" name="signature">
                                                    <div class="text-danger">{{ $errors->first('signature') }}</div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="table-first"><label id="mobile">
                                                    
                                                 Joint Holder Signature</label></td>
                                                <td>:</td>
                                                <td><input type="file" name="joint_signature">
                                                    <div class="text-danger">{{ $errors->first('joint_signature') }}</div>
                                                </td>
                                            </tr>
                                            
                                            
                                            </tbody>
                                            </table>
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