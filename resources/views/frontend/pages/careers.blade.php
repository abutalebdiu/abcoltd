@extends('frontend.layouts.app')
@section('title','Careers')
@section('content')

 <section class="carrer-section py-3">
            <div class="container">
                <div class="carrer-box">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-7 col-xl-7">
                          
                            <div class="carrer-form">
                                    <div class="text-heading  ">
                                        <h4>Send Your CV</h4>
                                        <hr>
                                    </div>  

                                <form action="{{ route('career.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control custom-input" placeholder="Name">
                                        <div class="text-danger"> {{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa fa-volume-control-phone"></i></span>
                                        <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control custom-input" placeholder="Mobile Number">
                                         <div class="text-danger"> {{ $errors->first('mobile') }}</div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"> <i class="fa fa-envelope-o"></i></span>
                                        <input type="email" name="email" value="{{ old('email') }}"  class="form-control custom-input" placeholder="Email">
                                         <div class="text-danger"> {{ $errors->first('email') }}</div>
                                    </div>
                                    <div class="mb-3">
                                         <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">Select</label>
                                          </div>
                                          <select name="post_type" class="custom-select apply_post" id="inputGroupSelect01">
                                            <option value="" class="d-none" selected>Apply for the post</option>
                                            <option value="Authorized Trader">Authorized Trader</option>
                                            <option value="Accountant">Accountant</option>
                                          </select>
                                           <div class="text-danger"> {{ $errors->first('post_type') }}</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cv" class="form-label"><b>Attach Your CV :</b> </label>
                                        <input type="file" name="cv_file" class="form-control custom-input" id="cv">
                                         <div class="text-danger"> {{ $errors->first('cv_file') }}</div>
                                    </div>
                                    <div class="carrer-btn">
                                        <button type="submit" class="custom-btn" ><i class="fa fa-paper-plane-o"></i>Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-xl-5">

                            <div class="contact-info-box">
                                <div class="job-here">
                                    <h5>available jobs </h5>
                                </div>
                                <div class="info-box">

                                    @foreach($jobs as $job)
                                    <div class="d-flex bd-highlight">
                                        <div class="p-2 flex-shrink-1 bd-highlight icon">
                                            <i class="fa fa-hand-o-right"></i>
                                        </div>
                                        <div class="job-single p-2 w-100 bd-highlight info-txt">
                                            <h6>Post : {{ $job->title }}</h6>
                                            <p>Qualification : {{ $job->qualification }}</p>
                                            <p>experiance : {{ $job->experice }}</p>
                                            <p>location : {{ $job->location }}</p>
                                            <p>Salary : {{ $job->salary }} TK</p>
                                            <p>Deadline : {{ $job->dead_line }}</p>
                                            <p>vacancy : {{ $job->vacancy }}</p>
                                        </div>
                                    </div>
                                    @endforeach


                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


@endsection