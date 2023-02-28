@extends('frontend.layouts.app')
@section('title','Gallery')
@section('content')

 <section class="gallery-section py-4">
            <div class="container">
                <div class="gallery-image gallery">
                   <div class="row">
                       <div class="col-12">
                           <div class="section-title text-center">
                               <h4>gallery</h4>
                               <div class="head-after m-auto mt-3 mb-2 clearfix">
                                <span class="line"></span>
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                           </div>
                       </div>
                   </div>
                    <div class="row py-5">

                       @foreach($gallery as $data)

                           <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 border">
                                <a href="{{ $data->image }}">
                                    <img src="{{ $data->image }}" alt="">
                                </a>
                           </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>



@endsection
