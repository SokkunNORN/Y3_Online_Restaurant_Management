<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Charts</title>

  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="../css/admin/sb-admin-2.css" rel="stylesheet">

  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  @guest
    <body class="bg-gradient-primary">
    @yield('content')
  @else
    <div id="wrapper">
      @include('admin.layouts.sidebar')
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          @include('admin.layouts.nav')
          <div class="container-fluid">
            @yield('content')
          </div>
          @include('admin.layouts.footer')
        </div>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  @endguest

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="../js/admin/sb-admin-2.min.js"></script>

  <script src="../vendor/chart.js/Chart.min.js"></script>

  <script src="../js/admin/demo/chart-area-demo.js"></script>
  <script src="../js/admin/demo/chart-pie-demo.js"></script>
  <script src="../js/admin/demo/chart-bar-demo.js"></script>


<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/admin/demo/datatables-demo.js"></script>

</body>

</html>
