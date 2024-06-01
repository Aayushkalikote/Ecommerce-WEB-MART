<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>
    <meta charset="utf-8" />
    <title>WebMart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ecommerce website " name="description" />
    <meta content="Nepal best ecommerce site" name="description" />
    <meta content="webmart" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_asset/images/logos/webmart-dark.png') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin_asset/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin_asset/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <div id="layout-wrapper">
   @yield('content')
    </div>
       <!--start back-to-top-->
       <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


 <!-- JAVASCRIPT -->
 <script src="{{ asset('admin_asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('admin_asset/libs/simplebar/simplebar.min.js') }}"></script>
{{-- <script src="{{ asset('admin_asset/libs/feather-icons/feather.min.js') }}"></script>--}}


 <!-- App js -->
 <script src="{{ asset('admin_asset/js/app.js') }}"></script>



</body>

</html>
