<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'LaraBBS') - 汽修宝</title>
    <link rel="stylesheet" href="{{asset('admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-lte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-lte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-lte/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin-lte/dist/css/skins/skin-blue.min.css')}}">
    @guest
        <link rel="stylesheet" href="{{asset('admin-lte/plugins/iCheck/square/blue.css')}}">
    @endguest
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

@auth
    <body class="hold-transition skin-blue sidebar-mini">
@else
    <body class="hold-transition {{Route::currentRouteName()}}-page skin-blue layout-top-nav">
@endauth
<div id="app" class="{{ route_class() }}-page">
<div class="wrapper">
    @include('layouts._header')
    @auth
        @include('layouts._sidebar')
    @endauth

    <div class="content-wrapper">
        @auth
            @yield('section')
        @endauth

        <section class="content container-fluid">

            @yield('content')

        </section>
    </div>

    @include('layouts._footer')
</div>
</div>

<!-- jQuery 3 -->
<script src="/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>

<!-- AdminLTE App -->
<script src="/admin-lte/dist/js/adminlte.min.js"></script>
@guest
    <script src="{{asset('admin-lte/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
@endguest
</body>
</html>