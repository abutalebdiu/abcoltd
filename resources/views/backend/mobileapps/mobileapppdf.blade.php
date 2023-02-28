
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DSE Mobile Application</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO%20Asset%2013ldpi.png">
    <style>
        /* page */
        html {
            font: 14px/1 'Open Sans', sans-serif;
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

        .photo-div {
            width: 167px;
            text-align: center;
            position: absolute;
            top: 60px;
            right: 0px;
        }

        .photo-box {
            content: "";
            height: 180px;
            width: 160px;
            border: 1px solid #6c6c6c;
            margin: 0 auto;
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
            }

            .photo-div {
                width: 167px;
                text-align: center;
                position: absolute;
                top: 275px;
                right: 46px;
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

        header {
            text-align: center;
            font-weight: bolder;
        }

        header h3,
        h4 {
            margin: 0;
            margin-bottom: 8px;
        }

        .body-head {
            padding-top: 40px;
        }

        .bh-left {
            float: left;
            width: 70%;
        }

        .bh-right {
            float: left;
            width: 30%;
            text-align: right;
        }

        .bh-left input {
            padding: 4.5px;
            margin-left: 39px;
            width: 255px;
            border: 2px solid #6c6c6c;
        }

        .bh-left input:focus {
            outline: none;
        }

        .bh-right input {
            padding: 4.5px;
            width: 100px;
            border: 2px solid #6c6c6c;
        }

        .bh-right input:focus {
            outline: none;
        }

        .accound-holder {
            padding: 50px 0;
        }

        .ah-input {
            padding: 5px 0;
        }

        .ah-input-left {
            width: 10%;
            float: left;
            padding: 8px 0;
        }

        .ah-input-right {
            width: 578px;
            float: right;
            position : relative;
        }

        .all-table table,
        tr,
        td {
            border: 2px solid #6c6c6c;
            border-collapse: collapse;
            text-transform: uppercase;
        }

        .all-table table tr td {
            min-width: 16px;
            padding: 0;
            height: 25px;
            text-align: center;
        }






        /*
        .all-table tr td {
            padding: 5px 5.6px;
        }
*/

        .tread-div-head {
            float: left;
            width: 143px;
        }

        .tread-div {
            width: 210px;
            float: left;
        }

        .tread-div span {
            float: left;
            font-size: 12px;
            margin-right: 2px;
            display: inline-block;
            padding-top: 10px;
            font-weight: 500;
        }

        .tread-div table {
            float: left;
        }

        .learge-table table,
        tr,
        td {
            border-collapse: collapse;
            min-width: 19px;
            height: 22px;
            text-align: center;
        }

        .sub-head {
            width: 143px;
            float: left;
        }

        .sub-head span {
            padding: 8px 0;
            display: inline-block;
        }

        .sub-details {
            float: left;
            width: 302px;
        }

        .all-table {
            display: inline;
        }

        .type-single {
            float: left;
            padding: 16px 0;
            width: 140px;
        }

        .type-single.custom {
            width: 200px;
            float: left;
        }

        .two-row {
            width: 400px;
            float: left;
        }

        .type-single input {
            width: 15px;
            height: 15px;
        }

        .sub-head p {
            padding-top: 3px;
        }

        .isregister {
            float: left;
            margin-left: 5px;
        }

        .isregister input {
            height: 15px;
            width: 15px;
        }

        .yes {
            margin-right: 5px;
        }

        .accound-holder.custom {
            padding: 16px 0;
        }

        .type-single.custom3 {
            width: 192px;
            float: left;
        }

        .three-row {
            float: left;
            width: 577px;
        }

        .application {
            padding: 16px 0;
        }

        .application-left {
            float: left;
            width: 45%;
        }

        .application-right {
            float: left;
            width: 55%;
            text-align: right;
        }

        .application-left input {
            padding: 4.5px;
            margin-left: 25px;
            width: 150px;
            border: 2px solid #6c6c6c;
        }

        .application-left input:focus {
            outline: none;
        }

        .application-right select {
            padding: 4.5px;
            width: 200px;
            border: 2px solid #6c6c6c;
        }

        .application-right select:focus {
            outline: none;
        }

        .learge-table table {
            display: inline;
        }

        .signature {
            padding: 16px 0;
        }

        .signature-box {
            float: left;
            width: 33.33%;
        }

        .sign-text {
            float: left;
            width: 40%;
        }

        .sign-hend {
            float: left;
            width: 60%;
        }
        .sign-hend img{
            height: 100%;
            width: 100%;
        }

        .sign-text span {
            font-size: 14px;
            padding: 20px 0;
            display: inline-block;
        }

        .sign-text.custom span {
            padding: 27px 0;
        }

        .sign-hend {
            height: 80px;
            width: 125px;
            border: 1px solid #6c6c6c;
        }

        header h4::after {
            content: url(mobile-header.png);
            width: 50px;
            display: inline-block;
        }

        header img {
            width: 100%;
        }

        footer {
            padding-top: 20px;
        }
        footer img{
            width: 100%;
        }

        .padding-custom {
            padding-top: 0px;
        }



        /* end main css */

    </style>
</head>

<body>
    <header>
        <img src="{{ asset('public/frontend/pdf/mobile') }}/head.png" alt="">
        <!--
        <h3>DSE-Mobile Registration Form</h3>
        <h4>Please fill the form in BLOCK LETTERS</h4>
-->
    </header>
    <section class="body-head">
        <div class="bh-left">
            Serial Number :
            <input type="text">
        </div>
        <div class="bh-right">
            Date:
            <input type="text">
        </div>
    </section>
    <section class="accound-holder">
        <div class="ah-header">
            <h4>Account Holder Information :</h4>
            <div class="ah-input">
                <div class="ah-input-left">Name :</div>
                <div class="ah-input-right all-table">
                    <table>
                        <tr>

                            @php

                            $broken =str_split($mobileapp->name);

                            $arrlength = count($broken);

                            $totallenght = 32 -  $arrlength;


                            @endphp
                            

                            @for($x = 0; $x < $arrlength; $x++)  
                             <td> {{   $broken[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenght; $y++)  
                             <td>  </td>
                               
                            @endfor
                      
                            

                        </tr>
                    </table>
                    
                    
                    
                    
                <div class="photo-div">
                    <div>
                        <h4>Photograph</h4>
                        <div class="photo-box">
                            <img src="{{ asset($mobileapp->photo) }}" alt="" style="width:100%; height:100%;">
                        </div>
                    </div>
                </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
    <section class="tread-holder clearfix">
        <div class="tread-div-head">
            <h4>TREC Holder :</h4>
        </div>
        <div class="tread-div learge-table">
            <span>TREC Holder Number:</span>
            <table>
                <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>8</td>
                </tr>
            </table>

        </div>
        <div class="tread-div learge-table">
            <span>TREC Holder Code:</span>
            <table>
                <tr>
                    <td>R</td>
                    <td>N</td>
                    <td>I</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="account-details clearfix">
        <div class="section-head">
            <h5>Account Details:</h5>
        </div>
        <div class="main-sub">
            <div class="sub-head">
                <span>Client ID :</span>
            </div>
            <div class="sub-details all-table">
                <table>
                    <tr>


                        @php

                            $brokencode =str_split($mobileapp->code);

                            $arrlengthcode = count($brokencode);

                            $totallenghtcode = 15 -  $arrlengthcode;


                            @endphp
                            

                            @for($x = 0; $x < $arrlengthcode; $x++)  
                             <td> {{   $brokencode[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenghtcode; $y++)  
                             <td>   </td>
                               
                        @endfor
                      




                        
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="accound-type clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <h5>Account Type :</h5>
            </div>
            <div class="type-single">
                <input type="checkbox" {{ $mobileapp->type == "Single" ? 'checked' : 'disabled'}}>
                <span>Single</span>
            </div>
            <div class="type-single">
                <input type="checkbox" {{  $mobileapp->type == "joint" ? 'checked' : 'disabled' }}>
                <span> Joint</span>
            </div>
            <div class="type-single">
                <input type="checkbox" {{  $mobileapp->type == "Institution" ? 'checked' : 'disabled' }}>
                <span>Institution</span>
            </div>
        </div>
    </section>
    <section class="account-details clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <span>BO ID :</span>
            </div>
            <div class="sub-details all-table">
                <table>
                    <tr>

                            @php

                            $brokenboid =str_split($mobileapp->boid);

                            $arrlengthboid = count($brokenboid);


                            @endphp
                            

                            @for($x = 0; $x < $arrlengthboid; $x++)  
                             <td> {{   $brokenboid[$x]  }}  </td>
                               
                            @endfor


                            








                        
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="accound-type clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <p>Client Type :</p>
            </div>
            <div class="two-row">
                <div class="type-single custom">
                    <input type="checkbox" {{  $mobileapp->client_type == "Profesional" ? 'checked' : 'disabled' }}>
                    <span>Profesional</span>
                </div>
                <div class="type-single">
                    <input type="checkbox" {{  $mobileapp->client_type == "Individual" ? 'checked' : 'disabled' }}>
                    <span> Individual</span>
                </div>

                <div class="type-single custom padding-custom">
                    <input type="checkbox" {{  $mobileapp->client_type == "Non-Professional" ? 'checked' : 'disabled' }}>
                    <span>Non-Professional</span>
                </div>
                <div class="type-single custom padding-custom">
                    <input type="checkbox" {{  $mobileapp->client_type == "Institution" ? 'checked' : 'disabled' }}>
                    <span>Institution</span>
                </div>
            </div>
        </div>
    </section>
    <section class="accound-type clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <p>Domicile :</p>
            </div>
            <div class="two-row custom">
                <div class="type-single custom">
                    <input type="checkbox" {{  $mobileapp->domicile == "Local" ? 'checked' : 'disabled' }}>
                    <span>Local</span>
                </div>
                <div class="type-single custom">
                    <input type="checkbox" {{  $mobileapp->domicile == "Foreign" ? 'checked' : 'disabled' }}>
                    <span> Foreign (NRB or Foreigner)</span>
                </div>
            </div>
        </div>
    </section>
    <section class="accound-type clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <p>Use Type :</p>
            </div>
            <div class="two-row custom">
                <div class="type-single custom">
                    <input type="checkbox"   {{  $mobileapp->usetype == "Internal" ? 'checked' : 'disabled' }}>
                    <span>Internal</span>
                </div>
                <div class="type-single custom">
                    <input type="checkbox" {{  $mobileapp->usetype == "External" ? 'checked' : 'disabled' }}>
                    <span> External (Advising, Discretionary Acc. Fund,MF, etc)</span>
                </div>
            </div>
        </div>
    </section>
    <section class="account-details clearfix">
        <div class="section-head">
            <h5>Contact Information :</h5>
        </div>
        <div class="main-sub">
            <div class="sub-head">
                <span>Mobile Number :</span>
            </div>
            <div class="sub-details all-table">
                <table>
                    <tr>
                        <td>+</td>
                        <td>8</td>
                        <td>8</td>
                        
                         @php

                            $mobile =str_split($mobileapp->mobile);

                            $arrlengthmobile = count($mobile);


                        @endphp
                            

                        @for($x = 0; $x < $arrlengthmobile; $x++)  
                             <td> {{   $mobile[$x]  }}  </td>
                               
                        @endfor


                    </tr>
                </table>
            </div>
            <div class="isregister">
                <span>Is this Number Registered</span>
                <span class="yes"><input type="checkbox" checked>Yes</span>
                <span><input type="checkbox" disabled>No</span>
            </div>
        </div>
    </section>
    <section class="accound-holder custom clearfix">
        <div class="ah-input">
            <div class="ah-input-left">Email :</div>
            <div class="ah-input-right all-table">
                <table>
                    <tr>

                        @php

                            $brokenemail =str_split($mobileapp->email);

                            $arrlengthemail = count($brokenemail);

                            $totallenghtemail = 31 -  $arrlengthemail;


                            @endphp
                            

                            @for($x = 0; $x < $arrlengthemail; $x++)  
                             <td> {{   $brokenemail[$x]  }}  </td>
                               
                            @endfor


                            @for($y = 0; $y < $totallenghtemail; $y++)  
                             <td>   </td>
                               
                        @endfor


                       
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <section class="accound-type clearfix">
        <div class="main-sub">
            <div class="sub-head">
                <h5>Mobile Application :</h5>
            </div>
            <div class="three-row custom">
                <div class="type-single custom3">
                    <input type="checkbox" {{ $mobileapp->applicationfor1 == "DSE-Mobile VIP" ? 'checked' : 'disabled' }}>
                    <span>DSE-Mobile VIP</span>
                </div>
                <div class="type-single custom3">
                    <input type="checkbox" {{ $mobileapp->applicationfor2== "DSE-Mobile Trader" ? 'checked' : 'disabled' }}>
                    <span> DSE-Mobile Trader</span>
                </div>
                <div class="type-single custom3">
                    <input type="checkbox" {{ $mobileapp->applicationfor3 == "DSE-Investor (Desktop)" ? 'checked' : 'disabled' }}>
                    <span> DSE- Investor (Desktop)</span>
                </div>
                <div class="type-single custom3 padding-custom">
                    <input type="checkbox" {{ $mobileapp->applicationfor4 == "DSE-Mobile Biz Owner" ? 'checked' : 'disabled' }}>
                    <span> DSE-Mobile Biz Owner</span>
                </div>
                <div class="type-single custom3 padding-custom">
                    <input type="checkbox" {{ $mobileapp->applicationfor5 == "10 BID and Offer" ? 'checked' : 'disabled' }}>
                    <span> 10 BID and Offer</span>
                </div>
            </div>
        </div>
    </section>
    <section class="application clearfix">
        <div class="application-left">
            Application Date : 
            <input type="text" value="{{ $mobileapp->created_at->format('d-m-Y') }}">
        </div>
        <div class="application-right">
            Registration fee : 500 Taka:
            <select name="" id="">
                <option value="" selected></option>
                <option value="1">Cash</option>
                <option value="2">Dabit Trading Accound</option>
            </select>
        </div>
    </section>
    <section class="signature clearfix">
        <div class="signature-box">
            <div class="sign-text custom clearfix">
                <span> Applicant Signature </span>
            </div>
            <div class="sign-hend">
               <img src="{{ asset($mobileapp->signature) }}" alt="" width="100%">
            </div>
        </div>
        <div class="signature-box">
            <div class="sign-text  clearfix">
                <span> TREC Holder Officeal Signature </span>
            </div>
            <div class="sign-hend"></div>
        </div>
        <div class="signature-box">
            <div class="sign-text clearfix">
                <span> Approval By TREC Holder Representative </span>
            </div>
            <div class="sign-hend"></div>
        </div>
    </section>
  
    <footer>
        <img src="{{ asset('public/frontend/pdf/mobile') }}/footer.png" alt="footer image">
    </footer>



</body>

</html>
