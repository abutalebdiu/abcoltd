@extends('frontend.layouts.app')
@section('title',$websetting->homepage_title)

@section('content')



<section class="notic-section py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="notic-box">
					<div class="section-head">
						<h4 class="pb-3 after-dot">Apply IPO</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-9">
				<div style="border: 1px solid #ccc; padding: 15px; background: #eef4f5;">
					<form action="{{ route('apply.ipo.post') }}" method="post">
                        @csrf
						<div class="row">
							<div class="col-12 col-md-6 col-xl-5 mb-3">
								<div class="d-flex bd-highlight align-items-center">
									<div class="flex-shrink-1 bd-highlight" style="width: 130px">
										<label for="name">IPO Name :</label>
									</div>
									<div class="w-100 bd-highlight">
										<select name="ipo_id" id="name"  class="form-control  custom-input form-select">
                                            @foreach($ipo as $ipo)
											    <option value="{{ $ipo->id }}">{{ $ipo->instrument_code }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xl-5 mb-3">
								<div class="d-flex bd-highlight align-items-center">
									<div  class="flex-shrink-1 bd-highlight" style="width: 130px">
										<label for="name">Amount : </label>
									</div>
									<div class="w-100 bd-highlight">
										<select name="amount" id="name"  class="form-control  custom-input form-select">
	
											<option value="10000">10000</option>
											<option value="20000">20000</option>
											<option value="30000">30000</option>
											<option value="40000">40000</option>
											<option value="50000">50000</option>
										</select>
									</div>
								</div>
							</div>


                            <div class="col-12 col-md-12 col-xl-12 mb-3">
                                <div class="d-flex bd-highlight align-items-center">
                                    <div  class="flex-shrink-1 bd-highlight" style="width: 130px">
                                        <label for="name">Code List : </label>
                                    </div>
                                    <div class="w-100 bd-highlight">
                                        <span  class="m-2">  <input type="checkbox" name="codelist[]" value="{{  $mastercode }}"  checked>  {{    $mastercode }}   </span> 
                                          @foreach ($childipoactive as $itemcode)

                                        <span class="m-2">   <input type="checkbox" name="codelist[]" value="{{ $itemcode->client_code }}" checked> {{ $itemcode->client_code }} </span>   

                                          @endforeach
                                    </div>
                                </div>
                            </div>




							<div class="col-12 col-xl-12">
								<div class="text-center">
									<button type="submit" class="custom-btn">Apply</button>
								</div>
							</div>
						</div>
					</form>
				</div>

                <div class="py-4">
                    <div style="border: 1px solid #ccc; padding: 15px; background: #eef4f5;">
                        <div>
                            <h5 class="pb-2 mb-4" style="border-bottom: 1px solid #00969D;  color: #00969D;">Add child code under this account</h5>
                        </div>
                        <form action="{{ route('child.ipo.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="code">Client Code : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="client_code" class="form-control custom-input" value="{{ old('client_code') }}" id="code" placeholder="Client Code">
                                            <div class="text-danger">{{ $errors->first('client_code') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="name">Full Name : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="name" class="form-control  custom-input" value="{{ old('name') }}" id="name" placeholder="Full name">
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="bo">BO ID : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="boid" class="form-control  custom-input" value="{{ old('boid') }}" id="bo" placeholder="BOID">
                                            <div class="text-danger">{{ $errors->first('boid') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pb-3">
                                    <div class="d-flex bd-highlight align-items-center">
                                        <div class="flex-shrink-1 bd-highlight" style="width: 130px">
                                            <label for="numebr">Mobile : </label>
                                        </div>
                                        <div class="w-100 bd-highlight">
                                            <input type="text" name="mobile" class="form-control  custom-input" value="{{ old('mobile') }}" id="number" placeholder="Mobile Number">
                                            <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-right" style="text-align: right">
                                    <button type="submit" class="custom-btn">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row py-2">
                    <div class="col-12">
                         <div>
                            <h5 class="pb-2 mb-2" style="border-bottom: 1px solid #00969D;  background: #eef4f5;  color: #00969D;">Child Ipo List</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Client code</th>
                                    <th scope="col">BOID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
    
                                @foreach ($childipo as $item)
                                  <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->client_code }}</td>
                                    <td>{{ $item->boid }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        @if($item->status ==1)
                                        <div class="text-warning"><b>Pending</b></div>
                                        @elseif($item->status == 2)
                                        <div class="text-success"><b>Approved</b></div>
                                        @elseif($item->status==3)
                                        <div class="text-danger"><b>Rejected</b></div>
                                        @endif
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-12 col-lg-3">
                <div class="row">
                    <div class="col-12">
                        <div style="max-width: 500px; margin: 0 auto;">
                            <div>
                                <h5 class="pb-2 mb-2 text-center" style="border-bottom: 1px solid #00969D;  color: #00969D; background: #eef4f5;">Applied IPO Code List</h5>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">SL.</th>
                                    <th scope="col">client code</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
    
                                @foreach ($appliedipoes as $item)
                                  <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->client_code }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>
                                        @if($item->status == 1)
                                        <div class="text-warning"><b>IPO Order</b></div>
                                        @elseif($item->status ==2)
                                        <div class="text-success"><b>Applied</b></div> 
                                        @elseif($item->status ==3)
                                        <div class="text-danger"><b>Rejected</b></div>
                                        @endif
                                    </td>
                                  </tr>
                                @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</section>


@endsection