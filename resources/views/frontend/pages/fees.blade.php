@extends('frontend.layouts.app')
@section('title','Fees')
@section('content')
 

<section class="notic-section py-5">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head">
                                <h4 class="pb-3 after-dot">Charge &amp; Facilities</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="fee-box">
                            <div class="fee-sub-head py-2">
                                <h6><i class="fa fa-arrows-alt"></i>BO ACCOUNT OPPENING CHARGE :</h6>
                            </div>
                            <div class="fees-txt clearfix">
                                <div class="d-flex bd-highlight clearfix">
                                    <div class="fees-icon flex-shrink-1 bd-highlight">
                                        <i class="fa fa-hand-o-right"></i>
                                    </div>
                                    <div class="fees-details w-100 bd-highlight">
                                        <p>
                                            No charge apply against BO opening form the employee of Sun Life Insurance and its group
                                            parents and sister concern company for 1st BO Account but Joint account or 2nd one have to
                                            pay only CDBL Charges of Tk.400.00 (Taka Four Hundred Only)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="fees-txt clearfix">
                                <div class="d-flex bd-highlight clearfix">
                                    <div class="fees-icon flex-shrink-1 bd-highlight">
                                        <i class="fa fa-hand-o-right"></i>
                                    </div>
                                    <div class="fees-details w-100 bd-highlight">
                                        <p>
                                            Account opening program:
                                        </p>
                                        <ul>
                                            <li>For IPO accounts only apply CDBL Charge Tk. 400. </li>
                                            <li>
                                                If regular trade account fees Tk. 500 will adjusted with deposit amount.
                                            </li>
                                            <li>
                                                For link account with share both account opening &amp; link charge will be full free
                                                (condition apply-1).
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="fee-box">
                            <div class="fee-sub-head py-2">
                                <h6><i class="fa fa-arrows-alt"></i>Trade Commission:</h6>
                            </div>
                            <div class="fees-table">
                                <table class="table table-striped table-hover">
                                    <tbody><tr>
                                        <th>Type</th>
                                        <th>Criteria</th>
                                        <th>Commission Rate</th>
                                    </tr>
                                    <tr>
                                        <td>Platinum Account</td>
                                        <td>Above Tk.1.00 Crore</td>
                                        <td>Tk 0.3 (Thirty Five paisa only)</td>

                                    </tr>
                                    <tr>
                                        <td>Gold Account</td>
                                        <td>Above Tk.50.00 Lac</td>
                                        <td>Tk 0.40 (Forty paisa only)</td>
                                    </tr>
                                    <tr>
                                        <td>Silver Account</td>
                                        <td>Above Tk.15.00 Lac</td>
                                        <td>Tk 0.45 (Forty Five paisa only)</td>
                                    </tr>

                                    <tr>
                                        <td>General Account</td>
                                        <td>Below Tk.15.00 Lac</td>
                                        <td>Tk.50 (Fifty paisa only)</td>
                                    </tr>

                                </tbody></table>
                            </div>

                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="fee-box">
                            <div class="fee-sub-head py-2">
                                <h6><i class="fa fa-arrows-alt"></i>Loan facilities :</h6>
                            </div>
                            <div class="fees-table">
                                <table class="table table-striped table-hover">
                                    <tbody><tr>
                                        <th>Type</th>
                                        <th>Criteria</th>
                                        <th>Margin Ratio</th>
                                    </tr>
                                    <tr>
                                        <td>Platinum Account</td>
                                        <td>Above Tk.1.00 Crore</td>
                                        <td>1:1</td>

                                    </tr>
                                    <tr>
                                        <td>Gold Account</td>
                                        <td>Above Tk.50.00 Lac</td>
                                        <td>1:1</td>
                                    </tr>
                                    <tr>
                                        <td>Silver Account</td>
                                        <td>Above Tk.15.00 Lac</td>
                                        <td>1:0.75</td>
                                    </tr>

                                    <tr>
                                        <td>General Account</td>
                                        <td>Below Tk.15.00 Lac</td>
                                        <td>1:0.5</td>
                                    </tr>
                                    <tr>
                                        <td>Non Marginable Account</td>
                                        <td>Below Tk.5.00 Lac</td>
                                        <td>N/A</td>
                                    </tr>

                                </tbody></table>
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
  




@endsection