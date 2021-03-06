<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="HandheldFriendly" content="True">
    <title>@yield('title')</title>
    {{-- <base href="{{asset('public/partner')}}"> --}}
    {{-- {{ asset(' ') }} --}}

    <link rel="stylesheet" href="{{ asset('partner/css/style.css') }}" type="text/css"
        media="screen,projection,print" />
    <link rel="stylesheet" href="{{ asset('partner/css/prettyPhoto.css') }}" type="text/css" media="screen" />

    <link href="{{ asset('partner/fullcalendar/lib/main.css') }}" rel='stylesheet' />

    <link rel="stylesheet" href="{{ asset('partner/css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('partner/images/favicon.ico') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="{{ asset('partner/js/jquery-1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/css3-mediaqueries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery.raty.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery.uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/sequence.jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/sequence.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/selectnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/scripts.js') }}"></script>
    <script type="text/javascript" charset="utf8"
        src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <script src="{{ asset('partner/fullcalendar/lib/main.js') }}"></script>
    <script type="text/javascript">
        @yield('script')
    </script>
    @yield('script2')
</head>

<body>
    <!--header-->
    @include('partner/header')
    <!--//header-->

    <!--main-->
    @yield('main')
    <!--//main-->

    <!--footer-->
    @include('partner/footer')
    <!--//footer-->
    <script type="text/javascript">
        @yield('script1')
    </script>
</body>

</html>
