@extends('frontend.layouts.app')
@section('title','View Notice')
 
@section('content')

        <!--  NOTIC SECTION-->
        <section class="notic-section py-3">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head pb-3">
                                <h4 class="after-dot">notice View</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        
                            <h5 class="text-center mb-4">{{ $notice->title }}</h5>

                            <?php 
			  
			   $path_parts = pathinfo($notice->noticesfile);

   if($path_parts['extension']=='jpeg' || $path_parts['extension']=='png' || $path_parts['extension']=='jpg'){ ?>
         <img src="{{ asset($notice->noticesfile) }}" alt="" width="100%"></td>

 <?php  }else{   ?>
 
  
<embed src="{{ asset($notice->noticesfile) }}" style="width:100%; height:800px;" frameborder="0">


 <?php  }  ?>
 
				<br>
                <br>
				<a href="{{ asset($notice->noticesfile) }}" class="btn btn-primary btn-sm" download> <i class="fa fa-download"></i> Download</a>
                         
                    </div>
                </div>
            </div>
        </section>

        <!-- END NOTIC SECTION-->



@endsection