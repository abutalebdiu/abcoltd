@extends('frontend.layouts.app')
@section('title', 'Fees')
@section('content')


    <section class="notic-section py-5">
        <div class="custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="notic-box">
                        <div class="section-head">
                            <h4 class="pb-3 after-dot">Fees</h4>
                        </div>
                    </div>
                </div>


                <div class="col-12">
                    <div class="fee-box">
                        <div class="fees-table">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Commission</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Commission</td>
                                        <td>0.4% <small>For Buying and Selling</small></td>
                                    </tr>
                                    <tr>
                                        <td>BO Opening Fee</td>
                                        <td>450 BDT.</td>
                                    </tr>
                                    <tr>
                                        <td>Buy Shares</td>
                                        <td>0.4%</td>
                                    </tr>
                                    <tr>
                                        <td>Sell Shares</td>
                                        <td>0.4%</td>
                                    </tr>
                                    <tr>
                                        <td>​Minimum A/C Balance</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>DSE Mobile App</td>
                                        <td>Free</td>
                                    </tr>
                                    <tr>
                                        <td>IPO Share Sell</td>
                                        <td>1%</td>
                                    </tr>
                                    <tr>
                                        <td>IPO Application</td>
                                        <td>10 BDT</td>
                                    </tr>
                                    <tr>
                                        <td>IPO Membership Club</td>
                                        <td>Free</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>





@endsection
