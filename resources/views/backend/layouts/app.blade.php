<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') - {{ $websetting->site_name }}  </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('public/backend') }}/assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/backend') }}/assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="{{ asset('public/backend') }}/assets/plugins/tag-it/css/jquery.tagit.css">


</head>

<body>
    <div id="page-loader" class="fade show"> <span class="spinner"></span> </div>
    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <div id="header" class="header navbar-default">
            <div class="navbar-header">
                <a href="{{ route('home') }}" class="navbar-brand"><span class="navbar-logo"></span> <b> {{ $websetting->site_name }} </b>  Admin</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="navbar-form">
                     <a href="{{ route('frontend') }}" target="_blank">Visit Website</a>
                </li>
                 <li class="dropdown navbar-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                         @if(Auth::user()->image)

                                <img src="{{ asset(Auth::user()->image) }}" alt="">

                            @else

                                <img src="{{ asset('public/manpowers/user.png') }}" alt="" />
                            @endif
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('user.profile') }}" class="dropdown-item"><i class="fa fa-user"></i> Profile</a>
                        <a href="{{ route('user.setting') }}" class="dropdown-item"><i class="fa fa-cogs"></i> Setting</a>


                        <a class="dropdown-item" href="{{ route('logout') }}">
                            <i class="fa fa-sign-out"></i>  {{ __('Logout') }}
                        </a>


                    </div>
                </li>
            </ul>
        </div>
        <div id="sidebar" class="sidebar">
            <div data-scrollbar="true" data-height="100%">
                <ul class="nav">
                    <li class="nav-profile">
                        <a href="javascript:;">
                            <div class="cover with-shadow"></div>
                            <div class="image">

                            @if(Auth::user()->image)

                                <img src="{{ asset(Auth::user()->image) }}" alt="">

                            @else

                                <img src="{{ asset('public/manpowers/user.png') }}" alt="" />
                            @endif
                            </div>
                            <div class="info"> {{ Auth::user()->name }} <small>Admistration</small> </div>
                        </a>
                    </li>

                </ul>
                <ul class="nav">
                    <li class="nav-header">Navigation</li>
                    <li>
                        <a href="{{ route('home') }}">  <i class="fa fa-th-large"></i> <span>Dashboard</span> </a>
                      </li>




                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-upload"></i> <span>Upload </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('client.list') }}">  Clients Upload <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('balance.list') }}">  Balance Upload <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('client.balance.reports') }}">  Report View <i class="fa fa-list text-theme"></i> </a></li>


                        </ul>
                    </li>



                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Clients </span>
                        </a>
                        <ul class="sub-menu">

                            <li><a href="{{route('booopenlist.index')}}">  BO Open Request  <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('bomodify.index') }}">  BO Modify  <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('admin.bo.closer') }}">  BO Closer Request <i class="fa fa-list text-theme"></i> </a></li>
<!--                            <li><a href="">  BO Open (Online)  <i class="fa fa-plus text-theme"></i></a></li>-->
                            <li><a href="{{ route('mobile.app.index') }}">  Mobile Apps Request  <i class="fa fa-plus text-theme"></i></a></li>


                        </ul>
                    </li>



                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-user"></i> <span>Users </span>
                        </a>
                        <ul class="sub-menu">
                            {{-- <li><a href="{{ route('user.index') }}">  Users list <i class="fa fa-list text-theme"></i> </a></li> --}}
                            <li><a href="{{route('user.request.index')}}">  User Request <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{route('user.request.approve')}}">  User Approved <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{route('user.request.reject')}}">  User Rejected <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('user.create') }}">  Add User <i class="fa fa-plus text-theme"></i></a></li>

                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-user"></i> <span>Withdraw</span>
                        </a>
                        <ul class="sub-menu">
                            {{-- <li><a href="{{ route('withdraw.index') }}">  Withdraw all <i class="fa fa-list text-theme"></i> </a></li> --}}
                            <li><a href="{{ route('withdraw.request') }}">  Request <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('withdraw.accept') }}">  Approved <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('withdraw.reject') }}">  Rejected <i class="fa fa-list text-theme"></i> </a></li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-user"></i> <span>Deposit</span>
                        </a>
                        <ul class="sub-menu">
                            {{-- <li><a href="{{ route('withdraw.index') }}">  Withdraw all <i class="fa fa-list text-theme"></i> </a></li> --}}
                            <li><a href="{{ route('deposit.request') }}">  Request <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('deposit.approve') }}">  Approved <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('deposit.reject') }}">  Rejected <i class="fa fa-list text-theme"></i> </a></li>
                        </ul>
                    </li>



                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-user"></i> <span>IPO</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('ipo.index') }}">  IPO Declaration <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('admin.apply-ipo.index') }}">   IPO Order <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('admin.apply-ipo.approve') }}">  IPO Approved <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('admin.apply-ipo.reject') }}"> IPO Reject <i class="fa fa-list text-theme"></i> </a></li>

                        </ul>
                    </li>


                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-user"></i> <span>IPO Master Code</span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('admin.child-ipo.index') }}">  Master Code Request <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('admin.child-ipo.approve') }}">  Master Code Approved <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('admin.child-ipo.reject') }}">  Master Code Reject <i class="fa fa-list text-theme"></i> </a></li>

                        </ul>
                    </li>



                  <!--  <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-money"></i> <span>Accounts </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('deposit.index') }}">  Deposit  <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{ route('withdraw.request') }}">  Withdrawal Request  <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('withdraw.index') }}">  Withdraw  <i class="fa fa-plus text-theme"></i></a></li>

                        </ul>
                    </li>
