<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}admin/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/') }}admin/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/vendors/styles/style.css" />

    <style>
        .toster {
            position: fixed;
            top: 20px;
            right: 40px;
            width: 300px;
            height: 60px;
            z-index: 1111;
            justify-content: center;
            padding-top: 15px;
            text-align: center;
            border-radius: 8px;
        }

        .toster>h4 {
            color: white;
        }
    </style>
</head>

<body>
    @include('admin.layouts.nav')
    @include('admin.layouts.modalpopup')
    @if (session('message'))
        <div class="toster" style="background-color: rgba(49, 192, 49, 0.945)">
            <h4>{{ session('message') }}</h4>
        </div>
    @endif
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            @yield('content')
        </div>
    </div>
    <!-- js -->
    <script src="{{ asset('/') }}admin/vendors/scripts/core.js"></script>
    <script src="{{ asset('/') }}admin/vendors/scripts/script.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/scripts/process.js"></script>
    <script src="{{ asset('/') }}admin/vendors/scripts/layout-settings.js"></script>
    <script src="{{ asset('/') }}admin/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('/') }}admin/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}admin/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}admin/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}admin/vendors/scripts/dashboard3.js"></script>
    <script src="{{ asset('admin/modals.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</body>

</html>
