<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword"
        content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <base href="{{asset('public/admin_asset')}}"> --}}
    {{-- {{ asset(' ') }} --}}
    <link id="bootstrap-style" href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin_asset/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link id="base-style" href="{{ asset('admin_asset/css/style.css') }}" rel="stylesheet">
    <link id="base-style-responsive" href="{{ asset('admin_asset/css/style-responsive.css') }}" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'> -->
    <!-- end: CSS -->
    <link rel="shortcut icon" href="{{ asset('admin_asset/img/favicon.ico') }}">
    <script src="{{ asset('admin_asset/js/jquery_321/jquery-3.2.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin_asset/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin_asset/ckfinder/ckfinder.js') }}"></script>
</head>

<body>
    <!-- start: Header -->
    @include('admin.layout.header')
    <!-- start: Header -->
    @include('admin.layout.main')

    @include('admin.layout.footer')

    @yield('script')
    @include('admin.layout.scrip')

</body>

</html>
