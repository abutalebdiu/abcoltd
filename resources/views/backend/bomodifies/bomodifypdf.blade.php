
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BO Modify Request</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="img/LOGO%20Asset%2013ldpi.png">
    <style>
        /* page */
        html {
            font: 15px/1 'Open Sans', sans-serif;
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
        .m0{
            margin: 7px 0;
        }
        table,   th{
            border-collapse: collapse;
            border: 1px solid #000;
        }
        table{
            width: 100%;
        }
        table tr th{
            padding: 6px;
            background: #ccc;
        }
        table tr td{
            padding: 8px;
        }
        table tr td:first-child{
            border-right: 1px solid #000;
        }
        .bank_details{
            text-align: center;
            text-decoration: underline;
        }
        .sign1{
            float: left;
            width: 50%;
        }
        .sign2{
            float: left;
            width: 25%;
            text-decoration: overline;
        }
        .sign3{
            float: left;
            width: 25%;
            text-align: right;
            text-decoration: overline;
        }
        .sign{
            padding: 20px 0;
        }
        .code{

            display: inline-block;
        }
        .mobile{
            margin: 0;
        }
        .thanks{
            padding-top: 20px;
        }
        p{
            line-height: 20px;
        }


        /* end main css */

    </style>
</head>

 
<body>
    <p>Date: {{$bomodify->created_at->format('d.m.Y') }}</p>
    <p class="m0">To, </p>
    <p class="m0">Managing Director</p>
    <p class="m0">RNI Securities Ltd.</p>
    <p class="m0">City Center, Level #29, 103,</p>
    <p class="m0">Motijheel, Dhaka - 1000.</p>
    <p>Subject: <b>Application for BO Account Modification ({{$bomodify->reason}})</b> </p>
    <br>
    <p>Dear Sir,</p>
    
    <p>
        Due respect, i am glad to inform you that, I am a BO A/C holder in your company. My Client Code is  <b>{{ $bomodify->code }}</b>, BOID is <b>{{$bomodify->boid}}</b>  and Mobile No. is <b>{{ $bomodify->mobile }}</b>.
    </p>
    <p>
        Due to my personal reason, i have to modify my BO Account, which necessary information given below.
    </p>
    
    <div>
        <table>
            <tr>
                <th>Present Information</th>
                <th>New Information</th>
            </tr>
            <tr>
                <td>Address: {{  $bomodify->reason == "Address" ? $bomodify->old : '' }}</td>
                <td>Address: {{  $bomodify->reason == "Address" ? $bomodify->new_data : '' }}</td>
            </tr>
            <tr>
                <td>Mobile: {{  $bomodify->reason == "Mobile" ? $bomodify->old : '' }}</td>
                <td>Mobile: {{  $bomodify->reason == "Mobile" ? $bomodify->new_data : '' }}</td>
            </tr>
            <tr>
                <td>Email: {{  $bomodify->reason == "Email" ? $bomodify->old : '' }}</td>
                <td>Email: {{  $bomodify->reason == "Email" ? $bomodify->new_data : '' }}</td>
            </tr>
            <tr>
                <td>Bank: {{  $bomodify->reason == "Bank" ? $bomodify->old : '' }}</td>
                <td>Bank:  {{  $bomodify->reason == "Bank" ? $bomodify->new_data : '' }}</td>
            </tr>
            <tr>
                <td class="bank_details">Bank Details</td>
                <td class="bank_details">Bank Details</td>
            </tr>
            <tr>
                <td>Bank Name:</td>
                <td>Bank Name:</td>
            </tr>
            <tr>
                <td>Branch: </td>
                <td>Branch: </td>
            </tr>
            <tr>
                <td>A/C No:</td>
                <td>A/C No:</td>
            </tr>
            <tr>
                <td>Routing No:</td>
                <td>Routing No:</td>
            </tr>
        </table>
    </div>
    
    <p class="thanks">Thank You,</p>
    <p class="sign">
        <img src="{{ asset($bomodify->signature) }}" alt="" style="height:100px; width:100px">
    </p>
    <div>
        <span class="sign1">
            Name:  <b>{{ $bomodify->name }}</b>
        </span>
        <span class="sign2">Authorized Sign</span>
        <span class="sign3">Branch In-Charge Sign</span>
    </div>
    <p class="code">Code: <b>{{ $bomodify->code }}</b></p>
    <p class="mobile">Mobile: <b>{{ $bomodify->mobile }}</b></p>


</body>

</html>
