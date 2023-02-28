<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BO Opening</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO%20Asset%2013ldpi.png">
    <style>
        /* page */
        html {
            font: 11px/1 'Open Sans', sans-serif;
            overflow: auto;
            padding: 0.5in;
            background: #999;
            cursor: default;
        }

        body {
            box-sizing: border-box;
            height: auto;
            margin: 0 auto;
            overflow: hidden;
            padding: 0.5in;
            width: 8.5in;
            background: #FFF;
            border-radius: 1px;
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
        }

        @media print {

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
                padding-bottom:0;
            }

        }

        @page {
            margin: 0;
        }

        /* header */
        /* main css */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        header img {
            width: 100%;
            height: 83px;
        }

        .no-date {
            padding: 7px 0;
        }

        .application_no {
            width: 50%;
            float: left;
        }

        .date {
            width: 50%;
            float: left;
            text-align: right;
        }

        .section2 {
            padding: 6px 0;
        }

        .box {
            border: 1px solid #000;
            padding: 2px;
        }

        .boxbox1 {
            float: left;
            width: 50%;
        }

        .boxbox2 {
            float: left;
            width: 50%;
            text-align: right;
        }

        .boxbox1 span {
            padding: 0 2px;
        }

        .boxbox2 span {
            padding: 0 2px;
        }

        .box2 {
            padding: 7px;
            border: 1px solid #000;
        }

        .margin {
            display: block;
            float: right;
        }

        .box2box1 {
            float: left;
            width: 20%;
        }

        .box2box2 {
            float: left;
            width: 50%;
        }

        .box2box3 {
            float: left;
            width: 30%;
            text-align: right;
        }

        .box2box3 table {
            float: right;
        }
        

        table,
        th,
        td {
            border: 1px solid #717171;
            border-collapse: collapse;
        }

        /*table tr td {*/
        /*    padding: 0;*/
        /*    min-width: 19px;*/
        /*    height: 14px;*/
        /*    text-align: center;*/
        /*}*/

        .learge tr td {
            padding: 0;
            min-width: 19px;
            height: 17px;
            text-align: center;
        }

        .box2box1 p {
            margin: 0;
        }

        .bo_id1 {
            float: left;
            width: 50%;
        }

        .bo_id2 {
            float: left;
            width: 50%;
            margin-top: 9px;
        }

        .boid2_table {
            padding-top: 1ppx;
        }

        .bo_id1 p {
            margin: 0;
        }

        .box2box3 p {
            margin: 0;
        }

        .request-header .main {
            padding-left: 10px;
            margin: 4px 0px;
        }

        .box-header {
            margin: 0;
            padding: 2px;
            background: #99CCFF;
            margin-bottom: 4px;

        }

        .first_appli_box {
            padding: 7px 2px;
            border: 1px solid #000;
        }

        .first_appli_box p {
            margin: 0;
        }

        .short_name {
            float: left;
            width: 82%;
            padding-top: 7px;
        }

        .title {
            float: left;
            width: 17%;
            text-align: right;
            padding-top: 7px;
        }

        .title table {
            float: right;
        }

        .apply_text {
            padding-top: 5px;
        }

        .apply_dot {
            text-align: right;
        }

        .gender_head {
            padding-top: 5px;
        }

        .gender_head span {
            margin-right: 10px;
        }

        .gender_header {
            margin-right: 25px !important;
        }

        .occupation {
            text-align: right;
        }

        .py_8 {
            padding: 5px 0;
        }

        .pb_8 {
            padding-bottom: 5px;
        }

        .my_5 {
            margin: 4px 0 4px 0;
        }

        .p_5 {
            padding: 4px;
        }

        .mr_5 {
            margin-right: 5px;
        }

        .contact_box {
            border: 1px solid #000;
        }

        .bank1 {
            width: 32%;
            float: left;
        }

        .bank1 span {
            margin-right: 5px;
        }

        .bank2 {
            width: 30%;
            float: left;
        }

        .bank2 span {
            margin-right: 5px;
        }

        .bank3 {
            width: 38%;
            float: left;
        }

        .bank3 span {
            padding-top: 9px;
            display: inline-block;
        }

        .other1 {
            float: left;
            width: 30%;
        }

        .other2 {
            float: left;
            width: 30%;
            margin-top: 8px;
        }

        .other3 {
            float: left;
            width: 40%;
        }

        .dateofdate {
            float: left;
            width: 50%;
            padding-top: 5px;
        }

        .dateof_table {
            float: left;
            width: 50%;
        }

        .input_custom {
            width: 300px;
            outline: none;
        }

        .other_reg {
            float: left;
            width: 70%;
        }

        .other_date {
            float: left;
            width: 30%;
        }

        .joint1 {
            float: left;
            width: 80%
        }

        .joint2 {
            float: left;
            width: 20%;
            text-align: right;
        }

        .joint2 table {
            float: right;
        }

        .account1 {
            float: left;
        }

        .Nominees {
            font-size: 12px;
            line-height: 15px;
            text-align: justify;
            margin: 0;
        }

        .contact1 {
            float: left;
            width: 50%;
        }

        .photo_single {
            float: left;
            width: 33.33%;
        }

        .photo-box {
            width: 100px;
            border: 1px solid #000;
            padding: 5px;
            margin: 15px auto;
            height: 100px;
            text-align: center;
            color: #6d6c6c;
            font-size: 11px;
        }
        .photo-box img{
            height:100%;
        }
        .photo_footer {
            width: 33.33%;
            float: left;
            text-align: center;
        }

        .photo_footer_box {
            width: 140px;
            display: inline-block;
            height: auto;
            margin: 0 auto;
            font-size: 11px;
            color: #6d6c6c;
            margin-top: 8px;
        }

        .stand1 {
            margin-right: 30px;

        }

        .custom-table table {
            width: 100%;
        }

        .custom-table table tr th {
            padding: 4px;
        }

        .custom-table table tr td {
            padding: 6px 0;
        }

        .custom-table table tr td:first-child {
            width: 130px;
        }

        .custom-table table tr td:last-child {
            width: 250px;
        }

        .size12 {
            font-size: 12px;
        }

        .introduction1 {
            float: left;
            width: 50%;
        }

        .center {
            display: block;
            text-align: center;
        }

        .introduction2 span {
            margin-left: 20px;
        }

        .introduction2 table {
            float: right;
        }

        .page2_1 {
            float: left;
            width: 50%;
            padding-bottom: 30px;
            background: #fff;

        }

        .page2_2 {
            float: left;
            width: 50%;
            text-align: right;
            padding-bottom: 30px;
            background: #fff;
        }

        .second-section-image {
            padding-top: 30px;
            padding-bottom: 8px;
        }

        .second-page-head {
            margin-top: 30px;
        }

        .second-page-head h2 {
            margin: 2px 0;
            text-align: center;
            font-size: 14px;
        }

        .second-2nd p {
            font-size: 12px;
            line-height: 16px;
        }

        .second-txt ul {
            padding: 0;
            margin: 0;
            margin-left: 15px;
        }

        .second-txt ul li {
            list-style: decimal;
        }

        .second-txt ul li p {
            font-size: 12px;
            line-height: 16px;
        }
        .second-sub > li{
            list-style:lower-alpha !important;
        }
        .second-sub > li p{
            font-size: 12px;
            line-height: 16px;
        }
        .child-sub >li {
            list-style:lower-roman !important;
        }
        .table table,tr,td{
            border-collapse: collapse;
        }
        .table table{
            width: 100%;
        }
        .table table tr td{
            padding: 4px;
            font-weight: bold;
        }
        
        
        /*NOMINEE CSS*/

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .header-top>div {
            float: left;
            width: 50%;
            font-size: 20px;
        }

        .header-top {
            padding-bottom: 25px;
        }

        .header-top .ht-right {
            text-align: right;
        }

        .header h2 {
            text-align: center;
            font-size: 20px;
            display: block;
        }

        .header p {
            line-height: 24px;
        }

        .head-bottom>div {
            float: left;
            width: 50%;
        }

        .head-bottom>.right {
            text-align: right;
        }

        .box {
            border: 1px solid #000000;
            padding: 8px;
            margin: 10px 0;
        }

        table {
            border-collapse: collapse;
        }

        table tr td,th {
            border: 1px solid #000000;
            height: 14px;
            width: 16px;
            text-align: center;
        }

        .row1>div {
            float: left;
            padding: 5px 0;
        }

        .row1>div:first-child {
            margin-right: 10px;
        }

        .row1>div:last-child {
            float: right;
        }

        .py-5 {
            padding: 5px 0;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .py-10 {
            padding: 10px 0;
        }

        .mb-20 {
            padding-top: 20px;
        }

        .row1 div span {
            display: inline-block;
            padding-bottom: 5px;
        }

        .nominee-details h4 {
            font-weight: bolder;
            line-height: 20px;
            margin: 0;
        }

        .nominee-details>p {
            background: #9ACCFF;
            padding: 6px;
            margin: 0;
            font-weight: bold;
            margin: 5px 0;
        }

        .nominee-details .box h5 {
            font-weight: bolder;
            font-size: 16px;
            margin: 0;
        }

        .nominee-details .box p {
            margin: 0;
            padding: 5px 0;
        }

        .row3>div span {
            font-size: 14px;
            line-height: 18px;
            padding-top: 5px;
            display: inline-block;
        }

        .row3 {
            display: flex;
            align-items: flex-end;
        }

        .row3>div:first-child {
            float: left;
            width: 80%;
        }

        .row3>div:last-child {
            float: left;
            width: 20%;
        }

        .row4>div:first-child {
            float: left;
            width: 70%;
        }

        .row4>div:last-child {
            float: left;
            width: 30%;
        }

        .row6>div {
            float: left;
            width: 25%;
        }

        .row7>div {
            float: left;
            width: 25%;
        }

        .row9>div:first-child {
            float: left;
            width: 32%;
        }

        .row9>div:nth-child(2) {
            float: left;
            width: 22%;
        }

        .row9>div:last-child {
            float: left;
            width: 46%;
            text-align: right;
        }

        .row9 table {
            display: inline-block;
        }

        .row10>div {
            float: left;
            width: 33.33%;
        }

        .row10>div p {
            font-size: 10px;
        }

        .photo-boxx > div {
            float: left;
            width: 23.2%;
            border: 1px solid #000000;
            margin: 5px;
            height: 125px;
        }
        .girdient-name > div{
            float: left;
            width: 25%;
        }
        .girdient-name > div p{
            text-align: center;
            margin: 0;
            font-weight: bold;
        }
        .footer{
            padding-top: 30px;
        }
        .footer table{
            width: 100%;
        }
        .footer table td{
            padding: 4px;
            text-align: left;
        }
        .bottom-dot{
            border-bottom: 2px dotted #000000;
        }
        .photo{
            height : 100%;
        }
        .text-center{
            text-align:center;
        }
        
        /*NOMINEE CSS END*/






        /* end main css */

    </style>
</head>

<body>

    <header>
        <img src="{{ asset('public/frontend/images') }}/head2.png" alt="header">
    </header>
    <section class="no-date">
        <div class="application_no">
            <span>Application No : {{ $boopen->uid }} </span>
        </div>
        <div class="date">
            <span>Date (DDMMYYYY) : {{ $boopen->created_at? $boopen->created_at->format('d-m-Y'): '' }}</span>
        </div>
    </section>
    <section class="section2">
        <span>Please Tick whichever is applicable</span>
        <div class="box clearfix">
            <div class="boxbox1">
                <b>BO Category:</b>
                <span>Regular <input type="checkbox"></span>
                <span>Omnibus <input type="checkbox"></span>
                <span>Clearing <input type="checkbox"></span>
            </div>
            <div class="boxbox2">
                <b>BO Type : </b>
                <span>Individual <input type="checkbox"></span>
                <span>Company <input type="checkbox"></span>
                <span>Joint Holder <input type="checkbox"></span>

            </div>
        </div>

    </section>
    <section class="section3 clearfix">
        <div class="box2 clearfix">
            <div class="clearfix">
                <span class="">Name of CDBL Participant (Up to 99 Characters) </span>
                <p class="margin">:  <b> RNI Securities Limited  </b></p>
            </div>
            <div class="box2-section2 clearfix">
                <div class="box2box1">
                    <p>CDBL Participant ID</p>
                    <table>
                        <tr>
                            <td>2</td>
                            <td>4</td>
                            <td>3</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div class="box2box2">
                    <div class="bo_id1">
                        <p>BO ID:</p>
                        <div>
                            <table>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="bo_id2">
                        <div class="boid2_table">
                            <table>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="box2box3">
                    <p>Date Account Opened (DD-MM-YYYY)</p>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="main">I / We request you to open a Depository Account in my / our name as per the following details:</h3>
            <h3 class="box-header">1. First Applicant</h3>
        </div>
        <div class="first_appli_box  clearfix">
            <p>Name in Full of Account Holder (Up to 99 Characters)  :  {{ $boopen->name }} </p>
            <div class="clearfix">
                <div class="short_name clearfix">
                    <p>Short Name of Account Holder ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters)</p>
                    <table class="learge">
                           <tr>

                            @php

                            $broken =str_split($boopen->name);

                            $arrlength = count($broken);

                            $totallenght = 28 -  $arrlength;


                            @endphp
                            

                            @for($x = 0; $x < $arrlength; $x++)  
                             <td> {{   $broken[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenght; $y++)  
                             <td>  </td>
                               
                            @endfor
                      
                            

                        </tr>
                    </table>
                </div>
                <div class="title clearfix">
                    <p>Title i.e. Mr. /Mrs. /Ms. /Dr</p>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="apply_text clearfix">
                <span><b>(In case of a Company/Firm/Statutory Body)</b> Name of Contact Person </span>
            </div>
            <div class="apply_dot">
                <span> ………………………………………………………………………………………………………</span>
            </div>
            <div class="gender_head">
                <span class="gender_header"><b>In Case of Individual</b> </span>
                <span>Male <input type="checkbox" @if($boopen->sex==1) checked @endif></span>
                <span>Female <input type="checkbox"  @if($boopen->sex==2) checked @endif></span>
            </div>
            <div class="occupation pb_8">
                <span>Occupation (30Characters): …… <b> {{ $boopen->profession }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </span>
            </div>
            <div class="py_8">
                <span><i> Father’s / Husband’s Name: </i> <b>{{ $boopen->father}}</b></span>
            </div>
            <div class="py_8">
                <span><i> Mother’s Name: </i> <b>{{ $boopen->mother}}</b> </span>
            </div>
        </div>
    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">2. Contact Details:</h3>
        <div class="contact_box p_5">
            <div class="py_8">
                <span>Address: <b>{{ $boopen->address}}</b> </span>
            </div>
            <div class="py_8">
                <span>City: <b>{{ $boopen->city }}</b> &nbsp;&nbsp; Post Code: <b>{{$boopen->zip_code }}</b> &nbsp;&nbsp;State / Division: <b>{{$boopen->division }}</b> &nbsp;&nbsp;Country: <b>{{$boopen->country}}</b> Telephone…………………………</span>
            </div>
            <div class="py_8">
                <span>Mobile Phone: <b>{{ $boopen->mobile }}</b> &nbsp;&nbsp; Fax: <b>{{ $boopen->fax }}</b> &nbsp;&nbsp; E-mail: <b>{{ $boopen->email }}</b> &nbsp;&nbsp; </span>
            </div>
        </div>
    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">3. Passport Details</h3>
        <div class="contact_box p_5">
            <div class="py_8">
                <i>Passport No</i><b>{{ $boopen->passport }}</b> &nbsp;&nbsp; <i>Issue Place</i>………………………………… <i>Issue Date</i>………………………… <i>Expiry Date</i>…………………………………
            </div>
        </div>
    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">4. Bank Details</h3>
        <div class="contact_box p_5">
            <div class="py_8">
                Routing Number: <b>{{ $boopen->routing }}</b> &nbsp;&nbsp; Bank Account Number: <b>{{ $boopen->account }}</b> &nbsp;&nbsp;
            </div>
            <div class="py_8">
                Bank Name: <b>{{ $boopen->bank }}</b> &nbsp;&nbsp; Branch Name: <b>{{ $boopen->branch }}</b> &nbsp;&nbsp; District Name: <b>{{ $boopen->district }}</b> &nbsp;&nbsp;
            </div>
            <div class="py_8">
                Bank Identifier Code (BIC)……………………………………… SWIFT Code…………………………… International Bank A/C No.(IBAN)………………………………
            </div>
            <div class="py_8 clearfix">
                <div class="bank1 clearfix">
                    <span class="bank3_name">Electronic Dividend Credit:</span>
                    <span>Yes <input type="checkbox"></span>
                    <span>No <input type="checkbox"></span>
                </div>
                <div class="bank2 clearfix">
                    <span class="bank3_name">Tax Exemption if any:</span>
                    <span>Yes <input type="checkbox"></span>
                    <span>No <input type="checkbox"></span>
                </div>
                <div class="bank3">
                    <span><i>TIN / Tax ID :</i>……………………………………………………</span>
                </div>
            </div>
        </div>
    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">5. Others Information </h3>
        <div class="contact_box p_5">
            <div class="py_8 clearfix">
                <span class="other1">
                    <span><b>Residency:</b></span>
                    <span>Resident<input type="checkbox"></span>
                    <span>Non Resident<input type="checkbox"></span>
                </span>
                <span class="other2">
                    Nationality: <b>{{ $boopen->country }}</b> &nbsp;&nbsp;
                </span>
                <span class="other3">
                    <span class="dateofdate">Date Of Birth (DDMMYYYY)</span>
                    <span class="fateof_table">
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </span>
                </span>
            </div>
            <div class="py_8 clearfix">
                <span class="other_line1">
                    <span class="mr_5">Statement Cycle Code:</span>
                    <span class="mr_5">Daily<input type="checkbox"></span>
                    <span class="mr_5">Weekly<input type="checkbox"></span>
                    <span class="mr_5">Fortnightly<input type="checkbox"></span>
                    <span class="mr_5">Monthly<input type="checkbox"></span>
                    <span class="mr_5">Other (Please Specify) ………………………………………………………………</span>
                </span>
            </div>
            <div class="py_8 clearfix">
                <span>Internal Ref. No (To be filled in by CDBL Participant) ………………………………………………………………… </span>
            </div>
            <div class="py_8 clearfix">
                <span class="mr_5">National ID Card Number: <b>{{ $boopen->nid }}</b> &nbsp;&nbsp;</span>
                <!-- <span><input type="text" class="input_custom"></span> -->
            </div>
            <div class="clearfix">
                <span><b>In Case of Company:</b></span>
            </div>
            <div class="clearfix">
                <span class="other_reg py_8">
                    <span>Registration No………………………………………………………………………………………</span>
                </span>
                <span class="other_date">
                    <span>Date of Registration (DDMMYYYY)</span>
                    <span>
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </span>

                </span>
            </div>

        </div>
    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">6. Joint Applicant (Second Account Holder) </h3>
        <div class="contact_box p_5">
            <div class="py_8 clearfix">
                <span>Name in Full (Up to 99 Characters) : <b>{{ $boopen->jh_name }}</b> &nbsp;&nbsp; </span>
            </div>
            <div class="clearfix">
                <span class="joint1">
                    <span>Short Name of Account Holder ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters)</span>
                    <span>
                        <table class="learge">
                             <tr>

                            @php

                            $broken =str_split($boopen->name);

                            $arrlength = count($broken);

                            $totallenght = 28 -  $arrlength;


                            @endphp
                            

                            @for($x = 0; $x < $arrlength; $x++)  
                             <td> {{   $broken[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenght; $y++)  
                             <td>  </td>
                               
                            @endfor
                      
                            

                        </tr>
                        </table>
                    </span>
                </span>
                <span class="joint2">
                    <span><i>Title i.e. Mr. /Mrs. /Ms. /Dr.</i></span>
                    <span>
                        <table>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </span>
                </span>
            </div>

        </div>
    </section>
    <br>
    <br>
    <br>
    <br>

    <section class="clearfix">
        <span class="page2_1">
            <h3>CDBL Bye Laws</h3>
        </span>
        <span class="page2_2">
            <h3>Form 02 </h3>
        </span>
    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header my_5">7. Account Link Request</h3>
        </div>
        <div class="pb_8 clearfix">
            <span class="mr_5"><i>Would you like to create a link to your existing Depository Account ?</i></span>
            <span class="mr_5">Yes <input type="checkbox"></span>
            <span class="mr_5">No <input type="checkbox"></span>
        </div>
        <div>
            <span class="account1 py_8 mr_5"><i>If yes, then please provide the Depository BO Account Code ( 8 Digits):</i></span>
            <span class="account1 mr_5">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </span>
        </div>
    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header">8. Nominees/ Heirs</h3>
        </div>
        <div class="pb_8 clearfix">
            <p class="mr_5 Nominees">If account holder(s) wish to nominate person(s) who will be entitled to receive securities outstanding in the account in the event of the death of
                the sole account holder / all the joint account holders, a separate nomination Form - 23 must be fiiled up and signed by all account holders and
                the nominees giving names of nominees , relationship with first account holder, percentage distribution and contact details. If any nominee is a
                minor, guardian’s name, address, relationship with nominee has also to be provided. </p>

        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header">9. Power of Attorney (POA)</h3>
        </div>
        <div class="pb_8 clearfix">
            <p class="mr_5 Nominees">If account holder(s) wish to give a Power of Attorney (POA) to someone to operate the account, a separate Form - 20 must be fiiled up and
                signed by all account holders giving the name, contact details etc. of the POA holder and a POA document lodged with the form. </p>

        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header">10. To be filled in by the Stock Broker / Stock Exchange in case the application is for opening a Clearing Account</h3>
        </div>
        <div class="contact_box p_5 clearfix">
            <span class="contact1">
                <span class="mr_5">Exchange Name:</span>
                <span class="mr_5">DSE <input type="checkbox"></span>
                <span class="mr_5">Trading ID……………………</span>
            </span>
            <span class="contact1">
                <span class="mr_5">CSE <input type="checkbox"></span>
                <span class="mr_5">Trading ID…………………………………….</span>
            </span>
        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header my_5">11. Photograph</h3>
        </div>
        <div class="contact_box p_5 clearfix">
            <span class="photo_single">
                <div class="photo-box">
                        <img src="{{ asset($boopen->photo) }}" alt="" width="100%">
                </div>
            </span>
            <span class="photo_single">
                <div class="photo-box">
  
                        <img src="{{ asset($boopen->jh_photo) }}" alt="" width="100%">

                </div>
            </span>
            <span class="photo_single">
                <div class="photo-box">
                    <p>
                        Please paste
                        recent passport
                        size Photograph of
                        1
                        st Applicant or
                        Authorized
                        Signatory in case
                        of Limited Co. Only
                    </p>
                </div>
            </span>
        </div>
        <div class="clearfix">
            <span class="photo_footer clearfix">
                <span class="photo_footer_box">
                    1st Applicant or Authorized
                    Signatory in case of Ltd Co.
                </span>
            </span>
            <span class="photo_footer clearfix">
                <span class="photo_footer_box">
                    2nd Applicant or Authorized
                    Signatory in case of Ltd Co
                </span>
            </span>
            <span class="photo_footer clearfix">
                <span class="photo_footer_box">
                    Authorized Signatory in
                    case of Ltd Co. Only
                </span>
            </span>
        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header my_5">12. Standing Instructions</h3>
        </div>
        <div class="pb_8 clearfix">
            <span class="stand1"> I/We authorize you to receive facsimile (fax) transfer instructions for delivery</span>
            <span class="stand1">Yes <input type="checkbox"></span>
            <span class="stand1">No <input type="checkbox"></span>

        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header">13. DECLARATION</h3>
        </div>
        <div class="clearfix">
            <p class="mr_5 Nominees">The rules and regulations of the Depository and CDBL Participant pertaining to an account which are in force now have been read by me/us and
                I/we have understood the same and I/we agree to abide by and to be bound by the rules as are in force from time to time for such accounts. I/We
                also declare that the particulars given by me/us are true to the best of my/our knowledge as on the date of making such application. I/We further
                agree that any false/misleading information given by me/us or suppression of any material fact will render my/our account liable for termination
                and further action.</p>

        </div>
        <div class="custom-table">
            <table>
                <tr>
                    <th>Applicants </th>
                    <th>Name of applicants / Authorized signatories in case of ltd Co</th>
                    <th>Signature with date</th>
                </tr>
                <tr>
                    <td>First Applicant </td>
                    <td><b>{{ $boopen->name }}</b> &nbsp;&nbsp;</td>
                    <td><img src="{{ asset($boopen->sign) }}" alt="" height='40px' width="100px"></td>
                </tr>
                <tr>
                    <td>Second Applicant </td>
                    <td><b>{{ $boopen->jh_name }}</b> &nbsp;&nbsp;</td>
                    <td><img src="{{ asset($boopen->jh_sign) }}" alt="" height='40px' width="100px"></td>
                </tr>
                <tr>
                    <td>3rd Signatory (Ltd Co. only) </td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

    </section>
    <section class="request-section clearfix">
        <div class="request-header clearfix">
            <h3 class="box-header my_5">14. Special Instructions on operation of Joint Account</h3>
        </div>
        <div class="pb_8 clearfix">
            <span class="stand1 size12"> <input type="checkbox"> Either or Survivor.</span>
            <span class="stand1 size12"><input type="checkbox"> Any one Can operate</span>
            <span class="stand1 size12"><input type="checkbox"> Any two will operate jointly</span>
        </div>
        <div class="pb_8 clearfix">
            <span class="stand1 size12"> <input type="checkbox">
                Account will be operated by ________________________________________________
                with any one of the others.
            </span>
        </div>

    </section>
    <section class="Contact-section clearfix">
        <h3 class="box-header my_5">15. Introduction </h3>
        <div class="contact_box p_5">
            <div class="py_8 clearfix">
                <span>Introduction by an existing account holder of …………………………………………………… Depository Participant’s Name …………………………………………</span>
            </div>
            <div class="py_8 clearfix">
                <span>I confirm the identity, occupation and address of the applicant(s) ………………………………………………………………………………………………………………</span>
            </div>
            <div class="introduction clearfix">
                <span class="introduction1">
                    <span class="size12">………………………………………………………………Account ID</span>
                    <span class="center">(Signature of Introducer) </span>
                </span>
                <span class="introduction1 introduction2">
                    <span>Introducer's Name</span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </span>
            </div>

        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
  
  
    <section>
        <div class="second-page-head">
            <h2>Central Depository Bangladesh Limited (CDBL) </h2>
            <h2>CDepository Account (BO Account) opened with CDBL Participant</h2>
            <h2>Terms & Conditions – Bye Laws 7.3.3(c) </h2>
        </div>
    </section>
    <section class="second-2nd">
        <div>
            <p>
                CDBL Participant, Dhaka / Chittagong / Sylhet, Bangladesh
            </p>
            <p>Dear Sir,</p>
            <p>
                Please open a Depository account (BO Account) in my/our names(s) on the terms and conditions set out bellow. In
                consideration of BD Sunlife Securities LTD..(the “CDBL
                Participant”) opening the account providing depository account facilities to me/us, I/we have signed the BO Account Opening
                Form as a token of acceptance of the terms and conditions set out bellow.
            </p>
        </div>
    </section>
    <section class="second-txt">
        <div>
            <ul>
                <li>
                    <p>
                        I/we agree to be bound by The Depositories Act, 1999, Depositories Regulations, 2000, The Depository (User)
                        Regulations 2003, and abide by the Bye Laws and Operating Instructions issued from time to time by CDBL.
                    </p>
                </li>
                <li>
                    <p>
                        CDBL shall allocate a unique identification number to me/us (Account Holder BO ID) for the CDBL Participant to
                        maintain a separate Account for me/us, unless the I/we instructs the CDBL Participant to keep the securities in an
                        Omnibus Account of the CDBL Participant. The CDBL Participant shall however ensure that my/our securities shall not
                        be mixed with the CDBL Participant’s own securities.
                    </p>
                </li>
                <li>
                    <p>

                        I/we agree to pay such fees, charges and deposits to the CDBL Participant, as may be mutually agreed upon, for the
                        purpose of opening and maintaining my/our account, for carrying out the instructions and for rendering such other
                        services as are incidental or consequential to my/our holding securities in and transacting through the said depository
                        account with the CDBL Participant.

                    </p>
                </li>
                <li>
                    <p>I/we shall be responsible for:</p>
                    <ul class="second-sub">
                        <li>
                            <p>The veracity of all statements and particulars set out in the account opening form, supporting or accompanying documents; </p>
                        </li>
                        <li>
                            <p>
                                The authenticity and genuineness of all certificates and/or documents submitted to the CDBL Participant along with
                            or in support of the account opening form or subsequently for dematerialization;
                            </p>
                        </li>
                        <li>
                            <p>Title to the securities submitted to the CDBL Participant from time to time for dematerialization;</p>
                        </li>
                        <li>
                            <p>
                                Ensuring at all times that the securities to the credit of my/our account are sufficient to meet the instructions issued
to the CDBL Participant for effecting any transaction / transfer;
                            </p>
                        </li>
                        <li>
                            <p>
                                Informing the CDBL Participant at the earliest of any changes in my/our account particulars such as address, bank
details, status, authorizations, mandates, nomination, signature, etc.;
                            </p>
                        </li>
                        <li>
                            <p>
                                 Furnishing accurate identification details whilst subscribing to any issue of securities.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>

                         I/we shall notify the CDBL Participant of any change in the particulars set out in the application form submitted to the
CDBL Participant at the time of opening the account or furnished to the CDBL Participant from time to time at the
earliest. The CDBL Participant shall not be liable or responsible for any loss that may be caused to me/us by reason of
my/our failure to intimate such change to the CDBL Participant at the earliest.

                    </p>
                </li>
                <li>
                    <p>
                        Where I/we have executed a BO Account Nomination Form
                    </p>
                    <ul class="second-sub">
                        <li>
                            <p>
                                In the event of my/our death, the nominee shall receive/draw the securities held in my/our account
                            </p>

                        </li>
                        <li>
                            <p>
                                In the event, the nominee so authorised remains a minor at the time of my/our death, the legal guardian is
authorised to receive/draw the securities held in my/our account.
                            </p>
                        </li>
                        <li>
                            <p>
                                The nominee so authorised, shall be entitled to all my/our account to the exclusion of all other persons i.e., my/our
heirs, executors and administrators and all other persons claiming through or under me/us and delivery of securities
to the nominee in pursuance of this authority shall be binding on all other persons.
                            </p>
                        </li>
                    </ul>

                </li>
                <li>
                    <p>
                         I/we may at any time call upon the CDBL Participant to close my/our account with the CDBL Participant provided no
instructions remain pending or unexecuted and no fees or charges remain payable by me/us to the CDBL Participant. In
such event I/we may close my/our account by executing the Account Closing Form if no balances are standing to my/our
credit in the account. In case any balances of securities exist in the account the account may be closed by me/us in one
of the following ways:
                    </p>


                    <ul class="second-sub">
                        <li>
                            <p>By rematerialization of all existing balances in my/our account;</p>
                        </li>

                        <li>
                            <p>By transfer of all existing balances in my/our account to one or more of my/our other account(s) held with any other
CDBL Participant(s); </p>
                        </li>
                        
                                            
                                        <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        
                        <li>
                            <p>
                                By rematerialization of a part of the existing balances in my/our account and by transferring the rest to one or more
of my /our other account(s) with any other CDBL Participant(s);
                            </p>
                        </li>
                    </ul>

                </li>
                <li>
                    <p>
                        CDBL Participant covenants that it shall
                    </p>
                    <ul class="second-sub">
                        <li>
                            <p>
                                act only on the instructions or mandate of the Account Holder or that of such person(s) as may have been duly
authorized by the Account Holder in that behalf .

                            </p>
                        </li>
                        <li>
                            <p>
                                not effect any debit or credit to and from the account of the Account Holder without appropriate instructions from the
Account Holder.
                            </p>
                        </li>
                        <li>
                            <p>
                                maintain adequate audit trail of the execution of the instructions of the Account Holder.
                            </p>
                        </li>
                        <li>
                            <p>
                                not honour or act upon any instructions for effecting any debit to the account of the Account Holder in respect of any
securities unless:
                            </p>
                            <ul class="child-sub">
                                <li>
                                    <p> Such instructions are issued by the Account Holder under his signature or that of his/its constituted attorney
duly authorized in that behalf;
</p>
                                </li>
                                <li>
                                    <p>
                                        The CDBL Participant is satisfied that the signature of the Account Holder under which instructions are issued
matches with the specimen of the Account Holder or his / its constituted attorney available on the records of the
CDBL Participant;
                                    </p>
                                </li>
                                <li>
                                    <p>
                                         The balance of clear securities available in the Account Holder’s account are sufficient to honour the Account
Holder’s instructions.
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                furnish to the Account Holder a statement of account at the end of every month if there has been even a single
entry or transaction during that month, and in any event once at the end of each financial year. The CDBL
Participant shall furnish such statements at such shorter periods as may be required by the Account Holder on
payment of such charges by the Account Holder as may be specified by the CDBL Participant. The Account Holder
shall scrutinize every statement of account received from the CDBL Participant for the accuracy and veracity
thereof and shall promptly bring to the notice of the CDBL Participant any mistakes, inaccuracies or discrepancies
in such statements.
                            </p>
                        </li>
                        <li>
                            <p>
                                 promptly attend to all grievances / complaints of the Account Holder and shall resolve all such grievances /
complaints as it relate to matters exclusively within the domain of the CDBL Participant within one month of the
same being brought to the notice of the CDBL Participant and shall forthwith forward to and follow up with CDBL all
other grievances / complaints of the Account Holder on the same being brought to the notice of the CDBL
Participant and shall endeavour to resolve the same at the earliest.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        The CDBL Participant shall be entitled to terminate the account relationship in the event of the Account Holder:

                    </p>
                    <ul class="second-sub">
                        <li>
                            <p>
                                Failing to pay the fees or charges as may be mutually agreed upon within a period of one month from the date of
demand made in that behalf;
                            </p>
                        </li>
                        <li>
                            <p>
                                Submitting for dematerialization any certificates or other documents of title which are forged, fabricated, counterfeit
or stolen or have been obtained by forgery or the transfer whereof is restrained or prohibited by any direction, order
or decree of any court or the Securities and Exchange Commission;
                            </p>
                        </li>
                        <li>
                            <p>
                                Commits or participates in any fraud or other act of moral turpitude in his / its dealings with the CDBL Participant;
                            </p>
                        </li>
                        <li>
                            <p>
                                Otherwise misconducts himself in any manner.
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        Declaration and Signature
                    </p>
                    <p>
                        I/we hereby acknowledge that I/we have read and understood the aforesaid terms and conditions for operating
Depository Account (BO Account) with CDBL Participant and agree to comply with them.
                    </p>
                </li>
            </ul>

            <div class="table">
                <table>
                    <tr>
                        <td>Applicants</td>
                        <td>Name of applicants / Authorized signatories in case of ltd Co</td>
                        <td>Signature with date</td>
                    </tr>
                   <tr>
                    <td>First Applicant </td>
                    <td><b>{{ $boopen->name }}</b> &nbsp;&nbsp;</td>
                    <td><img src="{{ asset($boopen->sign) }}" alt="" height='40px' width="100px"></td>
                </tr>
                <tr>
                    <td>Second Applicant </td>
                    <td><b>{{ $boopen->jh_name }}</b> &nbsp;&nbsp;</td>
                    <td><img src="{{ asset($boopen->jh_sign) }}" alt="" height='40px' width="100px"></td>
                </tr>
                    <tr>
                        <td>3rd Signatory(Ltd Co. only)</td>
                        <td> </td>
                        <td> </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    
    
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
    
    
    <!--NOMINEEE-->
     <section class="header-top clearfix">
        <div class="ht-left"><b>CDBL Bye Laws</b></div>
        <div class="ht-right"><b>Form 03 </b></div>
    </section>
    <section class="header clearfix">
        <h2>BO Account Nomination Form</h2>
        <p>
            Please complete all details in CAPITAL letters. <b> Please fill all names correctly</b> . All communications shall be sent to the correspondence
            address of only the First Named Account Holder as specified in BO Account Opening Form -02.
        </p>
    </section>
    <section class="head-bottom clearfix pb-10">
        <div>
            <span>Application No………………………..</span>
        </div>
        <div class="right">
            <span>Date (DDMMYYYY)…………………………</span>
        </div>
    </section>
    <section class="box box1 clearfix">
        <div class="clearfix">
            <span>Name of CDBL Participant (Up to 99 Characters)</span>
        </div>
        <div class="row1 clearfix">
            <div>
                <p style="font-size:15px"> <b> RNI Securities Limited  </b></p>
            </div>
            <div>
                <span>CDBL Participant ID</span>
                <table>
                    <tr>
                        <td>2</td>
                        <td>4</td>
                        <td>3</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row2">
            <div>
                <span>Account holder’s BO ID</span>
            </div>
            <div>
                <table>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="py-5">
                <span>Name of Account Holder ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters)</span>
            </div>
            <div class="py-5">
                <table>
                    <tr>
                          @php

                            $broken =str_split($boopen->name);

                            $arrlength = count($broken);

                            $totallenght = 34 -  $arrlength;


                            @endphp
                            

                            @for($x = 0; $x < $arrlength; $x++)  
                             <td> {{   $broken[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenght; $y++)  
                             <td>  </td>
                               
                            @endfor

                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="nominee-details pt-5">
        <h4>
            I / We nominate the following person(s) who is/are entitled to receive securities outstanding in my/our account in the event of the death of the sole holder / all the joint holders.
        </h4>
        <p>
            1. Nominee / Heirs Details
        </p>

        <div class="box clearfix">
            <h5>Nominee 1</h5>
            <p>Name in Full </p>
            <p class="bottom-dot">
                {{$boopen->n_name}}
            </p>
            <div class="row3 py-5 clearfix">
                <div>
                    <span>Short Name of Nominee ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters) </span>
                    <table>
                        <tr>
                            @php

                            $broken =str_split($boopen->n_name);

                            $arrlength = count($broken);

                            $totallenght = 29 -  $arrlength;


                            @endphp
                            

                            @for($x = 0; $x < $arrlength; $x++)  
                             <td> {{   $broken[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenght; $y++)  
                             <td>  </td>
                               
                            @endfor

                        </tr>
                    </table>
                </div>
                <div>
                    <span>Title i.e. Mr. / Mrs. </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row4 py-10 clearfix">
                <div>
                    <p>Relationship with A/C Holder : {{$boopen->relation}}</p>
                </div>
                <div>
                    <p>Percentage(%) :{{$boopen->percentage}}</p>
                </div>
            </div>
            <div class="row5">
                <p>Address</p>
                <p>………………………………………………………………………………………………………………………………………………………</p>
            </div>
            <div class="row6 clearfix">
                <div>
                    <p>Country : Bangladesh </p>
                </div>
                <div>
                    <p>City……………………………</p>
                </div>
                <div>
                    <p>State/Division …………………</p>
                </div>
                <div>
                    <p>Post Code……………………… </p>
                </div>

            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Telephone……………………… </p>
                </div>
                <div>
                    <p>Mobile Phone : {{$boopen->n_mobile}} </p>
                </div>
                <div>
                    <p>Fax………………………………</p>
                </div>
                <div>
                    <p>E-mail…………………………</p>
                </div>
            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Passport No……………………… </p>
                </div>
                <div>
                    <p>Issue Place………………………</p>
                </div>
                <div>
                    <p>Issue Date……………………</p>
                </div>
                <div>
                    <p>Expiry Date……………………</p>
                </div>
            </div>

            <div class="row9 clearfix" style="margin-bottom: 20px">
                <div>
                    <b>Residency</b>
                    <span>Resident</span> <input type="checkbox">
                    <span>Non Resident</span> <input type="checkbox">
                </div>
                <div>
                    <span>Nationality : Bangladeshi</span>
                </div>
                <div>
                    <span> Date Of Birth(DDMMYYYY)</span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>



            <h5>Guardian’s Details (if Nominee is a Minor)</h5>
            <p>Name in Full </p>
            <p>
                ……………………………………………………………………………………………………………………………………………………
            </p>
            <div class="row3 py-10 clearfix">
                <div>
                    <span>Short Name of Nominee ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters) </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <span>Title i.e. Mr. / Mrs. </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row10 py-5 clearfix">
                <div>
                    <p>Relationship with Nominee:………………………</p>
                </div>
                <div>
                    <p>Date of Birth of Minor (DDMMYYYY ) …………… </p>
                </div>
                <div>
                    <p>Maturity Date of Minor(DDMMYYYY )……………… </p>
                </div>
            </div>
            <div class="row5 clearfix">
                <p>Address</p>
                <p>………………………………………………………………………………………………………………………………………………………</p>
            </div>
            <div class="row6 clearfix">
                <div>
                    <p>Country………………………… </p>
                </div>
                <div>
                    <p>City……………………………</p>
                </div>
                <div>
                    <p>State/Division ………………… </p>
                </div>
                <div>
                    <p>Post Code……………………… </p>
                </div>

            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Telephone……………………… </p>
                </div>
                <div>
                    <p>Mobile Phone……………………</p>
                </div>
                <div>
                    <p>Fax………………………………</p>
                </div>
                <div>
                    <p>E-mail…………………………</p>
                </div>
            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Passport No……………………… </p>
                </div>
                <div>
                    <p>Issue Place………………………</p>
                </div>
                <div>
                    <p>Issue Date……………………</p>
                </div>
                <div>
                    <p>Expiry Date……………………</p>
                </div>
            </div>

            <div class="row9 clearfix">
                <div>
                    <b>Residency</b>
                    <span>Resident</span> <input type="checkbox">
                    <span>Non Resident</span> <input type="checkbox">
                </div>
                <div>
                    <span>Nationality………………………</span>
                </div>
                <div>
                    <span> Date Of Birth(DDMMYYYY)</span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
      
        <div class="box clearfix">
            <h5>Nominee 2 </h5>
            <p>Name in Full </p>
            <p>
                ……………………………………………………………………………………………………………………………………………………
            </p>
            <div class="row3 py-5 clearfix">
                <div>
                    <span>Short Name of Nominee ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters) </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <span>Title i.e. Mr. / Mrs. </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row4 py-10 clearfix">
                <div>
                    <p>Relationship with A/C Holder:……………………………………………………</p>
                </div>
                <div>
                    <p>Percentage(%) ………………………</p>
                </div>
            </div>
            <div class="row5">
                <p>Address</p>
                <p>………………………………………………………………………………………………………………………………………………………</p>
            </div>
            <div class="row6 clearfix">
                <div>
                    <p>Country………………………… </p>
                </div>
                <div>
                    <p>City……………………………</p>
                </div>
                <div>
                    <p>State/Division …………………</p>
                </div>
                <div>
                    <p>Post Code……………………… </p>
                </div>

            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Telephone……………………… </p>
                </div>
                <div>
                    <p>Mobile Phone……………………</p>
                </div>
                <div>
                    <p>Fax………………………………</p>
                </div>
                <div>
                    <p>E-mail…………………………</p>
                </div>
            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Passport No……………………… </p>
                </div>
                <div>
                    <p>Issue Place………………………</p>
                </div>
                <div>
                    <p>Issue Date……………………</p>
                </div>
                <div>
                    <p>Expiry Date……………………</p>
                </div>
            </div>

            <div class="row9 clearfix" style="margin-bottom: 20px">
                <div>
                    <b>Residency</b>
                    <span>Resident</span> <input type="checkbox">
                    <span>Non Resident</span> <input type="checkbox">
                </div>
                <div>
                    <span>Nationality………………………</span>
                </div>
                <div>
                    <span> Date Of Birth(DDMMYYYY)</span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>



            <h5>Guardian’s Details (if Nominee is a Minor)</h5>
            <p>Name in Full </p>
            <p>
                ……………………………………………………………………………………………………………………………………………………
            </p>
            <div class="row3 py-10 clearfix">
                <div>
                    <span>Short Name of Nominee ( Insert full name starting with Title i.e. Mr. / Mrs. / Ms / Dr, abbreviate only if over 30 characters) </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div>
                    <span>Title i.e. Mr. / Mrs. </span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row10 py-5 clearfix">
                <div>
                    <p>Relationship with Nominee:………………………</p>
                </div>
                <div>
                    <p>Date of Birth of Minor (DDMMYYYY ) …………… </p>
                </div>
                <div>
                    <p>Maturity Date of Minor(DDMMYYYY )……………… </p>
                </div>
            </div>
            <div class="row5 clearfix">
                <p>Address</p>
                <p>………………………………………………………………………………………………………………………………………………………</p>
            </div>
            <div class="row6 clearfix">
                <div>
                    <p>Country………………………… </p>
                </div>
                <div>
                    <p>City……………………………</p>
                </div>
                <div>
                    <p>State/Division ………………… </p>
                </div>
                <div>
                    <p>Post Code……………………… </p>
                </div>

            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Telephone……………………… </p>
                </div>
                <div>
                    <p>Mobile Phone……………………</p>
                </div>
                <div>
                    <p>Fax………………………………</p>
                </div>
                <div>
                    <p>E-mail…………………………</p>
                </div>
            </div>
            <div class="row7 clearfix">
                <div>
                    <p> Passport No……………………… </p>
                </div>
                <div>
                    <p>Issue Place………………………</p>
                </div>
                <div>
                    <p>Issue Date……………………</p>
                </div>
                <div>
                    <p>Expiry Date……………………</p>
                </div>
            </div>

            <div class="row9 clearfix">
                <div>
                    <b>Residency</b>
                    <span>Resident</span> <input type="checkbox">
                    <span>Non Resident</span> <input type="checkbox">
                </div>
                <div>
                    <span>Nationality………………………</span>
                </div>
                <div>
                    <span> Date Of Birth(DDMMYYYY)</span>
                    <table>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <p>
            2. Photograph of Nominees / Heirs
        </p>
    </section>

    <section class="box photo-boxx clearfix">
        <div class="text-center">
            <img class="photo" src="{{asset($boopen->n_photo)}}" alt="Please paste recent passport size Photograph">
        </div>
        <div class="text-center">
            <img class="photo" src="" alt="Please paste recent passport size Photograph">
        </div>
        <div class="text-center">
            <img class="photo" src="" alt="Please paste recent passport size Photograph">
        </div>
        <div class="text-center">
            <img class="photo" src="" alt="Please paste recent passport size Photograph">
        </div>
    </section>
    <section class="girdient-name">
        <div><p> Nominee / Heir 1 </p></div>
        <div><p>Nominee / Heir 2</p></div>
        <div><p>Guardian 1</p></div>
        <div><p>Guardian 2</p></div>
    </section>
    <section class="footer clearfix">
        <table>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Signature</th>
            </tr>
             <tr>
                <td>Nominee / Heir 1</td>
                <td style="width:40%;">{{$boopen->n_name}}</td>
                <td> <img style="width:200px; height:45px;" src="{{asset($boopen->sign)}}" alt=""> </td>
            </tr>
            <tr>
                <td>Nominee / Heir 2</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Guardian 2 </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>First Account Holder</td>
                <td  style="width:40%;">{{$boopen->name}}</td>
                <td> <img class="photo" style="width:200px; height:45px;" src="{{asset($boopen->n_sign)}}" alt=""> </td>
            </tr>
            <tr>
                <td>Second Account Holder</td>
                <td  style="width:40%;">{{$boopen->jh_name}}</td>
                <td> <img class="photo" style="width:200px; height:45px;" src="{{asset($boopen->jh_sign)}}" alt=""></td>
            </tr>
        </table>
    </section>
    <!--NOMINEE END-->


</body>

</html>
