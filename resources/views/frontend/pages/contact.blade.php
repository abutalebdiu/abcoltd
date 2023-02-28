@extends('frontend.layouts.app')
@section('title','Contact')

@section('content')
   `
        <!--   CONTACT SECTION-->
        <section class="contact-section">
            <div class="container">
                <div class="contact-section-box">
                    <div class="row">
                        <div class="col-12 pb-4">
                            <div class="section-head">
                                <h4>contact us</h4>
                                <div class="head-after m-auto mt-3 mb-2 clearfix">
                                    <span class="line"></span>
                                    <span class="circle"></span>
                                    <span class="line"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="form-section py-1">
                                <form action="{{ route('message.contact.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-title py-3">
                                                <span>send us a message</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-12">
                                            <div class="mb-3">
                                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name">
                                                <div class="text-danger">{{ $errors->first('name') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-12">
                                            <div class="mb-3">
                                                <input type="email" name="email" value="{{ old('email') }}"  class="form-control" id="email" placeholder="Email">
                                                <div class="text-danger">{{ $errors->first('email') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-12">
                                            <div class="mb-3">
                                                <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control" id="number" placeholder="Phone Number">
                                                <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                            </div>
                                        </div>

                                         <div class="col-12 col-xl-12">
                                            <div class="mb-3">
                                                <input type="text" name="subject" value="{{ old('subject') }}"  class="form-control" id="subject" placeholder="subject">
                                                <div class="text-danger">{{ $errors->first('subject') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-xl-12">
                                            <div class="mb-3">
                                                <textarea id="message" name="message" placeholder="Your Message" class="form-control textarea">{{ old('message') }}</textarea>
                                                <div class="text-danger">{{ $errors->first('message') }}</div>
                                            </div>
                                        </div>
                                        <div class="carrer-btn col-12 mb-4">
                                            <button type="submit" class="custom-btn"><i class="fa fa-paper-plane-o"></i>Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="contact-info">
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                <b>Head Office : <br></b>Suit # 728, 6th Floor, 9/E, Motijheel C/A, Dhaka - 1000
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                rnisecuritiesltd@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                mnzsecurities@gmail.com
                                            </div>
                                        </div>
                                    </div-->
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-volume-control-phone"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">  
                                                +880-1912-372605
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                <b>Corporate Office : <br></b>City Center, Level #29, 103, Motijheel, Dhaka - 1000
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                rnisecuritiesltd@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                mnzsecurities@gmail.com
                                            </div>
                                        </div>
                                    </div-->
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-volume-control-phone"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                +880-1912-372605
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                <b>Branch Office: : <br></b>Room # 305 (2nd Floor) Post office Mosque Market, Iqubal Road Mohamadpur, Dhaka - 1207
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                rnisecuritiesltd@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                    <!--div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                mnzsecurities@gmail.com
                                            </div>
                                        </div>
                                    </div-->
                                    <div class="info-box">
                                        <div class="d-flex bd-highlight">
                                            <div class="p-2 flex-shrink-1 bd-highlight icon">
                                                <i class="fa fa-volume-control-phone"></i>
                                            </div>
                                            <div class="p-2 w-100 bd-highlight info-txt">
                                                +880-1912-372605
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-contact-icons">
                                    <p><b>Connect with us :</b>
                                        <a href="https://www.facebook.com/rnidse128" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="google-maps pb-5 bt-3">
                           <h4>our location :</h4>
                           
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2933114886033!2d90.42131188535828!3d23.722655406138504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c66736d23cf3%3A0x78701c3ab683ab6!2sStock%20Ltd.!5e0!3m2!1sen!2sbd!4v1626112726844!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    
                </div>

            </div>
        </section>
        <!--    END CONTACT SECTION-->




 
@endsection