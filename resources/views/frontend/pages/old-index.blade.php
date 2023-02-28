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




<!--    SLIDER SECTION-->
<section class="slider-section">
    <div class="">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                @foreach($sliders as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="slider-photo">
                </div>
                @endforeach
               

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!--   END SLIDER SECTION-->

<!--    ABOUT SECTION-->
<section class="about-section py-4">
    <div class="custom-container">
        <div class="details-box">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                    <div class="about-photo">
                        <img src="{{ asset('public/frontend') }}/images/photo/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="about-details mt-3 mt-md-0">
                        <h4>Who we are?</h4>
                        <p>
                            M & Z Securities Ltd. is one of the first full-service brokerage companies in Bangladesh. On top of our
                            expertise and achievements, we take pride in our strong commitment toward the development of the Bangladesh capital
                            markets. We have unwavering faith in the potential of Bangladesh. We also believe that an efficient, vibrant and
                            transparent capital market canstrongly contributes to the overall development of Bangladesh. Bangladesh is currently at
                            the initial stage of capital market growth, and we are committed to assist the entry of early movers into a growth-oriented,
                            vibrant, nascent emerging market.
                        </p>
                        <p>
                            M & Z Securities Ltd. has developed a disciplined approach toward providing capital market services,
                            including securities trading, wealth management and corporate advisory services. The foundation for its business is a
                            strong commitment toward investment research. It hasa research team that is unique in the Bangladesh market.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   END ABOUT SECTION-->

<section class="custom-container">
    <div class="details-box">
        <div class="row">
            <div class="col-12  col-md-6 col-lg-8">
                <div class="important-link">
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://dsebd.org/dse-mobile.php" target="_blank" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/DSE%20Mobile.png" alt="">
                                <span> DSE mobile</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://dsebd.org/assets/pdf/User_GuideDSE_Investorv1.0.pdf" target="_blank" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/DSE%20Investor.PNG" alt="">
                                <span> DSE Investor</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://dsebd.org/otc.php" target="_blank" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/OTC.png" alt="">
                                <span>OTC Market</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://dsebd.org/ipo.php" target="_blank" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/IPO.png" alt="">
                                <span>IPO</span>
                            </a>
                        </div>
                    </div>
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://dsebd.org/display_news.php" target="_blank" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/news.png" alt="DSE News">
                                <span>
                                    DSE News
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="box-box">
                        <div class="single-box row align-items-center">
                            <a href="https://mnzsecurities.com/client/login" class="content">
                                <img src="{{ asset('public/frontend') }}/images/photo/login.png" alt="Client Login">
                                <span>
                                    Client Login
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="right-notic">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center text-capitalize">notice board</h5>
                        </div>

                        <div class="card-body">
                            <marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="stop()" onmouseout="start()">
                                @foreach ($notic as $data)
                                <div class="flex">
                                    <div class="icon">
                                        <i class="fa fa-square"></i>
                                    </div>
                                    <div class="txt">
                                        <a href="{{ route('notice.view',$data->id) }}">
                                           	{{ $data->title }}
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </marquee>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--    SERVICE SECTION-->
<section class="service-section py-4">
    <div class="section-box">
        <div class="custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h5>Product & Services</h5>
                        <div class="section-line"></div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="service-details details-box">
                        <p>
                            Despite our late start, we always stay in the top 20 among 250 brokers in the market. With a young but experienced team
                            of traders, we offer the best trade execution to our clients. We offer the following services:
                        </p>
                        <div class="service-list">
                            <p><i class="fa fa-hand-o-right"></i>
                                Open Beneficiary Accounts (BO) for individuals
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Provide margin lending
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Trade for institutional investors, both domestic and international
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Provide stop-gap liquidity support, especially to foreign institutional investors
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Assist to create and follow an investment strategy
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Provide corporate finance advisory services
                            </p>
                            <p><i class="fa fa-hand-o-right"></i>
                                Facilitate investment by the Non-resident Bangladeshis (NRBs)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    SERVICE SECTION-->

<!--	blog section-->
<section class="p-blog-section py-3">
    <div class="custom-container py-4">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h5>Our Blogs</h5>
                    <div class="section-line"></div>
                </div>
            </div>
        </div>
        <div class="details-box">
            <div class="row">
                
                 @foreach($blogs as $blog)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="p-blog-box ">
                            <div class="card">
                                <div class="blog-img">
                                    <a href="{{route('blog.details',$blog->slug)}}">
                                        <img src="{{asset($blog->image)}}" class="card-img-top" alt="blog-photo">
                                    </a>
                                </div>
                                <div class="card-body custom-card">
                                    <a href="{{route('blog.details',$blog->id)}}">
                                        {{$blog->title}}</a>
                                    </a>
                                    <span>
                                    <i class="fa fa-user"></i>{{$blog->authorBlog->name}} <i class="fa fa-clock-o"></i> {{ $blog->created_at->format('M d Y') }}
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-12">
                    <div class="text-center pt-4">
                       <a href="{{route('blog.all')}}" class="custom-btn">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--	blog section end-->


<!--        COMPLAIN SECTION-->
<section class="complain-section py-4">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h5>Investor Complaint</h5>
                    <div class="section-line"></div>
                </div>
            </div>
        </div>
        <div class="details-box">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="complain-form clearfix">
                        <form action="{{ route('complain.message.store') }}" method="post">
                            @csrf
                            <div class="py-1">
                                <input type="text" name="name" value="{{ old('name') }}" id="name" placeholder="Name">
                            </div>
                            <div class="py-1">
                                <input type="text" name="mobile" value="{{ old('mobile') }}" id="mobile" placeholder="Mobile Number">
                            </div>
                            <div class="py-1">
                                <input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="Email">
                            </div>
                            <div class="py-1">
                                <input type="text" name="code" value="{{ old('code') }}" id="client-code" placeholder="Client Code">
                            </div>
                            <div class="py-1">
                                <textarea name="message" placeholder="Messages">{{ old('message') }}</textarea>
                            </div>
                            <div class="complain-button py-2">
                                <button type="submit" class="custom-btn"><i class="fa fa-paper-plane-o"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-none d-lg-block col-lg-6 col-xl-6">
                    <div class="complain-photo">
                        <img src="{{ asset('public/frontend') }}/images/photo/complaint.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--        COMPLAINT SECTION-->









@endsection
