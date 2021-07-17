<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url( 'backend/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url( 'backend/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark- elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1 mb-2 d-flex" style="background: grey;
    border-radius: 12px;">
        <div class="image">
          <img src="{{url('backend/dist/img/IMG_20191211_221304022.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color: aliceblue;
    font-family: cursive;
    font-size: large;"> {{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="{{url('category')}}" class="nav-link" style="background: #aca6a6;
    color: black;">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
        
           <li class="nav-item">
            <a href="{{url('category/items')}}" class="nav-link" style="background: #aca6a6;color: black;">
             <i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;
              <p>Category</p>

            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('category/courses')}}" class="nav-link" style="background: #aca6a6;color: black;">
             <i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;
              <p>Courses</p>

            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('category/banner')}}" class="nav-link" style="background: #aca6a6;color: black;">
              <i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;
              <p>Banner</p>

            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('front/navbarfooter')}}" class="nav-link" style="background: #aca6a6;color: black;">
              <i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;
              <p>Navbar/footer</p>

            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('category/onlinecourse')}}" class="nav-link" style="background: #aca6a6;color: black;">
         <i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;
              <p>Online Course</p>

            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  style="background: #aca6a6;
    color: black;" 

            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                                       
             <i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;
              <p> {{ __('Logout') }}</p>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
            </form>

          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@section("content")
@show
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url( 'backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url( 'backend/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.btton)
</script>
<!-- Bootstrap 4 -->
<script src="{{url( 'backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url( 'backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url( 'backend/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url( 'backend/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url( 'backend/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url( 'backend/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url( 'backend/plugins/moment/moment.min.js')}}"></script>
<script src="backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url( 'backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url( 'backend/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url( 'backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url( 'backend/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url( 'backend/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url( 'backend/dist/js/demo.js')}}"></script>
</body>
</html>


