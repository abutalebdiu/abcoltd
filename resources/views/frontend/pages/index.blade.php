@extends('frontend.layouts.app')
@section('title', $websetting->homepage_title)
@section('meta_tags')

    <meta name='description' itemprop='description' content='{{ $websetting->meta_description }}' />
    <meta name='keywords' content='{{ $websetting->meta_tags }}' />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="{{ $websetting->meta_tags }}" />
    <meta property="og:title" content="{{ $websetting->homepage_title }}" />
    <meta property="og:description" content="{{ strip_tags($websetting->meta_description) }}" />
    <meta property="og:image" content="{{ asset($websetting->logo) }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $websetting->homepage_title }}" />
    <meta name="twitter:site" content="{{ $websetting->site_name }}" />

@endsection

@section('content')


    <!--    SLIDER SECTION-->
    <section class="slider-section">
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    @foreach ($sliders as $key => $slider)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="slider-photo">
                            <div class="carousel-caption custom d-none d-md-block">
                                {{-- <h1>Lorem ipsum dolor sit amet consectetur.</h1>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, iste exercitationem omnis ad molestiae tempore mollitia quod doloremque. Eligendi, laudantium.</h6> --}}
                                <a href="{{ route('boopening.single') }}"
                                    class="custom-btn animate__animated animate__backInUp" style="margin-right:20px;">Open a
                                    BO Account
                                </a>
                                <a href="{{ route('investorlogin') }}"
                                    class="custom-btn animate__animated animate__backInUp"> DSE Investor Login
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon custom" aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon custom" aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!--   END SLIDER SECTION-->



    <!--    SERVICE SECTION-->
    <section class="service-section py-5">
        <div class="container">
            <div class="section-title text-center pb-3">
                <h4>Products And Services</h4>
                <div class="head-after m-auto mt-3 mb-2 clearfix">
                    <span class="line"></span>
                    <span class="circle"></span>
                    <span class="line"></span>
                </div>
            </div>
            <div class="service-content pt-2">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>DSE INFO APP</h6>
                            <center>
                                <img src="{{ asset('/images/photo/cdbl.jpg') }}" alt="wheel chair">
                            </center>

                            <p>
                                We provide complete custody services, including the opening and maintenance of BO accounts,
                                re-materialization and de-materilization of instruments, and the pledgeing - unpledging
                                through CDBL.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>DSE MOBILE APP</h6>
                            <center>
                                <img src="{{ asset('/images/photo/apps.png') }}" alt="wheel chair">
                            </center>
                            <p>
                                We have made every effort to develop a strong trading infrastructure, eager to become one of
                                the best brokerage firm in the country near future.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>DSE BROWSER TRADE</h6>
                            <center>
                                <img src="{{ asset('/images/photo/client.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                We focus on providing the highest levels of convenience and reliability in your business
                                transactions. We work with our customers to fully understand their needs. We always provide
                                our customers with professional advice and execute our client's order's quickly and
                                accurately. We will provide support as needed to ensure overall satisfaction.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>SHARE TRADING</h6>
                            <center>
                                <img src="{{ asset('/images/photo/cdbl.jpg') }}" alt="wheel chair">
                            </center>

                            <p>
                                We provide complete custody services, including the opening and maintenance of BO accounts,
                                re-materialization and de-materilization of instruments, and the pledgeing - unpledging
                                through CDBL.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>IPO APPLICATION</h6>
                            <center>
                                <img src="{{ asset('images/photo/apps.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                We have made every effort to develop a strong trading infrastructure, eager to become one of
                                the best brokerage firm in the country near future.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>YOUR ACCOUNT</h6>
                            <center>
                                <img src="{{ asset('/images/photo/client.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                We focus on providing the highest levels of convenience and reliability in your business
                                transactions. We work with our customers to fully understand their needs. We always provide
                                our customers with professional advice and execute our client's order's quickly and
                                accurately. We will provide support as needed to ensure overall satisfaction.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>MONEY DEPOSIT</h6>
                            <center>
                                <img src="{{ asset('/images/photo/ipo.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                Deposit from any Bank Account, bkash, Nagad directly into your Bo Account.
                            </p>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>MONEY WITHDRAW</h6>
                            <center>
                                <img src="{{ asset('images/photo/OnlineTrading.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                Buy and Sell shares through us over telephone, mail or visiting any of our offices.

                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>YEARLY TAX REPORT</h6>
                            <center>
                                <img src="{{ asset('/images/photo/margin.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                Withdraw your funds from the convenience of your home through the approved Bangladesh
                                Electronic Fund Transfer Network (BEFTN).
                            </p>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>DAILY EMAIL</h6>
                            <center>
                                <img src="{{ asset('images/photo/text.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                Easily get your yearly tax report of your investment.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>HELPFUL STAFF</h6>
                            <center>
                                <img src="{{ asset('images/photo/online-ipo.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                We manage IPO application on behalf of our clients, they only need to notify us for any
                                upcoming IPO they want to apply for and we take care of the rest.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                        <div class="service-box">
                            <h6>CUSTOMER FEEDBACK</h6>
                            <center>
                                <img src="{{ asset('images/photo/online-ipo.png') }}" alt="wheel chair">
                            </center>

                            <p>
                                We manage IPO application on behalf of our clients, they only need to notify us for any
                                upcoming IPO they want to apply for and we take care of the rest.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE SECTION END -->


    <!-- SERVICE SECTION -->
    <section class="p-blog-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center pb-4">
                        <h4>Our Blogs</h4>
                        <div class="head-after m-auto mt-3 mb-2 clearfix">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details-box">
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="p-blog-box ">
                                <div class="card">
                                    <div class="blog-img">
                                        <a href="{{ route('blog.details', $blog->slug) }}">
                                            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="blog-photo">
                                        </a>
                                    </div>
                                    <div class="card-body custom-card">
                                        <a href="{{ route('blog.details', $blog->id) }}">
                                            {{ $blog->title }}</a>
                                        </a>
                                        <span>
                                            <i class="fa fa-user"></i>{{ $blog->authorBlog->name }} <i
                                                class="fa fa-clock-o"></i> {{ $blog->created_at->format('M d Y') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICE SECTION END -->

    <section class="footer-top py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-history in-icon-wrap"></i>
                        <span>25 years of Excellence</span>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-trophy in-icon-wrap"></i>
                        <span>15+ Global Awards</span>
                    </div>
                </div>
                <div class="col-12 col-lg-4 pb-3 pb-lg-0">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone in-icon-wrap"></i>
                        <span>24/5 Customer Support</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
