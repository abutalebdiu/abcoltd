<!DOCTYPE html>
<html lang="en" dir="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset($websetting->favicon) }}" type="image/gif" sizes="16x16">

    <link rel="icon" href="images/logo/invest-favicon.PNG" type="image/gif" sizes="16x16">
    <!--    BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--    GOOGLE FONT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <!--    FONT AWSOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>
    <!--    animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <!--    RESPONSIVE STYLE-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
</head>

<body>


    <!--    HEADER MIDDLE-->
    <section class="header-middle d-none d-sm-block">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6">
                    <div class="hm-left-logo">
                        <a href="{{route('frontend')}}" class="logo-link d-flex align-items-center">
                            <img src="{{ asset($websetting->logo) }}" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="hm-right-logo">
                        <h3>{{ $websetting->site_name }}</h3>
                        <span>DSE TREC# 043</span>
                        <p>{{ $websetting->state_address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    HEADER MIDDLE END-->


    <!--    HEADER SECTION-->
    <header class="header-section d-flex align-items-center">
        <div class="container">
            <div class="head-content">
                <div class="row d-flex align-items-center clearfix">
                    <div class="col-12 col-xl-2">
                        <div class="main-logo">
                            <a href="{{route('frontend')}}" class="d-sm-none logo-link">
                                <img src="{{ asset($websetting->logo) }}" alt="logo">
                                <span class="ltd">
                                    <span>DSE TREC# 043</span>
                                </span>
                            </a>
                            <div id="mobile-click">
                                <span class="menu-txt">menu</span>
                                <span class="mobile-btn d-block d-md-none" id="mobile-btn">
                                    <i class="fa fa-bars"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-none d-md-block">
                        <div class="menubar">
                            <ul>
                                <li><a href="{{route('frontend')}}">home</a></li>

                                <li class="sub-btn"><a href="javascript:void(0)"> OPEN ACCOUNT <i class="fa fa-angle-down"></i> </a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="{{ route('boopening.single') }}">Open Account (Single BO)</a></li>
                                            <li><a href="{{ route('boopening.joint') }}">Open Account (Joint BO)</a></li>
                                            <li><a href="{{ route('boopening.nrb') }}">NRB Account</a></li>
                                            <li><a href="#">Link Account</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sub-btn"><a href="javascript:void(0)"> ONLINE TRADING <i class="fa fa-angle-down"></i> </a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="#">Sign Up</a></li>
                                            <li><a href="#">DSE Android</a></li>
                                            <li><a href="#">DSE iStore</a></li>
                                            <li><a href="#">Web Browser</a></li>
                                            <li><a href="#">DSE INFO Android</a></li>
                                            <li><a href="#">DSE INFO iStore</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('ipo') }}">IPO</a></li>
                                <li><a href="{{ route('fees') }}">FEES </a></li>
                                <li><a href="{{ route('gallery') }}">gallery</a></li>
                                <li><a href="{{ route('blog.all') }}">Blog</a></li>
                                <li><a href="{{ route('careers') }}">Careers</a></li>
                                <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                                <li class="sub-btn"><a href="javascript:void(0)">MORE <i class="fa fa-angle-down"></i> </a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="#">TAKA DEPOSIT</a></li>
                                            <li><a href="#">TAKA WITHDRAW</a></li>
                                            <li><a href="#">TAX Certificate</a></li>
                                            <li><a href="#">ABOUT US</a></li>
                                            <li><a href="#">OUR Facebook</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!--    HEADER SECTION-->

    <!--        MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">

            <div class="mobile-logo">
                <a href="#">
                    <img src="{{ asset($websetting->logo) }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times"></i>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{route('frontend')}}">
                        <button class="accordion-button custom collapsed none" type="button">
                            home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="flush-collapseTwo">
                        OPEN ACCOUNT
                    </button>
                </h2>
                <div id="two" class="accordion-collapse collapse" aria-labelledby="three" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="{{ route('boopening.single') }}">Open Account (Single BO)</a></li>
                            <li><a href="{{ route('boopening.joint') }}">Open Account (Joint BO)</a></li>
                            <li><a href="#">NRB Account</a></li>
                            <li><a href="#">Link Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ONLINE TRADING
                    </button>
                </h2>
                <div id="three" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">DSE Android</a></li>
                            <li><a href="#">DSE iStore</a></li>
                            <li><a href="#">Web Browser</a></li>
                            <li><a href="#">DSE INFO Android</a></li>
                            <li><a href="#">DSE INFO iStore</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#five" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Investor Corner
                    </button>
                </h2>
                <div id="five" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                             <li><a href="{{ route('balance.inquery.form') }}">Balance Inquery</a></li>
                            <li><a href="{{ route('deposit.show') }}">Deposit</a></li>
                            <li><a href="{{ route('withdraw.request.show') }}">Withdrawal Request</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ipo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        IPO
                    </button>
                </h2>
                <div id="ipo" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="{{ route('ipo') }}">Latest IPO</a></li>
                            <li><a href="{{ route('apply.ipo') }}">Apply IPO</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('ipo') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Gallery
                        </button>
                    </a>
                </h2>
            </div>
             <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('blog.all') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Blog
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('careers') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Careers
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="#">
                        <button class="accordion-button custom collapsed none" type="button">
                            CONTACT US
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button custom collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="false" aria-controls="flush-collapseTwo">
                        ONLINE TRADING
                    </button>
                </h2>
                <div id="three" class="accordion-collapse collapse" aria-labelledby="two" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body custom">
                        <ul>
                            <li><a href="#">Sign Up</a></li>
                            <li><a href="#">DSE Android</a></li>
                            <li><a href="#">DSE iStore</a></li>
                            <li><a href="#">Web Browser</a></li>
                            <li><a href="#">DSE INFO Android</a></li>
                            <li><a href="#">DSE INFO iStore</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--   END MOBILE MENU-->

    @yield('content')

    <!--    FOOTER SECTION -->
    <footer class="pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer-box">
                        <div class="footer-head">
                            <h5>ABOUT COMPANY</h5>
                        </div>
                        <div class="footer-content">
                            <a href="{{ route('companyprofile') }}">
                                <i class="fa fa-angle-right"></i>
                                About {{  $websetting->site_name }}
                            </a>
                            <a href="{{ route('branches') }}">
                                <i class="fa fa-angle-right"></i>
                                Branch Information
                            </a>
                            <a href="{{ route('companyprofile') }}">
                                <i class="fa fa-angle-right"></i>
                                Company Profile
                            </a>
                            <a href="{{ route('management') }}">
                                <i class="fa fa-angle-right"></i>
                                Board of Directors
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer-box">
                        <div class="footer-head">
                            <h5>IMPORTANT LINKS</h5>
                        </div>
                        <div class="footer-content">
                            <a href="https://dsebd.org/" target="_blank">
                                <i class="fa fa-angle-right"></i>
                                Dhaka Stock Exchange
                            </a>
                            <a href="https://www.cse.com.bd/" target="_blank">
                                <i class="fa fa-angle-right"></i>
                                Chittagong Stock Exchange
                            </a>
                            <a href="https://www.bb.org.bd/en/index.php" target="_blank">
                                <i class="fa fa-angle-right"></i>
                                Bangladesh Bank
                            </a>
                            <a href="https://www.cdbl.com.bd/" target="_blank">
                                <i class="fa fa-angle-right"></i>
                                CDBL
                            </a>
                            <a href="https://www.sec.gov.bd/" target="_blank">
                                <i class="fa fa-angle-right"></i>
                                BSEC
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer-box">
                        <div class="footer-head">
                            <h5>Quick Link</h5>
                        </div>
                        <div class="footer-content">
                            <a href="www.sec.gov.bd">
                                <i class="fa fa-angle-right"></i>
                                BSEC
                            </a>
                            <a href="www.dsebd.org">
                                <i class="fa fa-angle-right"></i>
                                DSE
                            </a>
                            <a href="www.essbangladesh.com">
                                <i class="fa fa-angle-right"></i>
                                ESS
                            </a>
                            <a href="www.bfiu.org.bd">
                                <i class="fa fa-angle-right"></i>
                                BFIU
                            </a>
                            <a href="http://www.finlitbd.com/bn/index.php">
                                <i class="fa fa-angle-right"></i>
                                Financial Literacy Program
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer-box">
                        <div class="footer-head">
                            <h5>OUR ADDRESS</h5>
                        </div>
                        <div class="footer-content-address">
                            <div class="address-box d-flex bd-highlight">
                                <div class="address-icon flex-shrink-1 bd-highlight">
                                    <i class="fa fa-university"></i>
                                </div>

                                <div class="address-details w-100 bd-highlight">
                                    <span>Corporate Office:</span>
                                </div>
                            </div>

                            <div class="address-box d-flex bd-highlight">
                                <div class="address-icon flex-shrink-1 bd-highlight">
                                    <i class="fa fa-home"></i>
                                </div>

                                <div class="address-details w-100 bd-highlight">
                                    <span>{{ $websetting->state_address  }}</span>
                                </div>
                            </div>

                            <div class="address-box d-flex bd-highlight">
                                <div class="address-icon flex-shrink-1 bd-highlight">
                                    <i class="fa fa-phone"></i>
                                </div>

                                <div class="address-details w-100 bd-highlight">
                                    <span>{{ $websetting->phone  }}</span>
                                </div>
                            </div>

                            <div class="address-box d-flex bd-highlight">
                                <div class="address-icon flex-shrink-1 bd-highlight">
                                    <i class="fa fa-envelope-o"></i>
                                </div>

                                <div class="address-details w-100 bd-highlight">
                                    <span class="email"> {{ $websetting->email  }} </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--    FOOTER SECTION END-->

    <!--        COPYRIGHT SECTION-->
    <div class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="copyright-content">
                        <p>Copyright  &copy; {{  $websetting->site_name }} .</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="copyright-content">
                        <p style="text-align:right">Design & Developed By <a href="https://www.softech.com.bd/">Softech BD LTD</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--      END  COPYRIGHT SECTION-->




    <!--    JQUERY-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--    BOOSTRAP-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
    <!-- toster & sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('frontend') }}/js/sweetalert2@9.js"></script>

    <script>
        @if(Session::has('message'))
        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

    @yield('js')
</body>
</html>
