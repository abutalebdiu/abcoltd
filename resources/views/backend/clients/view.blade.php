@extends('backend.layouts.app')
@section('title','Client Upload')
@section('content')
 <div id="content" class="content">
            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <h4 class="panel-title">Client Upload</h4>
                    <div class="panel-heading-btn"> 
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand">
                            		<i class="fa fa-expand"></i>
                            	</a>
                            	<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload">
                            		<i class="fa fa-redo"></i>
                            	</a> 
                            	<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse">
                            		<i class="fa fa-minus"></i>
                            	</a> 
                            	<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove">
                            		<i class="fa fa-times"></i>
                            	</a> 

                    </div>
                </div>
                <div class="panel-body">


                    <form method="post" action="{{ route('client.import') }}" enctype="multipart/form-data" id="uapload_form">
                        @csrf
                      <div class="form-group">
                       <div class="mb-3">
                           <b>Export: <span class="text-danger">SIS> Reports> List-Code/ID> Client-Short(Active)</span> [Excel File Format]</b>
                       </div>
                        <input type="file" name="balance_file" class="form-control col-md-3 d-inline" id="" aria-describedby="" required>
                       </div> 
                       
                       
                       
                      <button type="submit" class="btn btn-primary"> <i class="fa fa-upload"></i> Import</button>
                    </form>






                    <hr>

                    <div class="float-right">
                    <form class="form-inline" method="" accept="">
                      <div class="form-group mb-2">
                        <label for="" class="sr-only">Client Code</label>
                        <input type="text" name="code" class="form-control"  value="{{ old('code') }}" placeholder="Client Code">
                      </div>
                      
                      <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i> Balance Search</button>
                    </form>
                    </div>

                    <p class="font-weight-bold">Imported Clients : {{ $totalclients }}</p> 

                    <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                        <thead>
                            <tr>
                                <th width="1%">SL</th>
                             
                                <th class="text-nowrap">Client Code</th>
                                <th class="text-nowrap">Name</th>
                                <th class="text-nowrap">BOID</th>
                                 
                            </tr>
                        </thead>
                        <tbody>
                 	         
                 	    @foreach($clients as  $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td>{{ $client->code }}</td>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->boid }}</td>
                             
                        </tr>
                               
                        @endforeach
                             
                             
                        </tbody>
                    </table>

                    {{ $clients->links() }}
                </div>
            </div>
        </div>
        


@section('customjs')


    <script>
        $(document).ready(function(){
         $('#upload_form').on('submit', function(event){
          event.preventDefault();
          $.ajax({
           url:"{{ route('client.import') }}",
           method:"POST",
           data:new FormData(this),
           dataType:'JSON',
           contentType: false,
           cache: false,
           processData: false,
           success:function(data)
           {
             
           }
          })
         });

        });
</script>


@endsection
@endsection