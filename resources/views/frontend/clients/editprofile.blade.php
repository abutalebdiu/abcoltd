@extends('frontend.layouts.app')
@section('title','Edit Student Profile')
@section('content')

	<section class="user-dashboard">
        <div class="container">
           <div class="row">


            @include('frontend.clients.dashboardmenu')

               <div class="col-12 col-md-9">
                <div class="dashboard-main w-100 bd-highlight py-3 mt-3">
                    <div class="dr-head">
                        <h6>Profile</h6>
                        <hr>
                    </div>

                    <div class="hr-body">
                      <form action="{{ route('client.profile.update') }}" method="post" accept-charset="utf-8">
                        @csrf
                         <table class="table table-bordered table-hovered">
                           <thead>
                             <tr>
                               <th>Menu</th>
                               <th><center>Information</center></th>
                             </tr>
                           </thead>
                           <tbody>
                             <tr>
                                <th>Name</th>
                                
                                  <td>
                                       <input type="text" name="name" value="{{ $student->name }}" class="form-control" placeholder="Client name"> 
                                       
                                      
                                </td>
                                
                             </tr>
                             <tr>
                               <th>Email</th>
                               <td> 
                                <input type="text" name="email" value="{{ $student->email }}" class="form-control" placeholder="Client Email"> 
                                <div class="text-danger">{{ $errors->first('email') }}</div>
                              </td>
                             </tr>
                             <tr>
                                <th>Mobile</th>
                                <td> 
                                  <input type="text" name="mobile" value="{{ $student->mobile }}" class="form-control" placeholder="Client name">
                                  <div class="text-danger">{{ $errors->first('mobile') }}</div>
                                </td>
                             </tr>
                             <tr>
                                <th>Password</th>
                                <td> 
                                  <div class="form-group">
                            <input type="password" name="new_password" value="{{ old('new_password') }}" class="form-control" placeholder="Enter New Password" />
                            <div class="text-danger">{{ $errors->first('new_password') }}</div>
                        </div>
                                </td>
                             </tr>
                             
                             <tr>
                               <th>Action</th>
                               <td> <button type="submit" class="btn btn-primary">Update</button></td>
                             </tr>

                           </tbody>
                         </table>
                        </form>
                    </div>
                 </div>

               </div>
           </div>
           
        </div>
    </section>

@endsection