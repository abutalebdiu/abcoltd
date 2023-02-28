@extends('frontend.layouts.app')
@section('title','Blogs')
@section('content')

    <!--	blog section-->
    <section class="p-blog-section py-3">
        <div class="custom-container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="section-head mb-5">
                        <h4 class="after-dot">{{$category_name->name}}  Category Blog</h4>

                    </div>
                </div>
            </div>

            <div class="row">

                @foreach($blog_category as $blog)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="p-blog-box ">
                            <div class="card">
                                <div class="blog-img">
                                    <a href="{{route('blog.details',$blog->slug)}}">
                                        <img src="{{asset($blog->image)}}" class="card-img-top" alt="blog-photo">
                                    </a>
                                </div>
                                <div class="card-body custom-card">
                                    <a href="{{route('blog.details',$blog->slug)}}">
                                        {{$blog->title}}</a>
                                    </a>
                                    <span>
                                    <i class="fa fa-user"></i>{{$blog->authorBlog->name}} <i class="fa fa-clock-o"></i> {{ $blog->created_at->format('M d Y') }}
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-12">
                    <div class="text-center pt-4">
                        <a href="#" class="custom-btn">See More</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--	blog section end-->






@endsection
