@extends('frontend.layouts.app')
@section('title',$photo->title)
@section('meta_tags')

        <meta name='description' itemprop='description' content='{{ $photo->details}}' />
        <meta name='keywords' content='{{ $photo->details}}' />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:type" content="{{ $photo->category->name }}" />
        <meta property="og:title" content="{{ $photo->title }}" />
        <meta property="og:description" content="{{ $photo->details}}" />
        <meta property="og:image" content="{{ asset($photo->image) }}" />
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="{{$photo->title}}" />
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
                        <li> <a href="#">photo</a></li>
 
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
                            <h1>{{ $photo->title }}</h1>
                           
                             
                        </div>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col-md-12">
                        <div class="publish-content">

                            <img src="{{ asset($photo->image) }}" alt="" width="100%">

                            {!! $photo->details !!}
                        </div>
                    </div>
                </div>

            </div>

        </div>

         <div class="col-md-4">
             <div class="popularlist categorylatest">
                <h2>More photos <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a></h2>
                    <ul>

                    @foreach($photos as $photo)
                        <li>
                             <a href="{{  route('photo.single',$photo->slug)}}">
                            <img src="{{ asset($photo->image) }}" alt="img">
                            <h3>{{ $photo->title }}</h3>
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