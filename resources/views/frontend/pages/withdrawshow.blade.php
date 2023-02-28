@extends('frontend.layouts.app')
@section('title','Withdrawal Request')
@section('content')
 
<section class="balance-section py-5">
            <div class="custom-container">
                <div class="balance-box mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-head">
                                <h4 class="after-dot">balance Withdrawal</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="balance-content pt-3">
                                
                                
                              
                               <div>
                                    <form class="withdraw-form" action="{{ route('withdraw.request.post') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    
                                        
                                         <div class="form-group mb-3">
                                            <label> Client Code:</label>
                                            <select name="code" class="form-control" style="width:100%">
                                                <option  value="">Select Client Code</option>
                                                @if(Auth::check())
                                                <option value="{{ $balances->code }}">
                                                    
                                                     {{ $client->name }} - {{ $client->code }} -  {{ $client->balance->balance }} 
                                                    
                                                </option>
                                                @foreach($clients as $code)
                                   
                                                  <option value="{{ $code->client_code }}">
                                                    
                                                         {{ $code->name }}  -
                                                         {{ $code->client_code }}  -
                                                        Balance ( {{ $code->balance?$code->balance->balance:'' }}  )
                                                    
                                                   </option>
                                                   @endforeach
                                                                
                                                @else
                                                
                                                <option class="">Need to Login First</option>
                                                
                                                @endif
                                            </select>
                                            <div class="text-danger">{{ $errors->first('code') }}</div>
                                        </div>
                                    
                                     
                                       <div class="form-group mb-3">
                                            <label> withdraw Amount :</label>
                                            <input type="text" name="withdraw" class="form-control  "   style="width:100%">
                                            <div class="text-danger">{{ $errors->first('withdraw') }}</div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <span class="form-group-text"> Signature :</span>
                                            <input type="file" class="form-control" name="sign"  style="width:100%">
                                            <div class="text-danger">{{ $errors->first('sign') }}</div>
                                        </div>
                                    
                                    <div class="withdraw-btn">
                                        <button type="submit" class="custom-btn capital">withdraw</button>
                                    </div>
                                   </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="notic-section pb-5">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head">
                                <h4 class="pb-3 after-dot">withdraw history</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="notic-table">
                            <table class="table table-striped table-hover">
                                <tbody>

                          
                                <tr>
                                    <th>SL.</th>
                                    <th>client code</th>
                                    <th>date</th>
                                    <th>amonut</th>
                                    <th>status</th>
                                </tr>
                                @foreach ($withdraw as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->code }}</td>
                                    <td class="date w-25" >{{ $data->created_at->format('d M,Y - g:i A')}}</td>
                                    <td>{{ $data->withdraw }}</td>
                                        @if($data->status==1)
                                            <td class="panding">Pending</td>
                                        
                                        @elseif($data->status==2)
                                            <td style="color: green">Accepted</td>
                                        
                                        @elseif($data->status==0)
                                            <td class="cancel">Cancel</td>
                                      
                                        @endif

                                </tr>
                                @endforeach
                                

                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection

