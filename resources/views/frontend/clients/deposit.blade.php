
@extends('frontend.layouts.app')
@section('title','Client Deposit')
@section('content')

	<section class="user-dashboard">
        <div class="container">
           <div class="row">


               @include('frontend.clients.dashboardmenu')

               <div class="col-12 col-md-9">
                <div class="dashboard-main w-100 bd-highlight py-3 mt-3">
                     
                    <div class="hr-body">
                          

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
                                                <th>client code</th>
                                                <th>:</th>
                                                <td> {{ Auth::user()->code }}</td>
                                            </tr>
                                            <tr>
                                                <th>client name</th>
                                                <th>:</th>
                                                <td>{{ Auth::user()->name }}</td>
                                            </tr>
                                        </tbody>
                                      </table>
                                      <div>
                                          <form action="{{ route('deposit.store') }}" class="withdraw-form" method="post" enctype="multipart/form-data">
                                            @csrf
                                             <div class="input-group mb-3">
                                                  <span class="input-group-text"> deposit type :</span>
                                                  <select name="type"  class="form-control" aria-hidden="true">
                                                      <option value="">Select Deposit Option</option>
                                                      <option value="Cash">Cash</option>
                                                      <option value="Bank">Bank</option>
                                                      <option value="BEFTN">BEFTN</option>
                                                      <option value="TRGS">TRGS</option>
                                                  </select> 
                                              </div>
                                              
                                              <div class="input-group mb-3">
                                                  <span class="input-group-text"> Amount :</span>
                                                  <input type="text" name="amount" value="{{ old('amount') }}" class="form-control custom-control custom-input" placeholder="Enter Amount">
                                              </div>
                                              
                                              <div class="mb-3">
                                                 <label for="slep">Deposit slip attachment :</label>
                                                  <input name="attachment" type="file" class="form-control ">
                                              </div>

                                              <div class="withdraw-btn mt-4">
                                                   <button class="custom-btn capital"> <i class="fa fa-check"></i>  Submit</button>
                                              </div>
                                          </form>
                                      </div>

                                  </div>
                              </div>
                          </div>

                      </div>


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
                                <tbody><tr>
                                    <th>SL.</th>
                                    <th>client code</th>
                                    <th>date</th>
                                    <th>deposit type</th>
                                    <th>amonut</th>
                                    <th>status</th>
                                </tr>
                                @foreach($deposit as $amount)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $amount->client_code }}</td>
                                    <td class="date">{{ $amount->created_at }}</td>
                                    <td>{{ $amount->bank }}</td>
                                    <td>{{ $amount->amount }}</td>
                                    <td class="panding">panding</td>
                                </tr>
                                 @endforeach

                            </tbody></table>
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