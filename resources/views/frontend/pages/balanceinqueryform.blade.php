@extends('frontend.layouts.app')
@section('title','Balance')
@section('content')
 

 <section class="balance-section py-5">
            <div class="custom-container">
                <div class="balance-box mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-head">
                                <h4 class="after-dot">balance inquiry</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="balance-content pt-3">
                                 @if(Auth::check())
                                 <table style="width: 100%">
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
                                       <td>{{  $client->name }}</td>
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
                               
                                @else
                               
                               <p>If you want to show balance please login first</p>
                               @endif
                                <div class="withdraw-btn pt-4">
                                    <a href="{{ route('withdraw.request.show') }}" class="custom-btn capital">click here to withdrawal page </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection