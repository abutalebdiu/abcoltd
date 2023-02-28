
@extends('frontend.layouts.app')
@section('title','Client Dashboard')
@section('content')

	<section class="user-dashboard">
        <div class="container">
           <div class="row">


               @include('frontend.clients.dashboardmenu')

               <div class="col-12 col-md-9 ">
                <div class="dashboard-main w-100 bd-highlight py-3 mt-3 ">
                    <div class="dr-head  bg-white">
                        <h6>Dashboard</h6>
                        <hr>
                    </div>
                    <div class="hr-body  bg-white">
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
                    </div>
                 </div>

               </div>
           </div>
           
        </div>
    </section>

@endsection