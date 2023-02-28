@extends('frontend.layouts.app')
@section('title','Blogs')
@section('content')

    <!--	blog section-->
<section class="p-blog-section py-3">
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4>Our Blogs</h4>
                    <div class="head-after m-auto mt-3 mb-4 clearfix">
                     <span class="line"></span>
                     <span class="circle"></span>
                     <span class="line"></span>
                 </div>
                </div>
            </div>
        </div>

            <div class="row">

                @foreach($blogs as $blog)
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



            </div>
        </div>
</section>
<!--	blog section end-->






@endsection
