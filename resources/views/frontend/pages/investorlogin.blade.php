@extends('frontend.layouts.app')
@section('title','Online Investor Trading')

@section('content')
`
<!--   CONTACT SECTION-->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4>DSE Investor Login</h4>
                    <div class="head-after m-auto mt-3 mb-2 clearfix">
                        <span class="line"></span>
                        <span class="circle"></span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <iframe src="https://investor-sd.dsetrade.com/cstfwsrv2012/html/index_invest.aspx" frameborder="0" style="width : 100%; min-height : 800px"></iframe>
    </div>


</section>
<!--    END CONTACT SECTION-->





@endsection
