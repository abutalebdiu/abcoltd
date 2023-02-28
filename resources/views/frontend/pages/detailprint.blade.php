
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />
<link rel="icon" type="image/png" sizes="32x32" href="">
 

		<meta name="author" content="The Bangladesh News">
        <meta name="Developed By" content="My Soft IT" />
        <meta name="Developer" content="My Soft IT Team" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta name="distribution" content="Global">
        <meta http-equiv="Content-Language" content="En" />
        <meta property="fb:pages" content="" />
        <meta property="fb:app_id" content="" />
        <meta name="google-site-verification" content="" />
        <meta property="description" content="{{ $news_detail->title}}" />
        <meta name="keywords" content="{{ $news_detail->title}}" />
        <meta property="og:url" content="{{  route('detail.news',['category'=>$news_detail->category?$news_detail->category->slug:'','slug'=>$news_detail->slug])}}" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="{{$news_detail->title}}" />
        <meta property="og:description" content="{{ $news_detail->title}}" />
        <meta property="og:site_name" content="The Bangladesh News" />
        
        <meta name="twitter:card" value="{{$news_detail->title}}">
        <meta name="twitter:title" content="{{$news_detail->title}}">
        <meta name="twitter:description" content="{{ $news_detail->title}}">
        <meta name="twitter:site" content="@thebangladeshnews" />
        <meta name="twitter:creator" content="@thebangladeshnews" />
        <meta name="twitter:url" content="{{  route('detail.news',['category'=>$news_detail->category?$news_detail->category->slug:'','slug'=>$news_detail->slug])}}" />
        <link rel="canonical" href="{{  route('detail.news',['category'=>$news_detail->category?$news_detail->category->slug:'','slug'=>$news_detail->slug])}}">
        <meta property="og:image" content="{{ asset($news_detail->image) }}" />
        <meta name="twitter:image" content="{{ asset($news_detail->image) }}">
        
 

        <link rel="stylesheet" href="{{ asset('public/frontend') }}/asset/css/bootstrap.min.css">
		<link href="" rel="stylesheet">
  	    <link rel="stylesheet" href="{{ asset('public/frontend') }}/asset/css/style.css">
<style type="text/css">
		.publish-content figure{
			width: 100% !important
		}
		.publish-content figure figcaption{
			font-size: 16px !important;
			font-style: italic !important;
			background-color: #f1f1f1;
			border-bottom: 2px solid #dbd6dd;
			padding: 5px;
			width: 100% !important;
			margin-bottom: 20px;
		}
		.publish-content figure figcaption span{
			font-size: 16px !important;
			font-style: italic !important;
		}
	</style>
<style type="text/css">
		.print-page,
		.print-page p,
		.print-page div,
		.print-page div p,
		.print-page span{
			font-size: 22px !important;
			line-height: 28px !important;
		}
		.image-caption,
		.image-caption span{
			font-size: 18px !important;
		}
		.publish-content img{
			width: 100% !important
		}
		.logo{
			height: 50px;
			margin-bottom: 30px;
		}
		@media  screen and (max-width: 768px) {
			.logo{
				height: 30px;
				margin-bottom: 30px;
			}
		}
	</style>
</head>
<body style="background: #F0F0ED;">
<button style="border-radius: 0px" class="btn btn-primary btn-block print-content"><i class="fa fa-print fa-lg"></i> PRINT</button>
<div class="container">
<div class="marginT10 xs-marginT0"></div>
<div class="row">
<div class="col-md-12 ">
<div style="background-color: white;padding: 15px">
<div style="padding: 0px">
<center>  <img src="{{asset( $websetting->logo) }}" alt="logo" class=""></center>
<br>
</div>

<div class="marginB30 xs-marginB15">
<h1 class="detailHeadline" style="margin: 0px"> {{ $news_detail->title }}</h1>
<div style="margin-top: 20px">
<p style="margin-bottom: 0px">  {{ $news_detail->reporter?$news_detail->reporter->name:'' }} </p> <p style="margin-bottom: 0px">Published:{{ $news_detail->created_at->format('d M Y, h:i A') }}</p>
</div>
</div>


<div class="newsPhoto">
<div>
<div style="position: relative;cursor: pointer;">
<img src="{{ asset($news_detail->image) }}" alt="{{ $news_detail->image_alt }}" class="img-responsive" style="width: 100%">
<p style="margin: 0px;padding: 5px;background-color: #f1f1f1;border-bottom: 2px solid #dbd6dd;font-size: 16px;font-style: italic;"> {{ $news_detail->title }}</p>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="publish-content">
 @if($news_detail->summery)

                            {{ $news_detail->summery }}
                            @endif
                           
                            <br>
                            {!! $news_detail->details !!}
                            <br>
                            <i> {{ $news_detail->hanger }}</i>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
 
</div>
</div>
</div>
</div>
</div>
<div class="marginT10 xs-marginT0"></div>
</div>

<script type="text/javascript" src="https://en.shampratikdeshkal.com/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="https://en.shampratikdeshkal.com/assets/bootstrap/js/bootstrap.min.js"></script>
<script>
			$(".print-content").click(function(){
				$(".print-content").hide();
				window.print($(".text-content"));
				$(".print-content").show();
			});  
		</script>
<script type="text/javascript">
			var s = $("#deatil-con").val();   
			s = s.replace(/<a>/g, "<div class='try'>");  
			s = s.replace(/<\/a>/g,"</div>"); 
			$("#deatil-show").html(s);
		</script>
</body>
</html>