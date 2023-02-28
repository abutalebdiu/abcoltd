@extends('frontend.layouts.app')
@section('title','DSE Mobile Application')
@section('content')
 
     <!-- AUTH SECTION-->
        <section class="mobile-input-section py-4">
            <div class="container">
                <div class="row">
                        <div class="section-title text-center">
                            <h4>DSE Mobile Application(online)</h4>
                            <div class="head-after m-auto mt-3 mb-2 clearfix">
                             <span class="line"></span>
                             <span class="circle"></span>
                             <span class="line"></span>
                         </div>
                        </div>
                </div>

                <div class="mobile-input-box my-2">
                    <form action="{{ route('mobile.application.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="name">name : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="id">client Code : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="code" value="{{ old('code') }}" id="id" placeholder="Client Code">
                                        <div class="text-danger">{{ $errors->first('code') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="id">account type : </label>
                                    </div>
                                    <div class="form-right account-type w-100 bd-highlight py-2">
                                        <span>
                                            
                                        <input type="radio" name="accounttype" value="Single" class="inline-class">
                                        Single
                                        </span>
                                        <span>
                                            
                                        <input type="radio" name="accounttype" value="joint" class="inline-class">
                                        joint
                                        </span>
                                        <span>
                                            
                                        <input type="radio" name="accounttype" value="Institution" class="inline-class">
                                        institution
                                        </span>
                                        <div class="text-danger">{{ $errors->first('accounttype') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="bo">BO ID : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="boid" value="{{ old('boid') }}" id="bo" placeholder="Enter 16 digit BO ID ">
                                        <div class="text-danger">{{ $errors->first('boid') }}</div>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="id">client type : </label>
                                    </div>
                                    <div class="form-right account-type w-100 bd-highlight py-2">
                                        <span>
                                            
                                        <input type="radio" name="clienttype" value="Profesional" class="inline-class">
                                        Profesional
                                        </span>
                                        <span>
                                            
                                        <input type="radio" name="clienttype" value="Individual" class="inline-class">
                                        individual
                                        </span>
                                        <span>
                                            
                                        <input type="radio" name="clienttype" value="Non-profesional" class="inline-class">
                                        non-profesional
                                        </span>
                                        <span>
                                            
                                        <input type="radio" name="clienttype" value="Institution" class="inline-class">
                                        institution
                                        </span>
                                        <div class="text-danger">{{ $errors->first('clienttype') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="id">domicile : </label>
                                    </div>
                                    <div class="form-right account-type w-100 bd-highlight py-2">
                                        <span>
                                            
                                        <input type="radio" name="domicile" value="Local" class="inline-class">
                                        local
                                        </span>
                                        <span class="foreign">
                                           
                                        <input type="radio" name="domicile" value="NRB or Foreigner" class="inline-class">
                                         NRB or Foreigner
                                        </span>
                                        <div class="text-danger">{{ $errors->first('domicile') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="number">mobile number : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="mobile" value="{{ old('mobile') }}" id="number" placeholder="Mobile Number">
                                        <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="email">Email : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="text" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="id">Mobile Application : </label>
                                    </div>
                                    <div class="form-right application account-type w-100 bd-highlight py-2">
                                        <span>
                                           
                                        <input type="checkbox" name="applicationfor1" value="DSE-Mobile VIP" class="inline-class">
                                         DSE-Mobile VIP
                                        </span>
                                        <span>
                                            
                                        <input type="checkbox" name="applicationfor2" value="DSE-Mobile Trader" class="inline-class">
                                         DSE-Mobile Trader
                                        </span>
                                        <span>
                                            
                                        <input type="checkbox" name="applicationfor3" value="DSE- Investor (Desktop)" class="inline-class">
                                         DSE- Investor (Desktop)
                                        </span>
                                        <span>
                                           
                                        <input type="checkbox" name="applicationfor4" value="DSE-Mobile Biz Owner" class="inline-class">
                                         DSE-Mobile Biz Owner
                                        </span>
                                        <span>
                                            
                                        <input type="checkbox" name="applicationfor5" value="10 BID and Offer" class="inline-class">
                                         10 BID and Offer
                                        </span>
                                        <div class="text-danger">{{ $errors->first('application') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="number">Applicant Photo : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="applicantphoto" id="number" placeholder="Mobile Number">
                                        <div class="text-danger">{{ $errors->first('applicantphoto') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="py-2 d-flex bd-highlight">
                                    <div class="form-left flex-shrink-1 bd-highlight">
                                        <label for="number">Applicant Signature : </label>
                                    </div>
                                    <div class="form-right w-100 bd-highlight">
                                        <input type="file" name="applicantsignature" id="number" placeholder="Mobile Number">
                                        <div class="text-danger">{{ $errors->first('applicantsignature') }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <div class="text-center">
                                    <button type="submit"  class="custom-btn">Submit</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--AUTH SECTION-->






@endsection