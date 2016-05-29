<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Defara Admin')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- all css --}}
    <link href="{{asset('css/all.css')}}" rel="stylesheet" type="text/css" />
    {{-- app css --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body class="fixed skin-red-light">
    <!-- Header -->
    @include('admin.common.header')

    <!-- Sidebar -->
    @include('admin.common.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('title', 'Laravel Admin')
                <small>@yield('page_description', null)</small>
            </h1>
        </section>

        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Footer -->
    @include('admin.common.footer')

    {{-- requrejs --}}
    <script src="{{ asset('js/require.min.js') }}" data-main="{{ asset('js/admin/main.js') }}"></script>
</body>

</html>
