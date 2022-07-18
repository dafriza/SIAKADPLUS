<!DOCTYPE html>
<!--
Template Name: NobleUI - Admin & Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: You must have a valid license purchased only from above link or https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAKAD+</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('../assets/vendors/core/core.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('../assets/css/demo_1/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('../assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    {{-- Owl CSS --}}
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('Components.Mahasiswa.Sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('Components.Mahasiswa.Navbar')
            <!-- partial -->

            @yield('Content')

            <!-- partial:partials/_footer.html -->
            @include('Components.Mahasiswa.Footer')
            <!-- partial -->

        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('../assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('../assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('../assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('../assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('../assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('../../../assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('../../../assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('../../../assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('../assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('../assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- custom js for this page -->
    <script src="{{ asset('../assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('../assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('../../../assets/js/data-table.js') }}"></script>
    <!-- end custom js for this page -->
    {{-- Owl JS --}}
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/Contents/Carousel_course.js') }}"></script>
    {{-- End Of Owl JS --}}
    <script src="{{ asset('getData.js') }}"></script>

</body>

</html>
