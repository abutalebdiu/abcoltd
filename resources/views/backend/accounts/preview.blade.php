<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Withdrawal Receipt</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO%20Asset%2013ldpi.png">
   <style>
        /* page */
        html {
            font: 15px/1 'Open Sans', sans-serif;
            font-weight: 500;
            overflow: auto;
            padding: 0.5in;
            background: #999;
            cursor: default;
        }

        body {
            box-sizing: border-box;
            height: 11in;
            margin: 0 auto;
            overflow: hidden;
            padding: 0.5in;
            width: 8.5in;
            background: #FFF;
            border-radius: 1px;
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        }

        @media    print {

            * {
                -webkit-print-color-adjust: exact;
            }

            html {
                background: none;
                padding: 0;
            }

            body {
                box-shadow: none;
                margin: 0;
            }

        }

        @page    {
            margin: 0;
        }

        /* header */
        p{
            margin:5px 0;
            padding:0;
        }
        header {
            text-align: center;
            display: flex;
            align-items: center;
        }
        header img{
            margin-right: 110px;
            width: 94px;
        }
        header h2 {
            font-size: 26px;
            margin: 0;
        }

        header h6 {
            font-size: 17px;
            margin: 0;
            border-style: double solid solid double;
            border-color: #5d5d5d;
            border-width: 4px;
            width: 258px;
            margin: 0 auto;
            margin-top: 6px;
            padding: 5px;
        }

        /*main*/
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .section2 {
            margin-top: 3px;
        }

        .date-head {
            float: left;
            width: 50%;
        }

        .date-head:last-child {
            text-align: right;
            align-items: center;
            margin-top: 15px;
        }

        .div3 {
            float: left;
            width: 50%;
        }

        .div3 input {
            width: 280px;
        }

        .div4-1 {
            float: left;
            width: 70%
        }

        .div4-2 {
            float: left;
            width: 30%
        }

        .div4-2 input {
            width: 118px;
        }

        .section6 p {
            line-height: 22px;
        }

        .section7 p {
            width: 200px;
            border-top: 2px solid #000000;
            padding-top: 5px;
            /*margin-top: 60px;*/
            line-height: 25px;
        }

        .section8 p {
            width: 200px;
            border-top: 2px solid #000000;
            padding-top: 5px;
            margin-top: 60px;
            line-height: 25px;
        }

        .sign1 {
            float: left;
            width: 50%;
        }

        .sign2 {
            float: left;
            width: 50%;
            text-align: center;
        }

        .logo img {
            margin-top: 100px;
        }

        /*main end*/

    </style>
</head>
 
 

<body>

    <header class="clearfix">
        <div>
           <!-- <img src="{{ asset('public') }}/images/photo/apps.png" alt="">-->
            <img src="https://rnisecuritiesltd.com/public/frontend/images/logo/logo.png" alt="logo">
        </div>
        <div>
            <h2>RNI SECURITIES LTD.</h2>
            <h6>Cheque Requisition Slip</h6>
        </div>
    </header>

    <section class="section2 clearfix">
        <div class="date-head">
            <p>Date : &nbsp; {{ $withdraw->created_at->format('d/m/Y') }}</p>
        </div>
        <div class="date-head">
            <input type="checkbox" id="BEFTN">
            <label for="BEFTN" style="margin-right: 15px;">BEFTN</label>
            <input type="checkbox" id="Cheque">
            <label for="Cheque">Cheque</label>
        </div>
    </section>
    <section class="clearfix">
        <p> I/We &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b><u>{{ $withdraw->user?$withdraw->user->name:'' }} </u> </b> </p>
    </section>
    <section class="section3 clearfix">
        <div class="div3">
            <p>
                Client Code no: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b> {{ $withdraw->code }}  </b>
            </p>
        </div>
        <div class="div3">
            <p>
                Amount: 
                <input type="text" value="{{ $withdraw->withdraw }} tk">
            </p>
        </div>
    </section>
    <section class="section3 clearfix">
        <div class="div4-1">
            <p>
                Taka (In words):  
                
                @php
                
              

$number = $withdraw->withdraw;
$locale = 'en_US';
$fmt = numfmt_create($locale, NumberFormatter::SPELLOUT);
$in_words = numfmt_format($fmt, $number);

echo $in_words; 
                
                @endphp  
                
                tk only
                 
            </p>
        </div>
        <div class="div4-2">
            <p>
                Cheque no:
                <input type="text">
            </p>
        </div>
    </section>
    <section class="section6">
        <p>
            Request you to issue Cheque/ BEFTN in according to rules and regulations of the Dhaka Stock Exchange Ltd. <br>
            Thanking you,
        </p>
    </section>
 
    <section class="section7 clearfix">
        
        <img src="{{ asset($withdraw->sign) }}" alt="" width="160px" height="60px">
        
        
        <p>
            Signature of
            Client/Authorized Person
        </p>
    </section>
    <section class="section8 clearfix">  
        <div class="sign1">
            <p>
                Signature Verified By
            </p>
        </div>
        <div class="sign2"> <br>
            <p>
                Approved By

            </p>
        </div>
    </section>

</body>

</html>
