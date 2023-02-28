 <div class="col-12 col-md-3">
                   <div class="dashboard-left flex-shrink-1 bd-highlight py-3 mt-3 mb-3">
                    <div class="dr-head">
                         
                        <h6>{{ Auth::user()->name }}</h6>
                        
                    </div>
                    <div class="dashboard-item py-3">
                        <ul>
    
                            <li class="desh-active">
                                <a href="{{ route('balance.inquery') }}">
                                    <i class="fa fa-building-o"></i>
                                   Balance Inquiry
                                </a>
                            </li>
                            <li>
                                <a href="https://rnisecuritiesltd.com/deposit/show">
                                    <i class="fa fa-money"></i>
                                   Deposit
                                </a>
                            </li>
                            <li>
                                <a href="https://rnisecuritiesltd.com/withdraw/request/show">
                                    <i class="fa fa-newspaper-o"></i>
                                     Withdrawal Request
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('client.child.code') }}">
                                    <i class="fa fa-cog"></i>
                                     child Code
                                </a>
                            </li>
                           
                            <li>
                                <a href="{{ route('client.profile') }}">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li>
                            	<a href="{{ route('client.logout') }}" title=""><i class="fa fa-sign-out"></i> Logout</a>
                            </li>


                        </ul>

                    </div>
                 </div>
 			  </div>