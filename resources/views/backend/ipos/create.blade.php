@extends('backend.layouts.app')
@section('title','Add New IPO')
@section('content')


    <div id="content" class="content">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Add New IPO  </h4>
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
                <form action="{{ route('ipo.admin.store') }}" method="post" enctype="multipart/form-data">
                    @CSRF
                    <div class="form-group">
                        <label for="title">IPO Name</label>
                        <input type="text" name="ipo" class="form-control" id="IPO"  placeholder="IPO Name">
                        @error('ipo')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="ins_code">Instrument Code</label>
                        <input type="text" name="instrument_code" class="form-control" id="ins_code"  placeholder="Instrument Code">
                        @error('instrument_code')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">Start Date</label>
                        <input type="date" name="start_date" class="form-control" id="title"  placeholder="Start Date">
                        @error('start_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="title">End Date</label>
                        <input type="date" name="end_date" class="form-control" id="title"  placeholder="End Date">
                        @error('end_date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
 


                    <div class="form-group">
                        <label for="attachment">IPO Summary</label>
                        <input type="file" name="attachment" class="form-control" id="attachment" accept=".jpg,.jpeg,.png,.JPG,.JPEG,.pdf,.PDF">
                        @error('attachment')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="result">Results</label>
                        <input type="file" name="result" class="form-control" id="result" accept=".jpg,.jpeg,.png,.JPG,.JPEG,.pdf,.PDF">
                        @error('result')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary mt-3">Submit</button>

                </form>
            </div>









        </div>
    </div>

@endsection
