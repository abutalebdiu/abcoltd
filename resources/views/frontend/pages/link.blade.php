@extends('frontend.layouts.app')
@section('title','BO Opening Online')
@section('content')
 

 <section class="mobile-input-section py-4">
            <div class="container clearfix">
                <div class="row">
                    <div class="section-title text-center">
                        <h4>BO Account opening</h4>
                        <div class="head-after m-auto mt-3 mb-2 clearfix">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                   
                </div>

                <button class="follow custom-btn capital my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Click here to follow instructions before BO opening
                </button>

                <div class="follow_model">
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="exampleModalLabel">Required For opening an account with RNI Securities Ltd, the following documents are required to be submitted along with the account opening form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                     <div class="follow-box">
                                         <div class="row">
                                             <div class="col-12">
                                                 <h6 class='text-danger'>BO account Opening Fee 500 Tk </h6>
                                             </div>


                                            <div class="account_requre">
                                               <h6>Individual Account:-</h6>
                                                <ul>
                                                    <li><i class="fa fa-hand-o-right"></i> Account holder Photo</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Account holder Signature</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Account holder NID Copy</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Bank Cheque Leaf Copy/Statement</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Nominee Photo</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Nominee Photo</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Nominee Signature</li>
                                                </ul>
                                            </div>
                                                <div class="account_requre">
                                               <h6>If Joint Holder:-</h6>
                                                <ul>
                                                    <li><i class="fa fa-hand-o-right"></i> Joint Holder Photo</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Joint Holder Signature</li>
                                                    <li><i class="fa fa-hand-o-right"></i> Joint Holder NID</li>
                                                </ul>
                                            </div>

                                             </div>
                                         </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    <section class="join-section clearfix py-5">
        <div class="custom-container">



            <div class="join-form-box clearfix">
                <form action="{{ route('link.post') }}" class="seller-step-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="name">  <span>*</span>Client name : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Client Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="bo_id"> <span>*</span>BO ID : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" name="boid" value="{{ old('boid') }}" id="name" placeholder="BO ID">
                                    <div class="text-danger">{{ $errors->first('boid') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="mobile"> <span>*</span> Mobile Number : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile Number">
                                    <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="bank_name">  <span>*</span>Bank Name : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" id="bank_name" name="bank" value="{{ old('bank') }}" placeholder="Bank Name">
                                    <div class="text-danger">{{ $errors->first('bank') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="acc_number">  <span>*</span>Bank A/C Number : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" name="account" id="acc_number" value="{{ old('account') }}" placeholder="Bank Account Number">
                                    <div class="text-danger">{{ $errors->first('account') }}</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="date"> <span>*</span> date of birth : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="date" name="birthday_date" value="{{ old('birthday_date') }}">
                                    <div class="text-danger">{{ $errors->first('birthday_date') }}</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="email"> Email : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="nid"> <span>*</span> NID No : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="text" name="nid" value="{{ old('nid') }}" id="nid" placeholder="NID No">
                                    <div class="text-danger">{{ $errors->first('nid') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="nida"> <span>*</span> BO Acknowledgement Attachment : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="file" name="bo_acknowledgement" value="{{ old('bo_acknowledgement') }}">
                                    <div class="text-danger">{{ $errors->first('bo_acknowledgement') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label> <span>*</span> NID Attachment : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="file" name="nid_att" value="{{ old('nid_att') }}">
                                    <div class="text-danger">{{ $errors->first('nid_att') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label> <span>*</span> Bank Cheque leaf Attachment : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="file" name="bi_cheque" value="{{ old('bi_cheque') }}">
                                    <div class="text-danger">{{ $errors->first('bi_cheque') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="photo">photo : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="file" name="photo" value="{{ old('photo') }}" id="photo">
                                    <div class="text-danger">{{ $errors->first('photo') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-2 d-flex bd-highlight">
                                <div class="form-left flex-shrink-1 bd-highlight">
                                    <label for="sign"> <span>*</span>Signature : </label>
                                </div>
                                <div class="form-right w-100 bd-highlight">
                                    <input type="file" name="sign" value="{{ old('sign') }}" id="sign">
                                    <div class="text-danger">{{ $errors->first('sign') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="custom-btn">Submit</button>
                        </div>

                    </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!--    SINGLE BO OPEN END-->

            </section>

            
@section('js')


@endsection

@endsection



