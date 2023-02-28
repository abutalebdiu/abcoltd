<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deposit File</title>
  <style>
        table, td, th {
          border: 1px solid black;
          font-size:10px;
        }
        
        table {
          width: 100%;
          border-collapse: collapse;
        }
  </style>
</head>
<body>
       
       
         <p style="padding-bottom:10px"><center>Client Online Deposit List</center></p>
         <br>
                        <table border="2">
                            <thead>
                                <tr>
                                     <th>SL.</th>
                                    <th>Time</th>
                                    <th>Client code</th>
                                    <th>Client Name</th>
                                    <th>Mobile</th>
                                    <th>Amount</th>
                                    <th>Remarks</th>
                                     
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($deposits as $deposit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $deposit->created_at->format('d-m-Y : h-i-s A') }}</td>
                                    <td>{{ $deposit->client_code }}</td>
                                    <td>{{ $deposit->name }}</td>
                                    <td>{{ $deposit->number}}</td>
                                    <td>{{ $deposit->amount}}</td>
                                    <td>{{ $deposit->comment}}</td>
                                     
                                  
                                      
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    


</body>
</html>