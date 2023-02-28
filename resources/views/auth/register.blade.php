@extends('frontend.layouts.app')
@section('title',$websetting->homepage_title)
@section('meta_tags')

        <meta name='description' itemprop='description' content='{{ $websetting->meta_description}}' />
        <meta name='keywords' content='{{ $websetting->meta_tags }}' />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="{{ $websetting->meta_tags }}" />
        <meta property="og:title" content="{{ $websetting->homepage_title }}" />
        <meta property="og:description" content="{{strip_tags($websetting->meta_description)}}" />
        <meta property="og:image" content="{{ asset($websetting->logo) }}" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$websetting->homepage_title}}" />
        <meta name="twitter:site" content="{{$websetting->site_name}}" />

@endsection



@section('content')
 
     <!-- AUTH SECTION-->
        <section class="auth-section py-5">
            <div class="custom-container">
                <div class="login-box">
                    <div class="login-head">
                        <h3>sign up</h3>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('client.user.register.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control login-input" placeholder="Your Name">
                                <div class="text-danger">{{ $errors->first('name') }}</div>
                            </div>
 
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-circle-o"></i></span>
                                <input type="text" name="code" value="{{ old('code') }}" class="form-control login-input" placeholder="Client code">
                                <div class="text-danger">{{ $errors->first('code') }}</div>
                            </div>

                           <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-circle-o"></i></span>
                                <input type="text" name="boid" value="{{ old('boid') }}" class="form-control login-input" placeholder="BOID">
                                <div class="text-danger">{{ $errors->first('boid') }}</div>
                            </div>
                           
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-volume-control-phone"></i></span>
                                <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control login-input" placeholder="Mobile">
                                <div class="text-danger">{{ $errors->first('mobile') }}</div>
                            </div>
                             <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-envelope"></i></span>
                                <input type="email"  name="email" value="{{ old('email') }}" class="form-control login-input" placeholder="Email">
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control login-input" placeholder="Password">
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            </div>

                            
                            <div class="mb-3">
                                 <button class="btn btn-primary"> <i class="fa fa-check"></i> Submit</button>
                            </div>
                            
<!--
                            <div class="login-forgot py-3 text-center">
                                <a href="">Forgot Password ?</a>
                            </div>
-->
                        </form>
                    </div>
                    <div class="create-one text-center pt-2">
                        <span>Already have an account ? <a href="{{ route('client.user.login') }}">Sign In</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!--AUTH SECTION-->




@endsection
