
@extends('frontend.layouts.app')
@section('title','Client Balance')
@section('content')

	<section class="user-dashboard">
        <div class="container">
           <div class="row">


               @include('frontend.clients.dashboardmenu')

               <div class="col-12 col-md-9">
                <div class="dashboard-main w-100 bd-highlight py-3 mt-3">
                     
                    <div class="hr-body">
                          <div class="row">
                        <div class="col-12">
                            <div class="section-head">
                                <h4 class="after-dot">Balance inquery</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="balance-content pt-3">
                                
                            @if(Auth::check())
                              <center>
                                <table style="width: 60%">
                                    <thead>
                                        <tr>
                                            <td>Serial</td>
                                            <td>Name</td>
                                            <td>Code </td>
                                            <td>Balance </td>
                                        </tr>
                                    </thead>
                                   <tbody>
                                       
                                    <tr>
                                       <td> 1 </td>
                                       <td>{{ $client->name }}</td>
                                       <td> {{ $client->code }}</td>
                                       <td> {{ $client->balance->balance }} </td>
                                   </tr>
                                   @php
                                     
                                     $i =2;
                                   @endphp
                                   @foreach($clients as $code)
                                   
                                   <tr>
                                       <td> {{ $i++ }} </td>
                                       <td> {{ $code->name }}</td>
                                       <td> {{ $code->client_code }}</td>
                                       <td> {{ $code->balance?$code->balance->balance:'' }}  </td>
                                   </tr>
                                   
                                   @endforeach
                                   
                                 
                               </tbody></table>
                               
                               
                               </center>
                               @else
                               
                               <p>If you want to show balance please login first</p>
                               @endif
                               
                                <div class="withdraw-btn pt-4">
                                    <a href="https://rnisecuritiesltd.com/withdraw/request/show" class="custom-btn capital">click here to withdrawal page </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                 </div>

               </div>
           </div>
           
        </div>
    </section>

@endsection