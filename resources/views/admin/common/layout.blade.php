<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- all css -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />
    <!-- app css  -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="{{ asset('js/require.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/admin/main.js') }}"></script>
</head>
<body class="hold-transition skin-red-light sidebar-mini">

    <div class="wrapper">

        @include('admin.common.header')

        @include('admin.common.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
              <h1>
                @yield('page-title', 'Laravel Admin')
                <small>@yield('page-description', null)</small>
              </h1>

              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('admin.common.footer')
    </div>
</body>
</html>
