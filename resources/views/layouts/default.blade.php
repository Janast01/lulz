
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <!-- plugins:css -->
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <!-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('myassets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
  </head>
  <body>
    <div class="container-scroller">
      @include('layouts._defaulttopnav')
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts._defaultsidenav')
        <!-- partial -->
        <div class="main-panel">
            @yield('content')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <!-- <script src="{{ asset('myassets/vendors/js/vendor.bundle.base.js') }}"></script> -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('myassets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('myassets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('myassets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('myassets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('myassets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('myassets/js/dashboard.js') }}"></script>
    <script src="{{ asset('myassets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>