@extends('frontend.layouts.app')
@section('title','Video Gallery')

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
                        <li>Video</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadgarm-section -->

<!-- top-category-section -->

<div class="top-category-section">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="top-categorynew">
                <div class="row">

                    @if($galleries)
                    
                    
                    @if($galleries->video_type==1)
                    <div class="col-sm-6 col-md-6">
                        <div class="category-details">
                            <a href="{{ route('video.single',$galleries->slug) }}">{{ $galleries->title }}</a>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="category-images videobox">
                            <a href="{{ route('video.single',$galleries->slug) }}">
                                  <iframe src="https://www.facebook.com/plugins/video.php?href={{ $galleries->youtube_code }}" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                            {{-- <img src="{{ asset($galleries->image) }}" alt="img"> --}}
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    @elseif($galleries->video_type==2)
                    <div class="col-sm-6 col-md-6">
                        <div class="category-details">
                            <a href="{{ route('video.single',$galleries->slug) }}">{{ $galleries->title }}</a>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="category-images videobox">
                            <a href="{{ route('video.single',$galleries->slug) }}">
                                 <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $galleries->youtube_code }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                {{-- <img src="{{ asset($galleries->image) }}" alt="img"> --}}
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                    @endif
                    @endif

                </div>
            </div>

            <div class="row">


                @foreach($galleriesall as $video)
                
                
                @if($video->video_type==1)
                 <div class="col-sm-4 col-md-4">
                    <div class="single-categorynews smvideobox">
                        <a href="{{ route('video.single',$video->slug) }}">
                             <iframe src="https://www.facebook.com/plugins/video.php?href={{ $video->youtube_code }}&show_text=false" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                             <h4>{{ $video->title }}</h4>
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                @elseif($video->video_type==2)
                <div class="col-sm-4 col-md-4">
                    <div class="single-categorynews smvideobox">
                        <a href="{{ route('video.single',$video->slug) }}">
                            <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $video->youtube_code }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <h4>{{ $video->title }}</h4>
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                
               
            </div>

        </div>

         <div class="col-md-4">
             <div class="popularlist categorylatest">
                <h2>Latest <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></h2>
                    <ul>

                        @foreach($latestsnews as $news)
                        <li>
                            <a href="{{  route('detail.news',['category'=>$news->category?$news->category->slug:'','slug'=>$news->slug])}}"> 
                            <img src="{{ asset($news->image) }}" alt="img">
                            <h3>{{ $news->title }}</h3>
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




@endsection