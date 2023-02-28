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




         

    <!--    SINGLE BO OPEN-->
    <section class="join-section clearfix py-5">
        <div class="custom-container">



            <div class="join-form-box clearfix">
                <form class="seller-step-form" action="{{ route('boopening.single.store') }}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="step step-1 active">
                        <div class="icon-box">
                            <span class="active-sell">
                                <i class="fa fa-user"></i>
                                Parsonal Information
                            </span>
                            <span class="">
                                <i class="fa fa-user"></i>
                                contact Information
                            </span>
                            <span class="">
                                <i class="fa fa-university"></i>
                                Bank Infomation
                            </span>
                            <span class="">
                                <i class="fa fa-binoculars"></i>
                                Nomineee Informatio
                            </span>
                            <span class="">
                                <i class="fa fa-user-plus"></i>
                                Joint Holder
                            </span>
                        </div>
                        <div class="row mobile-input-box">
                            <div class="col-12">
                                <h5 class="bo-border">
                                    parsonal information
                                </h5>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="name">Client name : </label>
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
                                        <label for="father">father name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="father" value="{{ old('father') }}" placeholder="Father Name">
                                        <div class="text-danger">{{ $errors->first('father') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="mother">mother name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="mother" id="mother" value="{{ old('mother') }}" placeholder="Mother Name">
                                        <div class="text-danger">{{ $errors->first('mother') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="gender">gender : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <select name="sex" id="gender">
                                            <option value="" selected="">--Select--</option>
                                            <option {{ old('sex') == 1 ? 'selected' : '' }} value="1">Male</option>
                                            <option {{ old('sex') ==2 ? 'selected' : '' }} value="2">Female</option>
                                        </select>
                                        <div class="text-danger">{{ $errors->first('sex') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="date"> date of birth : </label>
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
                                        <label for="occupation"> Occupation: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="profession" id="occupation" placeholder="Occupation" value="{{ old('profession') }}">
                                        <div class="text-danger">{{ $errors->first('profession') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="address"> Address: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="address" value="{{ old('address') }}" placeholder="Your Address">
                                        <div class="text-danger">{{ $errors->first('address') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="city"> City: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="city" value="{{ old('city') }}" id="city" placeholder="Your City">
                                        <div class="text-danger">{{ $errors->first('city') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="postal"> Postal Code: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="zip_code" value="{{ old('zip_code') }}" placeholder="Postal Code">
                                        <div class="text-danger">{{ $errors->first('zip_code') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="division"> Division : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="division" value="{{ old('division') }}" placeholder="Division">
                                        <div class="text-danger">{{ $errors->first('division') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="country"> Country : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="country" value="{{ old('country') }}" placeholder="Country">
                                        <div class="text-danger">{{ $errors->first('country') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="mobile"> Mobile Number : </label>
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
                                        <label for="nid"> NID No : </label>
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
                                        <label for="nida"> NID Attachment : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="nid_attachment" value="{{ old('nid_attachment') }}" id="nida">
                                        <div class="text-danger">{{ $errors->first('nid_attachment') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="photo">User photo : </label>
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
                                        <label for="sign">Signature : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="sign" value="{{ old('sign') }}" id="sign">
                                        <div class="text-danger">{{ $errors->first('sign') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="next-btn">Next</button>
                    </div>



                    <div class="step step-2">
                        <div class="icon-box">
                            <span class="active-sell">
                                <i class="fa fa-user"></i>
                                Parsonal Infomation
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-university"></i>
                                Bank Infomation
                            </span>
                            <span class="">
                                <i class="fa fa-binoculars"></i>
                                Nomineee Infomatio
                            </span>
                            <span class="">
                                <i class="fa fa-user-plus"></i>
                                Joint Holder
                            </span>
                        </div>

                        <div class="">
                            <div class="col-12">
                                <h5 class="bo-border">
                                    bank infomation
                                </h5>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="bank">bank name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="bank" value="{{ old('bank') }}" id="bank" placeholder="Bank Name">
                                        <div class="text-danger">{{ $errors->first('bank') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="branch">branch name: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="branch" id="branch" value="{{ old('branch') }}" placeholder="Branch Name">
                                        <div class="text-danger">{{ $errors->first('branch') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="account">bank account no : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="account" value="{{ old('account') }}" id="account" placeholder="Bank Cccount Number">
                                        <div class="text-danger">{{ $errors->first('account') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="routing">routing number :</label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="routing" value="{{ old('routing') }}" id="routing" placeholder="Routing Number">
                                        <div class="text-danger">{{ $errors->first('routing') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="cheque">cheque leaf : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="bi_cheque" value="{{ old('bi_cheque') }}" id="cheque">
                                        <div class="text-danger">{{ $errors->first('bi_cheque') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="p-btn">
                                <button type="button" class="previous-btn">Prev</button>
                            </div>
                            <div class="n-btn">
                                <button type="button" class="next-btn">Next</button>
                            </div>
                        </div>
                    </div>




                    <div class="step step-3">
                        <div class="icon-box">
                            <span class="active-sell">
                                <i class="fa fa-user"></i>
                                Parsonal Infomation
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-university"></i>
                                Bank Infomation
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-binoculars"></i>
                                Nomineee Infomatio
                            </span>
                            <span class="">
                                <i class="fa fa-user-plus"></i>
                                Joint Holder
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h5 class="bo-border">
                                    nomineee infomation
                                </h5>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nomineee ">nomineee name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="n_name" value="{{ old('n_name') }}" id="nomineee " placeholder="Nomineee  Name">
                                        <div class="text-danger">{{ $errors->first('n_name') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="relationship">relationship: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="relation" value="{{ old('relation') }}" id="relationship" placeholder="Relationship">
                                        <div class="text-danger">{{ $errors->first('relation') }}</div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="percentage">percentage : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="percentage" value="{{ old('percentage') }}" id="percentage" placeholder="Percentage">
                                        <div class="text-danger">{{ $errors->first('percentage') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="mobile"> mobile number :</label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="n_mobile" value="{{ old('n_mobile') }}" id="mobile" placeholder="Nomineee mobile Number">
                                        <div class="text-danger">{{ $errors->first('n_mobile') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nnid">Nominee NID No : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="n_nid" value="{{ old('n_nid') }}" id="nnid" placeholder="nominee NID No">
                                        <div class="text-danger">{{ $errors->first('n_nid') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nna">NID Attachment : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input name="n_nid_att" value="{{ old('n_nid_att') }}" type="file" id="nna">
                                        <div class="text-danger">{{ $errors->first('n_nid_att') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nnid">Nomineee photo : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="n_photo" value="{{ old('n_photo') }}" id="nnid">
                                        <div class="text-danger">{{ $errors->first('n_photo') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nnid">Nomineee signature : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="n_sign" id="nnid">
                                        <div class="text-danger">{{ $errors->first('n_sign') }}</div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="">
                            <div class="p-btn">
                                <button type="button" class="previous-btn">Prev</button>
                            </div>
                            <div class="n-btn">
                                <button type="button" class="next-btn">Next</button>
                            </div>
                        </div>

                    </div>

                    <div class="step step-4">
                        <div class="icon-box">
                            <span class="active-sell">
                                <i class="fa fa-user"></i>
                                Parsonal Infomation
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-university"></i>
                                Bank Infomation
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-binoculars"></i>
                                Nomineee Infomatio
                            </span>
                            <span class="active-sell">
                                <i class="fa fa-user-plus"></i>
                                Joint Holder
                            </span>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h5 class="bo-border">
                                    joint holder
                                </h5>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="fullname">full name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="jh_name" value="{{ old('jh_name') }}" id="fullname" placeholder="Full Name">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="gender">Gender: </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <select name="jh_sex" id="gender">
                                            <option value="" selected="">--select--</option>
                                            <option {{ old('jh_sex') == 1 ? 'selected' : '' }} value="1">Male</option>
                                            <option {{ old('jh_sex') == 2 ? 'selected' : '' }} value="2">Female</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="mobilen">mobile number : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="jh_mobile" value="{{ old('jh_mobile') }}" id="mobilen" placeholder="Mobile Number">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="jnid">NID No : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="jh_nid" value="{{ old('jh_nid') }}" id="jnid" placeholder="NID No">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="nidat"> NID Attachment : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input name="jh_nid_att" value="{{ old('jh_nid_att') }}" type="file" id="nidat">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="jphoto"> photo : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="jh_photo" id="jphoto">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="jsign"> signature : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="jh_sign" id="jsign">

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="">
                            <div class="p-btn">
                                <button type="button" class="previous-btn">Prev</button>
                            </div>
                            <div class="n-btn">
                                <button type="submit" class="next-btn">Submit</button>
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
    const steps = Array.from(document.querySelectorAll("form .step"));
    const nextBtn = document.querySelectorAll("form .next-btn");
    const prevBtn = document.querySelectorAll("form .previous-btn");
    const form = document.querySelector("form");

    nextBtn.forEach((button) => {
        button.addEventListener("click", () => {
            changeStep("next");
        });
    });
    prevBtn.forEach((button) => {
        button.addEventListener("click", () => {
            changeStep("prev");
        });
    });

    form.addEventListener("submit", (e) => {
        e.preventDefault();
        const inputs = [];
        form.querySelectorAll("input").forEach((input) => {
            const {
                name,
                value
            } = input;
            inputs.push({
                name,
                value
            });
        });
        console.log(inputs);
        form.reset();
    });

    function changeStep(btn) {
        let index = 0;
        const active = document.querySelector(".active");
        index = steps.indexOf(active);
        steps[index].classList.remove("active");
        if (btn === "next") {
            index++;
        } else if (btn === "prev") {
            index--;
        }
        steps[index].classList.add("active");
    }

@endsection

@endsection



