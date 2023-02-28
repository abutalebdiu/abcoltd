@extends('frontend.layouts.app')
@section('title','IPO')
@section('content')
 

 <section class="notic-section py-5">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head">
                                <h4 class="pb-3 after-dot">IPO</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="notic-table">
                            <table class="table table-striped table-hover">
                                <tbody>
                                <tr>
                                    <th>SL.</th>
                                    <th>upcoming IPO</th>
                                    <th>start date</th>
                                    <th>end date</th>
                                    <th>summary download</th>
                                </tr>

                                @foreach($ipos as $ipo)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ipo->ipo }}</td>
                                    <td class="date">{{ $ipo->start_date}}</td>
                                    <td class="date">{{ $ipo->end_date }}</td>
                                    <td class="download"><a href="{{ asset($ipo->attachment) }}" download>download</a></td>
                                </tr>
                                @endforeach


                            </tbody></table>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <sectin class="ipo-details">
            <div class="custom-container">
                <div class="row pb-3">
                    <div class="col-12">
                        <div class="section-head py-3">
                            <h4 class="after-dot">learn about IPO pro rata</h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="ipo-details d-flex bd-highlight">
                            <div class="ipo-icon flex-shrink-1 bd-highlight">
                                <i class="fa fa-hand-o-right"></i>
                            </div>
                            <div class="ipo-txt w-100 bd-highlight">
                                <p>Investor portfolio market value must have more than or equal 20,000 tk.</p>
                            </div>
                        </div>
                        <div class="ipo-details d-flex bd-highlight">
                            <div class="ipo-icon flex-shrink-1 bd-highlight">
                                <i class="fa fa-hand-o-right"></i>
                            </div>
                            <div class="ipo-txt w-100 bd-highlight">
                                <p>
                                    Portfolio market value consider as matured share balance as on date.
                                </p>
                            </div>
                        </div>
                        
                        <div class="ipo-details d-flex bd-highlight">
                            <div class="ipo-icon flex-shrink-1 bd-highlight">
                                <i class="fa fa-hand-o-right"></i>
                            </div>
                            <div class="ipo-txt w-100 bd-highlight">
                                <p>
                                    Consider lock share quantity.
                                </p>
                            </div>
                        </div>
                        
                        <div class="ipo-details d-flex bd-highlight">
                            <div class="ipo-icon flex-shrink-1 bd-highlight">
                                <i class="fa fa-hand-o-right"></i>
                            </div>
                            <div class="ipo-txt w-100 bd-highlight">
                                <p>
                                    IPO application amount minimum 10,000 tk.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </sectin>



@endsection