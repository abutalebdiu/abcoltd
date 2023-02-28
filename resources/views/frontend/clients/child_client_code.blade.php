@extends('frontend.layouts.app')
@section('title','Client Dashboard')
@section('content')

	<section class="user-dashboard">
        <div class="container">
           <div class="row">


               @include('frontend.clients.dashboardmenu')

               <div class="col-12 col-md-9 ">
                <div class="dashboard-main w-100 bd-highlight py-3 mt-3 ">
                    <div class="dr-head  bg-white">
                        <h6>Dashboard</h6>
                        <hr>
                    </div>
                    <div class="hr-body  bg-white">
                        
                        
                          <div style="border: 1px solid #ccc; padding: 15px; background: #eef4f5;">
                        <div>
                            <h5 class="pb-2 mb-4" style="border-bottom: 1px solid #00969D;  color: #00969D;">Add child code under this account</h5>
                        </div>
                        <form action="{{ route('child.ipo.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="code">Client Code : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="client_code" class="form-control custom-input" value="{{ old('client_code') }}" id="code" placeholder="Client Code">
                                            <div class="text-danger">{{ $errors->first('client_code') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="name">Full Name : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="name" class="form-control  custom-input" value="{{ old('name') }}" id="name" placeholder="Full name">
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="bo">BO ID : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="boid" class="form-control  custom-input" value="{{ old('boid') }}" id="bo" placeholder="BOID">
                                            <div class="text-danger">{{ $errors->first('boid') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="numebr">Mobile : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="mobile" class="form-control  custom-input" value="{{ old('mobile') }}" id="number" placeholder="Mobile Number">
                                            <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-right" style="text-align: right">
                                    <button type="submit" class="custom-btn">Add</button>
                                </div>
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