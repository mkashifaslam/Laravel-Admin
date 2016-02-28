<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>{{ config('app.app_name') }} | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('dist/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('dist/js/respond.min.js') }}"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
      <!-- Content Wrapper. Contains page content -->
    <div class="row">
        <!-- Main content -->
        <section class="content">
            <!-- left column -->
          <div class="col-md-6 col-md-offset-3">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                User Login
              </h1>
            </section>
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Returning User</h3>
                </div><!-- /.box-header -->

                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif

                <!-- form start -->
                <form role="form" method="POST" action="{{ url('/auth/login') }}">
                    {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember"> Remember Me
                      </label>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      </div>
  <!-- jQuery 2.1.4 -->
    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
  </body>
</html>
