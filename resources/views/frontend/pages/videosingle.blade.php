@extends('frontend.layouts.app')
@section('title',$video->title)
@section('meta_tags')

        <meta name='description' itemprop='description' content='{{ $video->details}}' />
        <meta name='keywords' content='{{ $video->details}}' />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="{{ $video->category->name }}" />
        <meta property="og:title" content="{{ $video->title }}" />
        <meta property="og:description" content="{{ $video->details}}" />
        <meta property="og:image" content="{{ asset($video->image) }}" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$video->title}}" />
        <link rel="canonical" href="{{url()->current()}}">

@endsection
@section('content')

 <!-- breadgarm-section -->


<div class="breadgarm-section small-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadgam">
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li>/</li>
                        <li> <a href="#">Video</a></li>
 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadgarm-section -->

<!-- top-category-section -->

<div class="news-details-section">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="newsdetails">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="details-title">
                            <h1>{{ $video->title }}</h1>
                           
                             
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="publish-content">
                        
                        @if($video->video_type==1)
                        <iframe src="https://www.facebook.com/plugins/video.php?href={{ $video->youtube_code }}&show_text=false" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                          
                        @elseif($video->video_type==2)
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $video->youtube_code }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endif
                            {!! $video->details !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>

         <div class="col-md-4">
             <div class="popularlist categorylatest">
                <h2>More Videos <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></h2>
                    <ul>

                    @foreach($videos as $video)
                        <li>
                             <a href="{{  route('video.single',$video->slug)}}">
                            <img src="{{ asset($video->image) }}" alt="img">
                            <h3>{{ $video->title }}</h3>
                            </a>
                        </li>
                    @endforeach
                       
                    </ul>
                    <div class="allbutton">
                       <a href="{{ route('archive') }}">All News</a>
                    </div>
                </div>

            
         </div>


    </div>
    </div>
</div>


<!-- top-category-section -->


<!-- comments-section -->


<div class="comments-section">
    <div class="container">
        <div class="offset-md-1 col-md-10">
            <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fa fa-plus"></i>  Comments 
                      </button>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <div class="comments-form">
                          <h3>0 Comments</h3>
                          <textarea class="form-control" cols="30" rows="10" placeholder="Add a Comments"></textarea>

                          <button class="btn btn-danger btn-sm mt-2">Submit</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- comments-section -->

 


@endsection