-->
                    <!-- Sohag -->
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-envelope"></i> <span>SMS </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('custom.message') }}">  Custom Message  <i class="fa fa-plus text-theme"></i> </a></li>
                           {{--  <li><a href="{{ route('custom.message.bo') }}">  Bo Yearly Charge  <i class="fa fa-plus text-theme"></i> </a></li>
                            <li><a href="{{ route('withdraw.request') }}">  Deposit SMS  <i class="fa fa-plus text-theme"></i></a></li>
                            <li><a href="{{ route('withdraw.index') }}">  Withdrawal SMS  <i class="fa fa-plus text-theme"></i></a></li> --}}

                        </ul>
                    </li>



                     <li class="nav-header">Website</li>

                    <li><a href="{{ route('gallery.index') }}">   <i class="fa fa-photo"></i>  <span>Gallery </span></a></li>
                    <li><a href="{{ route('notice.index') }}">   <i class="fa fa-file"></i> <span> Notices </span> </a></li>
                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Career </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('job.index') }}">  Job Post  <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="">  Applicant  <i class="fa fa-plus text-theme"></i></a></li>



                        </ul>
                    </li>


                     <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-list-ol"></i> <span>Blog </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('admin.blog.index') }}">  Post  <i class="fa fa-list text-theme"></i> </a></li>
                            <li><a href="{{route('blog.category.index')}}">  Category  <i class="fa fa-list text-theme"></i></a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact.index') }}">  <i class="fa fa-envelope"></i>  <span>Contact us </span>   </a></li>
                    <li><a href="{{ route('complain.index') }}">  <i class="fa fa-info"></i>  <span> Complain </span> </a></li>




                    <li class="nav-header">Settings</li>

                    <li class="has-sub">
                        <a href="javascript:;"> <b class="caret"></b> <i class="fa fa-cogs"></i> <span>Web Settings </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('social.index') }}">  Social Media <i class="fa fa-share"></i> </a></li>
                            <li><a href="{{ route('website.setting.index') }}">  Setting <i class="fa fa-cogs text-theme"></i> </a></li>
                            <li><a href="{{ route('slider.index') }}">  Sliders <i class="fa fa-cogs text-theme"></i> </a></li>
                            <li><a href="{{ route('gallery.index') }}"> Gallery <i class="fa fa-cogs text-theme"></i> </a></li>
                            <li><a href="{{ route('website.management.index') }}"> Management <i class="fa fa-cogs text-theme"></i> </a></li>


                        </ul>
                    </li>



                    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                </ul>
            </div>
        </div>




         @yield('content')






   </div>


    <script src="{{ asset('public/backend') }}/assets/js/app.min.js" type="text/javascript"></script>
    <script src="{{ asset('public/backend') }}/assets/js/theme/default.min.js" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/backend/assets/sweetalert/sweetalert2@9.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="{{ asset('public/backend') }}/assets/plugins/tag-it/js/tag-it.min.js"></script>
    <script src="{{ asset('public/js/custom-sms-min.js') }}"></script>


     <script>
        @if(Session::has('message'))

        var type = "{{Session::get('alert-type','info')}}"

        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

        $(document).ready(function() {


            $('.summernote').summernote({
                placeholder: "Let's write", height: 400,
                fontSizes: ['12', '14', '16', '18', '24', '36', '48'],
                toolbar: [ ['fontname', ['fontname']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']], ['insert',
                ['picture', 'myvideo', 'link', 'table', 'hr']],
                ['misc', ['fullscreen', 'undo', 'redo']] ],
                disableDragAndDrop: true, shortcut: false

            });


        });


        $(document).ready(function() {
            $('.select2').select2();




        });

    </script>


     <script>
      tinymce.init({
        selector: '#mytextarea',
        toolbar:
    "undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent",
        width: '100%',
        height: 600,
        content_style: "body {font-size: 14pt;}",
        fontsize_formats:"12px 14px 18px 24px 30px 36px 48px 60px 72px 96px",
      });
    </script>


      <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete this data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href = link;
                    Swal.fire(
                        'Deleted!',
                        'Data has been deleted.',
                        'success'
                    )
                }
            })
        });

    </script>

    @yield('customjs')
</body>
</html>
