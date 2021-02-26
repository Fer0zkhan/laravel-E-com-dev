<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <link href="{{ asset('admin_assets/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_assets/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link id="sleek-css" rel="stylesheet" href="{{ asset('admin_assets/assets/css/sleek.css') }}" />
    <script src="{{ asset('admin_assets/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">

    @yield('login_content')
    
    {{-- @extends('admin.admin_views.innerHeader') --}}

    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script> -->
    <script src="{{ asset('admin_assets/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/toaster/toastr.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/ladda/spin.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/ladda/ladda.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/plugins/jekyll-search.min.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/sleek.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/date-range.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/map.js') }}"></script>
    <script src="{{ asset('admin_assets/assets/js/custom.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script> -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js">
    </script>
</body>

</html>
