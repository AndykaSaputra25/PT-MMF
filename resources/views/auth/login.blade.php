<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


  @section('title', 'Login')
  <title>@yield('title') - {{ $about->name_1 }}</title>
  <link rel="icon" href="{{ asset('image/' . $about->icon) }}" type="image/x-icon">
</head>
<body class="hold-transition login-page">
  <div class="container-fluid">
    <div class="row">
    @foreach ($sliders as $slider)
      @if ($slider->title === 'login')
        <div class="col-md-5 p-0 image-overlay">
          <img src="{{ asset('image/' . $slider->image) }}" alt="login image">
        </div>
      @endif
    @endforeach

      <div class="col-md-7 d-flex justify-content-center align-items-center">
        <div class="login-box">
          <!-- /.login-logo -->
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <img src="{{ asset('image/' . $about->icon) }}" alt="logo" style="max-width: 100px;">
              <p class="text-secondary">welcome back!</p>
              <h2><b>Login your account</b></h2>
            </div>
            <div class="card-body">
              <p class="login-box-msg">Sign in to start your session</p>
    
              @error('loginError')
                <div class="alert alert-danger">
                    <strong>Error</strong>
                    <p>{{ $message }}</p>
                </div>
              @enderror
    
              <form method="post">
                  @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                @error('email')
                <small style="color:red">{{$message}}</small>
              @enderror
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                @error('password')
                      <small style="color:red">{{$message}}</small>
              @enderror
                <div class="row">
                  <!-- /.col -->
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
  

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html>
