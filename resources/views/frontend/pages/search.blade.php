@extends('frontend.layouts.app')
@section('title','Achive')

@section('content')

 

  <section class="archive-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Archive</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-8 col-md-8">
                    <div class="archive-left">
                        <div class="archive-search py-1">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 col-lg-10">
                                        <input type="text" name="search" class="form-control" value="@if(isset($search)) {{ $search }} @endif" placeholder="search">
                                    </div>
                                    <div class="col-12 col-lg-2">
                                        <button type="submit" class="btn btn-primary d-block"><i class="fa fa-search mr-3"></i>search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="archive-old-news py-5">
                            <div class="row">

                                @if($searchnews)
                                
                                	@forelse($searchnews as $news)
                                	 <div class="col-12 col-lg-6">
	                                    <div class="news-box">
	                                        <h6>
	                                          <a href="{{  route('detail.news',['category'=>$news->category?$news->category->slug:'no','slug'=>$news->slug])}}">
	                                                {{ $news->title }}
	                                            </a>
	                                        </h6>
	                                        <span><i class="fa fa-clock-o mr-2" aria-hidden="true"></i> 

	 											@php

	                                        	 $orgDate = $news->publish_date;  
	   											echo $newDate = date("d M Y H:i:s A", strtotime($orgDate)); 

	                                        	@endphp |  

	                                        	@php

	                                        	 $orgDate = $news->updated_at;  
	   											echo $newDate = date("d M Y H:i:s A", strtotime($orgDate)); 

	                                        	@endphp
	 										</span>
	                                    </div>
                                    </div>
                                    @empty
                                    @endforelse
                                    @endif


                                      <div class="col-md-12">
                                        {{ $searchnews->links() }}
                                    </div>
                                     


                                     


                                </div>
                            </div>
                        </div>
                  </div>
                
                 <div class="col-md-4 col-lg-4">
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
		                       <a href="#">All News</a>
		                    </div>
		                </div>
		         </div>
            </div>
        </div>
    </section>



@endsection