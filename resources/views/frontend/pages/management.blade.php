@extends('frontend.layouts.app')
@section('title','Management')
@section('content')

<!--   MENAGEMENT SECTION-->
<section class="menagement-section py-4">
    <div class="custom-container">
        <div class="menagement-main-box">
            <div class="row">
                <div class="col-12 mb-5 mt-3">
                    <div class="section-title text-center">
                        <h4>Management Of RNI Securities Limited</h4>
                        <div class="head-after m-auto mt-3 mb-2 clearfix">
                            <span class="line"></span>
                            <span class="circle"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--<div class="col-12">-->
                <!--    <div class="menagement-box">-->
                <!--        <div class="menagement-photo">-->
                <!--            <img src="{{ asset($team->ch_image) }}" alt="">-->
                <!--        </div>-->
                <!--        <div class="menagement-details">-->
                <!--            <h5>{{ $team->ch_name }}</h5>-->
                <!--            <span>{{ $team->ch_designation }}</span>-->
                <!--            <a href="#" data-bs-toggle="modal" data-bs-target="#"><i class="fa fa-eye"></i>details</a>-->

                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

            </div>
            
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                     <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="{{ asset($team->mg_image) }}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>{{ $team->mg_name }}</h5>
                            <span>{{ $team->mg_designation }}</span>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Rafiqul"><i class="fa fa-eye"></i>details</a>

                        </div>
                    </div>
                </div>
            </div>
                
                
             <div class="row">
                 <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="{{ asset($team->ch_image) }}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>{{ $team->ch_name }}</h5>
                            <span>{{ $team->ch_designation }}</span>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#"><i class="fa fa-eye"></i>details</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                   <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="{{ asset($team->di1_image) }}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>{{ $team->di1_name }}</h5>
                            <span>{{ $team->di1_designation }}</span>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Jubayer"><i class="fa fa-eye"></i>details</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="menagement-box">
                        <div class="menagement-photo">
                            <img src="{{ asset($team->di2_image) }}" alt="">
                        </div>
                        <div class="menagement-details">
                            <h5>{{ $team->di2_name }}</h5>
                            <span>{{ $team->di2_designation }}</span>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Usama"><i class="fa fa-eye"></i>details</a>

                        </div>
                    </div>
                </div>
                

            </div>
            
        </div>
    </div>
</section>
<!--   END MENAGEMENT SECTION-->

<!--        ALL DETAILS MODELS-->
<!--1 Modal start-->
<div class="modal fade" id="#" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="custom-model-body">
                    <div class="d-menagement-photo">
                        <img src="{{ asset($team->ch_image) }}" alt="">
                    </div>
                    <div class="d-menagement-head pt-3">
                        <h5>  {{ $team->ch_name }}</h5>
                        <h6>  {{ $team->ch_designation }}</h6>
                    </div>
                    <div class="d-menagement-details">
                        <p class='justify'>
                          {{ $team->ch_description }}
                         </p>
                       

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal end-->

<!--2 Modal start-->
<div class="modal fade" id="Rafiqul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="custom-model-body">
                    <div class="d-menagement-photo">
                        <img src="{{ asset($team->mg_image) }}" alt="">
                    </div>
                    <div class="d-menagement-head pt-3">
                        <h5>  {{ $team->mg_name }}</h5>
                        <h6>  {{ $team->mg_designation }}</h6>
                    </div>
                    <div class="d-menagement-details">
                        <p class='justify'>
                          {{ $team->mg_description }}
                         </p>
                       

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal end-->


<!--3 Modal start-->
<div class="modal fade" id="Jubayer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="custom-model-body">
                    <div class="d-menagement-photo">
                        <img src="{{ asset($team->di1_image) }}" alt="">
                    </div>
                    <div class="d-menagement-head pt-3">
                        <h5>  {{ $team->di1_name }}</h5>
                        <h6>  {{ $team->di1_designation }}</h6>
                    </div>
                    <div class="d-menagement-details">
                        <p class='justify'>
                          {{ $team->di1_description }}
                         </p>
                       

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal end-->


<!--4 Modal start-->
<div class="modal fade" id="Usama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="custom-model-body">
                    <div class="d-menagement-photo">
                        <img src="{{ asset($team->di2_image) }}" alt="">
                    </div>
                    <div class="d-menagement-head pt-3">
                        <h5>  {{ $team->di2_name }}</h5>
                        <h6>  {{ $team->di2_designation }}</h6>
                    </div>
                    <div class="d-menagement-details">
                        <p class='justify'>
                          {{ $team->di2_description }}
                         </p>
                       

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal end-->



<!--    END   ALL DETAILS MODELS-->


@endsection
