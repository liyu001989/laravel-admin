<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'LARAVEL ADMIN')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- all css --}}
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>LARAVEL</b> - ADMIN</a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg text-warning">Sign in to start your session</p>

            <form action="{{ route('admin.auth.login.post') }}" method="POST">
                {{ csrf_field() }}
                @include('admin.common.errors', ['errors'=>$errors])

                <div class="form-group has-feedback">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password"  name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-danger btn-block btn-flat">Login In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
