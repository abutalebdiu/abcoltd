@extends('frontend.layouts.app')
@section('title','Deposit')
@section('content')

<section class="fund-deposit-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="fund-deposit-form">
                    <div class="section-title">
                        <h4 class="bb pb-2 text-center">FUND DEPOSIT</h4>
                    </div>
                   <center> <h8 style="color:red;" >*You must Login/Registration first</h8> </center>
                    <form action="{{ route('deposit.post') }}" method="POST" class="withdraw-form" enctype="multipart/form-data">
                        @csrf
                        <div class="py-2">
                            <label for="code">Client Code <span>*</span></label>
                            <input type="text" name="client_code" class="custom-form" id="code" placeholder="Client code">
                        </div>
                        <div class="py-2">
                            <label for="amount">Taka Deposited (in Amount) <span>*</span></label>
                            <input type="text" name="amount" class="custom-form" id="amount" placeholder="Amount">
                        </div>
                        <div class="py-2">
                            <label for="name">name <span>*</span></label>
                            <input type="text" name="name" class="custom-form" id="name" placeholder="Full Name">
                        </div>
                        <div class="py-2">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" name="email" class="custom-form" id="email" placeholder="Email">
                        </div>
                        <div class="py-2">
                            <label for="phone">Phone Number <span>*</span></label>
                            <input type="text" name="number" class="custom-form" id="phone" placeholder="Phone Number">
                        </div>
                        <div class="py-2">
                            <label for="for-deposit">Deposit For <span>*</span></label>
                            <select name="for_deposit" class="custom-form" id="for-deposit">
                                <option value="secondary trading" selected="">Secondary Trading</option>
                                <option value="ipo">IPO</option>
                                <option value="both">Both</option>
                            </select>
                        </div>
                        
                        <div class="py-2">
                            <label for="bank">Bank <span>*</span></label>
                            <select name="bank" class="custom-form" id="bank">
                                <option value="" selected="">Select Bank</option>
                               
                                <option value="dutch bangla bank">Dutch Bangla Bank</option>
                                <option value="UCB">UCB Bank</option>
                               
                                <option value="Al-Arafah Islami bank">Al-Arafah Islami Bank Ltd. </option>
                              
                            </select>
                        </div>

                        <div class="py-2">
                            <label for="slep">Upload Deposit Slip/Screenshot <span>*</span></label>
                            <input type="file" name="slep" id="slep">
                        </div>
                        <div class="py-2">
                            <label for="comment">Comment</label>
                            <textarea name="comment" class="custom-form" placeholder="Comment"></textarea>
                        </div>


                        <div class="text-center pt-2">
                            <button type="submit" class="custom-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="easy-deposit">
                    <div class="section-title">
                        <h4 class="bb pb-2 text-center">EASY DEPOSIT</h4>
                    </div>
                </div>

                <div class="deposit-rule">
                    <ul>
                        <li>
                            অফিসে না এসেই নিজের বিও তে টাকা জমা দিন নীচের যেকোন একটি <b>ব্যাংক অ্যাকাউন্টে</b>
                        </li>
                        <li>
                            অ্যাকাউন্ট অফিসের সাথে সরাসরি যোগাযোগ করতে<b> +8802-223356183</b>
                        </li>
                       <!-- <li>
                            এছাড়াও আপনি ফেসবুক <b>মেসেঞ্জার</b> মাধ্যমে আমাদের সাথে যোগাযোগ করতে পারেন।
                        </li>-->
                    </ul>
                </div>

                <div class="deposit-all-account">
                    <!--<div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/bkash.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6> 
                            <h6>Bkash  (Personal)</h6>
                            <h6>Bkash Charge 2%</h6>
                            <h6>A/C: 01730-062188</h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/citylogo.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>The City Bank (Dhaka South, Principal Branch)</h6>
                            <h6>A/C: 3101093011002, Routing: 225275356</h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/dashbangla.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>Dutch Bangla Bank (Dhaka South, Local Office Branch)</h6>
                            <h6>A/C: 101.120.0006384, Routing: 090273888 </h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/eastern-bank-ltd.gif" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>Eastern Bank Ltd. (Principal Branch)</h6>
                            <h6>A/C: 1011350570245, Routing: 095275357 </h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/IBBL_LOGO.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>Islami Bank Bangladesh Ltd. (Motijheel Branch)</h6>
                            <h6>A/C: 20503110900003103, Routing: 125274244 </h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/Bracbank-logo.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>BRAC Bank Ltd. (Graphics Building Branch, Motijheel)</h6>
                            <h6>A/C No:1513204465100005, Routing: 060272532 </h6>
                        </span>
                    </div>
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/sibl-logo.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>Social Islami Bank Ltd. (Dhaka South, Principal Branch</h6>
                            <h6>A/C: 0021360002535, Routing: 195275357</h6>
                        </span>
                    </div>
                    
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/IFIC-Logo.png" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6>Rni Securities Limited</h6>
                            <h6>IFIC Bank Ltd. (Dhaka South, Stock Exchange Branch)</h6>
                            <h6>A/C: 1090679752044, Routing: 120271708</h6>
                        </span>
                    </div>--><span class="acc">
                    <h5 style="color:green;">Account Name: RNI Securities Ltd. </h5> <br> </span>
                    
                     <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/alarafah.jpeg" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6><b>1. Al-Arafah Islami Bank Ltd. </b></h6>
                            <h6>Motijheel Branch</h6>
                            <h6>A/C # 0021020048910 </h6> 
                            <h6>Routing no.# 015274247</h6>
                        </span>
                    </div>
                    
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/dbbl.jpeg" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6><b>4. Dutch-Bangla Bank Limited </b></h6>
                            <h6>Motijheel For Ex Branch</h6>
                            <h6>A/C # 105.110.0044491 </h6> 
                            <h6>Routing no.# 090274309</h6>
                        </span>
                    </div>
                    
                    <!-- <div class="deposit-account">-->
                    <!--    <span class="acc">-->
                    <!--        <img src="{{ asset('public/frontend') }}/bank/mutualtrash.jpeg" alt="bank logo">-->
                    <!--    </span>-->
                    <!--    <span class="acc">-->
                    <!--        <h6><b>2. Mutual Trush Bank Ltd. </b></h6>-->
                    <!--        <h6>Elephant Road Branch</h6>-->
                    <!--        <h6>A/C # 0380210004347 </h6> -->
                    <!--        <h6>Routing no.# 145261333</h6>-->
                    <!--    </span>-->
                    <!--</div>-->
                    
                    <div class="deposit-account">
                        <span class="acc">
                            <img src="{{ asset('public/frontend') }}/bank/ucb.jpeg" alt="bank logo">
                        </span>
                        <span class="acc">
                            <h6><b>3. United Commercial Bank Ltd. </b></h6>
                            <h6>Mohammadpur Branch</h6>
                            <h6>A/C # 0502101000002744 </h6> 
                            <h6>Routing no.# 245263286</h6>
                        </span>
                    </div>
                
                   
                    
                   <hr>
                   <p><b>(Sent deposit slip: Email# rnisecurities@yahoo.com)</b></p>
                   <hr>
                    
                   
                    
                    
                    
                    
                    
                    
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
