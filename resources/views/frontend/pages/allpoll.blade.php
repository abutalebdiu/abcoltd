@extends('frontend.layouts.app')
@section('title',$websetting->homepage_title)

@section('content')


 
<div class="breadgarm-section small-padding">
    <div class="container">
        <div class="row">
             
            <div class="col-md-12">
                <div class="breadgam">
                    <ul>
                        <li><a href="#"><i class="fa fa-home"></i></a></li>
                        <li>/</li>
                        <li>Poll</li>
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
        <div class="col-md-8 ">


            @foreach($allpoll as $poll)
            <div class="pools-box bg-white mt-3">
                    <div class="pools-question">
                        <p>
                            Question: {{ $poll->title }}
                        </p>
                    </div>

                    <div class="pools-date">
                        <p>
                            Poll Date [ {{ $poll->end_date }} ]
                        </p>
                    </div>

                    <div class="pools-total">
                        <p>
                            Total Vote - {{ $poll->pollawnser->count() }}
                        </p>
                    </div>

                    <div class="pools-option">
                        @foreach($poll->pollvalue as $value)
                        <p>{{ $value->name }} - {{ $count = App\Model\PollAwnser::where('answer',$value->name)->count() }}</p>
                        @endforeach
  
                    </div>
                </div>
            @endforeach
               




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