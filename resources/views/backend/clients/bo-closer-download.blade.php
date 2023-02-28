<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BO Closing Reports</title>
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
            height: 11in;
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
            }

        }

        @page {
            margin: 0;
        }

        /* header */

        /*      main*/
        header img {
            width: 100%;
        }

        .mr5 {
            margin-right: 5px;
        }

        .mt5 {
            margin-top: 5px;
        }

        .mr10 {
            margin-right: 10px;
        }

        .mt10 {
            margin-top: 10px;
        }

        .mb10 {
            margin-bottom: 10px;
        }

        .block {
            display: block;
        }

        section h6 {
            font-weight: bold;
        }

        .flex {
            display: flex;
        }

        .box {
            border: 1px solid #000000;
            padding: 8px;
        }

        table {
            border-collapse: collapse;
        }

        table tr td {
            height: 17px;
            width: 17px;
            text-align: center;
            border: 1px solid #000000;
        }

        .flot>div {
            float: left;
        }

        .day-year span {
            font-size: 12px;
            word-spacing: 10px;
        }

        .text p {
            font-size: 12px;
            font-weight: bold;
            line-height: 16px;
        }

        .account-holder>b {
            font-size: 14px;
            background: #cccccc;
            display: block;
            padding: 7px;

        }

        .closer-details>b {
            font-size: 14px;
            background: #cccccc;
            display: block;
            padding: 7px;

        }

        .details>b {
            font-size: 14px;
            background: #cccccc;
            display: block;
            padding: 7px;

        }
        .signature{
            margin-top: 20px;
        }
        .signature table{
            width: 100%;
        }
        .signature table tr:first-child{
            height: 10px;
        }
        .signature table td{
            height: 30px;
        }
        .firstchils-tr td{
            height:20px !important;
        }
        }

        /*      main end*/

    </style>
</head>

