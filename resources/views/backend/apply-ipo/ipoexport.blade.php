                   <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr class="text-nowrap">
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Exchange</th>
                                <th class="text-nowrap">Amount</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                          

                  	    @foreach($appliedipos as  $data)
                        <tr>
                            
                            <td>{{ $data->client_code }}</td>
                            <td>DSE</td>
                            <td>{{ $data->amount }}</td>
                             
                          </tr> 
                       @endforeach 




                   

                    </tbody>
                </table>