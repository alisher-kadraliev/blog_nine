<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    {{--    <!-- iCheck -->--}}
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    {{--    <!-- JQVMap -->--}}
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    {{--    <!-- Theme style -->--}}
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    {{--    <!-- overlayScrollbars -->--}}
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    {{--    <!-- Daterange picker -->--}}
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    {{--    <!-- summernote -->--}}
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <div>
        @include('admin.navbar.navbar')
    </div>
    <!-- /.navbar -->

    @include('admin.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Home</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        {{--        <section class="content">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <a href="{{route('admin.category.create')}}" class="btn btn-primary mb-3">Create Category</a>--}}
        {{--                <div class="col-12 p-0">--}}
        {{--                    <div class="card">--}}

        {{--                        <div class="card-body table-responsive p-0">--}}
        {{--                            <table class="table table-hover text-nowrap">--}}
        {{--                                <thead>--}}
        {{--                                <tr>--}}
        {{--                                    <th>Id</th>--}}
        {{--                                    <th>Title</th>--}}
        {{--                                    <th>View</th>--}}
        {{--                                    <th>Edit</th>--}}
        {{--                                    <th>Delete</th>--}}
        {{--                                </tr>--}}
        {{--                                </thead>--}}
        {{--                                <tbody>--}}
        {{--                                @foreach($categories as $category)--}}
        {{--                                    <tr>--}}
        {{--                                        <td>{{$category->id}}</td>--}}
        {{--                                        <td>{{$category->title}}</td>--}}
        {{--                                        <td><a href="{{route('admin.category.edit')}}"><i class="fas fa-eye"></i></a></td>--}}
        {{--                                        <td>11-7-2014</td>--}}
        {{--                                        <td><span class="tag tag-success">Approved</span></td>--}}
        {{--                                    </tr>--}}
        {{--                                @endforeach--}}
        {{--                                </tbody>--}}
        {{--                            </table>--}}
        {{--                        </div>--}}

        {{--                    </div>--}}

        {{--                </div>--}}
        {{--            </div><!-- /.container-fluid -->--}}
        {{--        </section>--}}
        {{--        <!-- /.content -->--}}
        {{--    </div>--}}




        {{--    $(".how-it-works").eq(0).addClass("active");--}}
        {{--    $(".timeline").eq(0).addClass("active");--}}
        {{--    setInterval(function() {--}}
        {{--    $(".how-it-works.active").next().next().addClass("active");--}}
        {{--    $(".timeline.active").next().next().addClass("active");--}}
        {{--    }, 1500)--}}

        <!-- /.content-wrapper -->
        {{--    <footer class="main-footer">--}}
        {{--        <div class="text-center">Blog</div>--}}

        {{--    </footer>--}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        <div class="container mx-5">
            <div class="col-4">
                <div class="row m-0 align-items-center main_content">
                    <div class="col-auto text-center">
                        <div class="circle_text">Text</div>
                    </div>
                    <div class="col">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio.</div>
                </div>
                <div class="row timeline active">
                    <div class="col-2">
                        <div class="corner top-right">

                        </div>
                    </div>
                    <div class="col-8"></div>
                    <div class="col-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .timeline .top-right {
            left: 50%;
            top: -50%;
        }
        .main_content .circle_text {
            transform: rotate(360deg);
            transition: .5s all;
            background-color: #eb5f43;
        }

        .circle_text {
            font-weight: 700;
            width: 60px;
            height: 60px;
            line-height: 60px;
            border-radius: 100%;
            color: #fff;
            /*background: #fff;*/
            z-index: 2;
            margin: 0 0 0 -30px;
            transform: rotate(0deg);
        }

        .timeline .col-2 {
            display: flex;
            overflow: hidden;
        }
        .timeline .corner {
            border: 3px solid #eb5f43;
            width: 100%;
            position: relative;
            border-radius: 15px;
        }
        .timeline div {
            padding: 0;
            height: 40px;
        }
    </style>
    <script>


    </script>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.∆.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
    <script>
        $(function () {
                bsCustomFileInput.init();
            }
        );
        $('.select2').select2()

    </script>
</body>
</html>
