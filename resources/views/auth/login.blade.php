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
                        <h3>sign in</h3>
                    </div>
                    <div class="login-form">
                        <form action="{{ route('client.user.dashboard') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" value="{{ old('username') }}" class="form-control login-input" placeholder="User Name">
                                <div class="text-danger">{{ $errors->first('username') }}</div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control login-input" placeholder="Password">
                                <div class="text-danger">{{ $errors->first('password') }}</div>
                            </div>
                            <div>
                                <button class="custom-btn capital w-100 text-center" type="submit">Sign In</button>
                                 
                            </div>
                            <div class="login-forgot py-3 text-center">
                                <a href="{{ route('client.password.forgot') }}">Forgot Password ?</a>
                            </div>
                        </form>
                    </div>
                    <div class="create-one text-center pt-2">
                        <span>Don't have an account ? <a href="{{ route('client.user.register') }}">Create Account</a></span>
                    </div>
                </div>
            </div>
        </section>
        <!--AUTH SECTION-->


@endsection