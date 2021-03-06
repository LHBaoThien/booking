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
    <title>Partner of Book Your Travel</title>
    {{-- <base href="{{asset('public/partner')}}"> --}}
    {{-- {{ asset(' ') }} --}}
    <link rel="stylesheet" href="{{ asset('partner/css/style.css') }}" type="text/css"
        media="screen,projection,print" />
    <link rel="stylesheet" href="{{ asset('partner/css/prettyPhoto.css') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('partner/css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('partner/images/favicon.ico') }}" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('partner/js/css3-mediaqueries.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/sequence.jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery.uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/selectnav.js') }}"></script>
    <script type="text/javascript" src="{{ asset('partner/js/scripts.js') }}"></script>
</head>

<body>
    <!--header-->
    @include('partner/login/header-login')
    <!--//header-->

    <!--main-->
    @yield('content')
    <!--//main-->

    <!--footer-->
    @include('partner/login/footer-login')
    <!--//footer-->
</body>

</html>
