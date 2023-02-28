@extends('frontend.layouts.app')
@section('title','Blog details')
@section('content')

        <!--	blog details-->
    <section class="p-blog-section py-5">
        <div class="container py-4 section-box">
            <div class="row">
                <div class="col-12 col-lg-8 ">
                    <div class="blog-main">
                        <div class="row section-box ml-1 pt-3">
                            <div class="col-12">
                                <div class="blog-title">
                                     <h4 class="my-1">{{$blog->title}} </h4>
                                     <span class="mb-3 bd-date-time">
                                        <i class="fa fa-user mr-2"></i>
                                        {{$blog->authorBlog->name}} <i class="fa fa-clock-o"></i> {{$blog->created_at->format('M d, Y')}}
                                    </span>
                                    <img class="mb-3" src="{{asset($blog->image)}}" alt="blog-photo">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="blog-details-txt">
                                    {!!  $blog->description  !!}

                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="pt-3"> <span>Blog Category : </span></span><a class="btn btn-secondary btn-sm" href="">{{$blog->blogCat->name}}</a></div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="section-box p-3">
                        <div class="p-letest-post ">
                            <div class="latest-head wow animate__animated animate__fadeInUp mb-3">
                                <h4>categerys</h4>
                            </div>
                            <div class="category wow animate__animated animate__fadeInUp">
                                @foreach($categorys as $category)
                                  <a href="{{route('blog.category',$category->slug)  }}"><i class="fa fa-check"></i>{{$category->name}}</a>
                                @endforeach




                                




                            </div>
                        </div>
                        <div class="p-letest-post mt-3">
                            <div class="latest-head wow animate__animated animate__fadeInUp">
                                <h4>latest posts</h4>
                            </div>
                            @foreach($blogall as $blogs)
                                <div class="d-flex bd-highlight custom-card py-3">
                                    <div class="w-25 flex-shrink-1 bd-highlight image">
                                        <a href="{{route('blog.details',$blogs->slug)}}">
                                            <img src="{{asset($blogs->image)}}" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="w-75 bd-highlight custom-card-title">
                                        <h6>
                                            <a href="{{route('blog.details',$blogs->slug)}}">{{$blogs->title}}</a>
                                        </h6>
                                        <span>
                                        <i class="fa fa-user mr-2"></i>
                                        {{$blogs->authorBlog->name}} <i class="fa fa-clock-o"></i> {{$blogs->created_at->format('M d, Y')}}
                                    </span>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--	blog details end-->






@endsection
