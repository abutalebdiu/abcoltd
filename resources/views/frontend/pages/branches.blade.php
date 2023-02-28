@extends('frontend.layouts.app')
@section('title','Branches')
@section('content')

      <!--  BRANCH-->
        <section class="branch-section py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h4>Our Branches</h4>
                            <div class="head-after m-auto mt-3 mb-2 clearfix">
                                <span class="line"></span>
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="branch-logo">
                            <img src="{{ asset('public/frontend') }}/images/logo/logo.png" alt="logo">
                            <span>Rni securities LTD.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="branch-box">
                            <h6>Head Office</h6>
                             
                            <p>Suit # 728, 6th Floor,</p>
                            <p>9/E, Motijheel C/A,</p>
                            <P>Dhaka - 1000</P>
                            <p>phone : +8801928-021321, +8802-223383985 </p>
                            <p class="email">Email :  rnisecurities@yahoo.com</p>

                            <div class="mt-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3652.6903116499434!2d90.4199273162481!3d23.722750789314702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRNI%20SECURITIES%20LTD.!5e0!3m2!1sen!2sbd!4v1629052562588!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="branch-box">
                             
                            <h6>Corporate Office:</h6>
                            <p>City Center, Level </p>
                            <p>#29, 90/1, Motijheel C/A</p>
                            <p>Dhaka - 1000</p>
                            <p>phone : +8801912-372605,+8802-223356183</p>
                            <p class="email">Email : rnisecurities@yahoo.com</p>
                            <div class="mt-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.281926516648!2d90.41725954857473!3d23.729156774488697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9d5ba078b31%3A0x4873c60ed42566c9!2sRNI%20SECURITIES%20LTD.!5e0!3m2!1sen!2sbd!4v1629052661169!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="branch-box">
                             
                            <h6>Branch Office:</h6>
                            <p>Room # 305 (2nd Floor) Post </p>
                            <p>office Mosque Market, Iqbal</p>
                            <p>Road Mohammadpur, Dhaka - 1207</p>
                            <p>phone : +880 1715-909832, +8801915-790031</p>
                            <p class="email">Email :  rnisecurities@yahoo.com</p>
                            <div class="mt-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.22688891192385!2d90.3676000310524!3d23.76056226703585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf57ad703ff9%3A0x4fdf0f7ee8c263fb!2sMasjid%20Market%20Complex!5e0!3m2!1sen!2sbd!4v1629053311767!5m2!1sen!2sbd" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </section>
        
        <!-- END BRANCH-->
        

 
@endsection