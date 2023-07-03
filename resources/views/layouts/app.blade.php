<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('image/' . $about->icon) }}" type="image/x-icon">
  <!-- Add the evo-calendar.css for styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/css/evo-calendar.min.css"/>
  <title>@yield('title') - {{$about->name_1 }}</title>
@yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar account -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="user-panel d-flex">
          <div class="info">
            <a href="mailto:25andykas@gmail.com" class="d-block">{{ Auth::user()->email; }}</a>
          </div>
          <div class="image pe-3">
            <img src="{{ asset('image/man.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
        </div>
      </li>
    </ul>
  </nav>  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link pb-3" target="_blank">
      <img src="{{ asset('image/' . $about->icon) }}" alt="MMF Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MMF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav pb-2 nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
             <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/" target="_blank" class="nav-link">
             <i class="nav-icon fas fa-link"></i>
              <p>
                Lihat Website
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/sliders*') || request()->is('admin/management*') || request()->is('admin/services*') || request()->is('admin/certificate*') || request()->is('admin/gallery*') || request()->is('admin/clients*') || request()->is('admin/location*') || request()->is('admin/news*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/sliders" class="nav-link {{ request()->is('admin/sliders') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/management" class="nav-link {{ request()->is('admin/management') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/services" class="nav-link {{ request()->is('admin/services') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/certificate" class="nav-link {{ request()->is('admin/certificate') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Certificate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/gallery" class="nav-link {{ request()->is('admin/gallery') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/clients" class="nav-link {{ request()->is('admin/clients') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/location" class="nav-link {{ request()->is('admin/location') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/news" class="nav-link {{ request()->is('admin/news') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data News</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/admin/about" class="nav-link {{ request()->is('admin/about') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Company
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/contact" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
              <i class="nav-icon fas fa-phone"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
          <li class="nav-item">
            <hr class="text-white">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="dropdown-item">
                <a href="/admin" class="nav-link ps-0">
                  <i class="nav-icon fas fa-arrow-left"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </button> 
            </form>
          </li>
          {{-- <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="nav-link" name="logout-button">
                <i class="nav-icon fas fa-arrow-left"></i>
                <p>
                    Logout
                </p>
              </button>
            </form>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">@yield('title')</h5>
              </div>
              <div class="card-body">

                @yield('content')


              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <img src="{{ asset('image/' . $about->icon) }}" width="80" alt="icon">
      {{ $about->name_1 }}
    </div>
    <!-- Default to the left -->
    <div class="copyright">
      &copy; Copyright <strong>{{ $about->name_1 }}</strong>.
      <p>All Right Reserved <?php echo date('Y'); ?></p>
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
@stack('scripts')
</body>
</html>
