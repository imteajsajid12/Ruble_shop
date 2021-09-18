<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    {{-- <!-- Fontfaces CSS-->
    <link href="{{ asset('/assets/css/font-face.css') }}" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('/assets/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('/assets/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    {{-- <link href="{{ asset('/assets/vendor/slick/slick.css" rel="stylesheet') }}" media="all">
    <link href="{{ asset('/assets/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all"> --}}

    <!-- Main CSS-->
    <link href="{{ asset('/assets/css/theme.css') }}" rel="stylesheet" media="all">
    @stack('css')
    {{-- data table --}}

    <link rel="stylesheet" href="{{asset('assets/css/data_table.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/table_bootstrap.css')}}">





</head>

<body class="animsition">
    <div id="app">
        <div class="page-wrapper">
        </div>
        <main class="py-4">
            <div class="counter">
                @yield('content')
                @include('sweetalert::alert')
            </div>
        </main>
    </div>

    {{-- table end --}}
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Jquery JS-->
    <script src="{{ asset('/assets/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/assets/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('/assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/animsition/animsition.min.js') }}"></script>
    {{-- <script src="{{ asset('/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script> --}}
    {{-- <script src="{{ asset('/assets/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/counter-up/jquery.counterup.min.js') }}">
    </script> --}}
    {{-- <script src="{{ asset('/assets/vendor/circle-progress/circle-progress.min.js') }}"></script> --}}
    <script src="{{ asset('/assets/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('/assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('/assets/vendor/select2/select2.min.js') }}">
    </script> --}}
    <!-- Main JS-->
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    @stack('js')
    <script src="{{ asset('/assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('/assets/js/data_table.js') }}"></script>
    <script src="{{ asset('/assets/js/data_table_bootstrap.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();

        });

    </script>

</body>

</html>
<!-- end document-->
