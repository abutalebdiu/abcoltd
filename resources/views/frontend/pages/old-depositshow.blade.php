@extends('frontend.layouts.app')
@section('title','Deposit')
@section('content')
 
 <section class="balance-section py-5">
            <div class="container">
                <div class="balance-box mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-head">
                                <h4 class="after-dot">deposit</h4>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="balance-content pt-3">

                                <table class="no-border mb-2">
                                    <tbody><tr>
                                        <th>Client code</th>
                                        <th>:</th>
                                        <td> 
                                            @if(Auth::check())
                                                {{ Auth::user()->code }}
                                            @else

                                         
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Client name</th>
                                        <th>:</th>
                                        <td>
                                            @if(Auth::check())
                                            {{ Auth::user()->name }}
                                            @else

                                             
                                            @endif
                                        </td>
                                    </tr>
                                </tbody></table>
                                <div>
                                    <form action="{{ route('deposit.post') }}" method="POST" class="withdraw-form" enctype="multipart/form-data">
                                        @csrf
                                       <div class="input-group mb-3">
                                            <span class="input-group-text m-0 deposit-span"> deposit type :</span>
                                            <select class="" name="type">
                                                <option value="" selected="" data-select2-id="2">Select Deposit Option</option>
                                                <option {{ old('type') ==1 ? 'selected' : "" }} value="1">Cash</option>
                                                <option {{ old('type') ==2 ? 'selected' : "" }} value="2">Bank</option>
                                                <option {{ old('type') ==3 ? 'selected' : "" }} value="3">BEFTN</option>
                                                <option {{ old('type') ==4 ? 'selected' : "" }} value="4">TRGS</option>
                                            </select>
                                            <div class="text-danger">{{ $errors->first('type') }}</div>
                                        </div>
                                        
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"> Amount :</span>
                                            <input type="text" name="amount" class="form-control custom-control custom-input">
                                            <div class="text-danger">{{ $errors->first('amount') }}</div>
                                        </div>
                                        
                                        <div class="mb-3">
                                           <label for="slep">Deposit slip attachment :</label>
                                            <input type="file" name="attachment" class="form-control custom-input deposit_slip">
                                            <div class="text-danger">{{ $errors->first('attachment') }}</div>
                                        </div>

                                        <div class="withdraw-btn mt-4">
                                            <button type="submit" class="custom-btn capital">submit</button>
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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head">
                                <h4 class="pb-3 after-dot">deposit history</h4>
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
                                    <th>deposit type</th>
                                    <th>amonut</th>
                                    <th>status</th>
                                </tr>
                                
                                @foreach ($deposit as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->code }}</td>
                                    <td>{{ $data->created_at->format('d M, Y - g:i A') }}</td>
                                    <td>
                                    @if($data->type ==1)
                                        <div>Cash</div>
                                    
                                    @elseif($data->type==2)
                                        <div>Bank</div>
                                    
                                    @elseif($data->type==3)
                                        <div>BEFTN</div>
                                    
                                    @elseif($data->type==4)
                                        <div>TRGS</div>
                                    
                                    @endif
                                </td>

                                    <td>{{ $data->amount }}</td>
                                    @if($data->status ==1){
                                        <td class="active">Active</td>
                                    }
                                    @elseif($data->status==2){
                                        <td class="posted">Posted</td>
                                    }
                                    @elseif($data->status==3){
                                        <td class="cancel">Cancel</td>
                                    }
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