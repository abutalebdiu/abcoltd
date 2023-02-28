@extends('frontend.layouts.app')
@section('title','Notice')
 
@section('content')

        <!--  NOTIC SECTION-->
        <section class="notic-section py-3">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="notic-box">
                            <div class="section-head pb-3">
                                <h4 class="after-dot">notice</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="notic-table pb-5">
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>SL.</th>
                                    <th>Title</th>
                                    <th width="15%">date</th>
                                    <th>Download</th>
                                </tr>
                                @foreach($notices as $notice)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $notice->title }}</td>
                                   
                                    <td class="date">{{  Date('d-M-Y', strtotime($notice->publish_date)) }}</td>
                                    <td>
                                        <a href="{{ route('notice.view',$notice->id) }}" class="btn btn-primary btn-sm text-white"> <i class="fa fa-eye"></i> View</a>
                                        <a href="{{ asset($notice->noticesfile) }}" class="btn btn-info btn-sm text-white" download><i class="fa fa-download"></i> Download</a></td>
                                </tr>
                                @endforeach
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END NOTIC SECTION-->



@endsection