<body>

    <header>
        <img src="{{ asset('public') }}/frontend/images/photo/header.png" alt="">
    </header>
    <section style="display: flex; justify-content: space-between;" class="mt10">
        <div class="flot">
            <div class="flex">
                <span class="mr5">Application No.</span>
                <table>
                    <tr>
                        
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                       
                       <!-- <td>{{ substr($bocoser->id, 0, 1)  }}</td>
                        <td>{{ substr($bocoser->id, 1, 1)  }}</td>
                        <td>{{ substr($bocoser->id, 2, 1)  }}</td>
                        <td>{{ substr($bocoser->id, 3, 1)  }}</td>
                        <td>{{ substr($bocoser->id, 4, 1)  }}</td>-->
                    </tr>
                </table>
            </div>
        </div>
        <div class="flex">
            <span class="mr10">Date</span>
            <div class="day-year">
                <table>
                    <tr>
                        <td>{{ substr($bocoser->created_at->format('d'), 0, 1)  }} </td>
                        <td>{{ substr($bocoser->created_at->format('d'), 1, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('m'), 0, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('m'), 1, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('Y'), 0, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('Y'), 1, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('Y'), 2, 1)  }}</td>
                        <td>{{ substr($bocoser->created_at->format('Y'), 3, 1)  }}</td>
                    </tr>
                </table>
                <span>D D M M Y Y Y Y</span>
            </div>
        </div>
    </section>
    <section style="display: flex; justify-content: space-between; align-items: flex-end">
        <div>
            <b class="block">To</b>
            <span>(Depository Participant Name) </span>
            <div>
                <table>
                     
                    <tr>
                        <td>R</td>
                        <td>N</td>
                        <td>I</td>
                        <td></td>
                        <td>S</td>
                        <td>E</td>
                        <td>C</td>
                        <td>U</td>
                        <td>R</td>
                        <td>I</td>
                        <td>T</td>
                        <td>I</td>
                        <td>E</td>
                        <td>S</td>
                        <td></td>
                        <td>L</td>
                        <td>I</td>
                        <td>M</td>
                        <td>I</td>
                        <td>T</td>
                        <td>E</td>
                        <td>D</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div>
            <div class="flex">
                <span class="mr10"> DP ID</span>
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
    </section>
    <section class="text">
        <p>
            I/We, the Sole Holder / Joint Holders / Guardian (in case of minors) / Clearing Member request you to close my / our Depository
            Account with you. The details of my / our account are as indicated below:
        </p>
    </section>
    <section class="account-holder">
        <b class="mt10 mb10">Account Holder’s Details</b>
        <div class="box">
            <div class="flex mb10">
                <span class="mr10">Account ID </span>
                <table>
                    
                    <tr>
                    
                     @php

                            $broken =str_split($bocoser->client_code);

                            $arrlength = count($broken);

                            $totallenght = 16 -  $arrlength;


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
            <div class="mb10">
                <span class="mr10">Name of Account Holder </span>
                <table>
                     <tr>

                            @php

                            $broken =str_split($bocoser->name);

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
                    </tr>
                </table>
            </div>
            <div class="mb10">
                <span class="mr10">Name of Second Account Holder </span>
                <table>
                    
                    
                    <tr>

                            @php

                            $broken =str_split($bocoser->join_holder);

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
            <div class="mb10">
                <span class="mr10">Name of Third Account Holder </span>
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
    </section>
    <section class="closer-details">
        <b class="mt10 mb10">Account Holder’s Details</b>
        <span>Reason for Closure of Account </span>
        <div>
            <table>
                
                
                 <tr>

                            @php

                            $broken =str_split($bocoser->closer_reason);

                            $arrlength = count($broken);

                            $totallenght = 50 -  $arrlength;


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
    </section>
    <section class="details mt10">
        <b class="mb10">Details of Remaining Security Balances in the Account (if any)</b>
        <div class="box">
            <div class="mb10">
                <span style="margin-right: 50px;">Whether to be partly rematerialized and partly transferred: </span>
                <label for="yes"><b>YES</b></label>
                <input type="checkbox" id="yes" style="margin-right: 30px;">
                <label for="no"><b>NO</b></label>
                <input type="checkbox" id="no">
            </div>
            <div class="flex">
                <div class="mb10">
                    <span style="margin-right: 20px;">To be rematerialized: </span>
                    <label for="yes"><b>YES</b></label>
                    <input type="checkbox" id="yes" style="margin-right: 15px;">
                    <label for="no"><b>NO</b></label>
                    <input type="checkbox" id="no">
                </div>
                <div class="mb10">
                    <span style="margin-right: 20px; margin-left: 45px;">To be Transferred to another Account:  </span>
                    <label for="yes"><b>YES</b></label>
                    <input type="checkbox" id="yes" style="margin-right: 15px;">
                    <label for="no"><b>NO</b></label>
                    <input type="checkbox" id="no">
                </div>
            </div>
            <div class="mb10">
                <span style="margin-right: 20px;">Whether any of the following is Applicable (To be filled by DP):  </span>
                <label for="Ear-marked "><b>Ear-marked </b></label>
                <input type="checkbox" id="Ear-marked " style="margin-right: 10px;">
                <label for="Pledged"><b>Pledged</b></label>
                <input type="checkbox" id="Pledged"  style="margin-right: 10px;">
                <label for="Frozen"><b>Frozen</b></label>
                <input type="checkbox" id="Frozen">
            </div>
        </div>
    </section>
    
    <section class="signature">
        <table class="">
            <tr class="firstchils-tr">
                <td>Name of Account Holder/s </td>
                <td>Signature/s </td>
            </tr>
            <tr style="height="50px">
                <td> {{ $bocoser->name }}</td>
                <td>
                    
                    <img src="{{ asset($bocoser->signature) }}" style="height:100%; width:100px">
                </td>
            </tr>  
            
            <tr style="height="50px">
                <td> {{ $bocoser->join_holder }}</td>
                <td>
                    @if($bocoser->joint_signature)
                    <img src="{{ asset($bocoser->joint_signature) }}"style="height:100%; width:100px">
                    @endif
                </td>
            </tr>
             
            <tr style="height="50px">
                <td></td>
                <td></td>
            </tr>
        </table>
    </section>
    
    
    <br><br><br>
    <div style="display: flex; justify-content: space-between; margin-top: 60px;">
        <b>Authorized Signature of Depository Participant</b>
        <b>Seal of CDBL Participant</b>
    </div>



</body>

</html>
