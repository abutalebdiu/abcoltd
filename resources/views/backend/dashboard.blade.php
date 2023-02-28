@extends('backend.layouts.app')
@section('title','Dashboard')
@section('content')


<div id="content" class="content">

     <div class="row">
         <div class="col-xs-12">
             <ol class="breadcrumb float-xl-left">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
         </div>
     </div>
     <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-book"></i></div>
                    <div class="stats-info">
                        <h4><b>BO Open Request</b></h4>
                        <p>
                            {{$booopen}}
                        </p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('booopenlist.index') }}">View Detail</a>
                    </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-file"></i></div>
                <div class="stats-info">
                    <h4>BO Modify Request</h4>
                    <p> {{$booomodify}}</p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('bomodify.index') }}">View Detail  </a>
                </div>
            </div>
        </div>
        
        
        
        
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-file"></i></div>
                <div class="stats-info">
                    <h4>BO Closure Request</h4>
                    <p> {{$boclosercount}}</p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('admin.bo.closer') }}">View Detail  </a>
                </div>
            </div>
        </div>
        
        
        


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-mobile"></i></div>
                    <div class="stats-info">
                        <h4>Mobile Apps Registration</h4>
                        <p> {{$moboleapp}}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('mobile.app.index') }}">View Detail  </a>
                    </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-user-plus"></i></div>
                    <div class="stats-info">
                        <h4>User Request</h4>
                        <p> {{$user}}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('user.request.index')  }}">View Detail  </a>
                    </div>
                </div>
            </div>

        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue">
                <div class="stats-icon"><i class="fa fa-usd"></i></div>
                    <div class="stats-info">
                        <h4>Deposit</h4>
                        <p>{{$deposit}}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('deposit.index') }}">View Detail</a>
                    </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-money-bill"></i></div>
                <div class="stats-info">
                    <h4>Withdrawal Request</h4>
                    <p> {{$withdraw}}</p>
                </div>
                <div class="stats-link">
                    <a href="{{ route('withdraw.request') }}">View Detail  </a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-comment"></i></div>
                    <div class="stats-info">
                        <h4>Complain</h4>
                        <p>{{$complain}}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('complain.index') }}">View Detail  </a>
                    </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-question"></i></div>
                    <div class="stats-info">
                        <h4>Contact Us</h4>
                        <p>{{$contact}}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('contact.index') }}">View Detail  </a>
                    </div>
                </div>
            </div>


        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-briefcase"></i></div>
                    <div class="stats-info">
                        <h4>Vacancy</h4>
                        <p> 0</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('mobile.app.index') }}">View Detail  </a>
                    </div>
                </div>
            </div> 
            
            <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-yellow">
                <div class="stats-icon"><i class="fa fa-briefcase"></i></div>
                    <div class="stats-info">
                        <h4>IPO Apply</h4>
                        <p> {{ $ipoapply }}</p>
                    </div>
                    <div class="stats-link">
                        <a href="{{ route('admin.apply-ipo.index') }}">View Detail  </a>
                    </div>
                </div>
            </div>

            </div>
        </div>

@endsection
