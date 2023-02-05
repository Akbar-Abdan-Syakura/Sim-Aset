<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('v_templates_lte/plugins/fontawesome-free/css/all.min.cs') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('v_templates_lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('v_templates_lte/dist/css/adminlte.min.css') }}">


</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <!-- /.login-logo -->
        <x-alert></x-alert>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h5>
                    Sistem Informasi Management Asset
                </h5>
                <h4>
                    <b>
                        PT. Dapensi Trio Usaha
                    </b>
                </h4>
            </div>
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('auth.authenticate') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
    <link rel="stylesheet" href="{{ asset('v_templates_lte/plugins/jquery/jquery.min.js') }}">
    <link rel="stylesheet" href="{{ asset('v_templates_lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('v_templates_lte/dist/js/adminlte.min.js') }}">
</body>

</html>
