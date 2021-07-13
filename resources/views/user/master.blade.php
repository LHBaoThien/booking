<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">

    {{-- <base href="{{asset('public/user')}}"> --}}
	<title>@yield('title')</title>
    {{-- {{ asset(' ') }} --}}
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" href="{{ asset('user/css/prettyPhoto.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" href="{{ asset('user/css/custom.css') }}" type="text/css" media="screen" />
	<link rel="shortcut icon" href="{{ asset('user/images/favicon.ico') }}" />

	<script type="text/javascript" src="{{ asset('user/js/jquery-1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/css3-mediaqueries.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.prettyPhoto.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.raty.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/jquery.uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/sequence.jquery-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/sequence.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/selectnav.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/scripts.js') }}"></script>
    <script type="text/javascript">
        @yield('script')
    </script>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
</head>
<body>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "118885342839635");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

     <!-- Share fb -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="wqeUdcYT"></script>


    <!-- Zalo Plugin chat Code -->
    <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Xin chào! Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="300" data-height="300"></div>

    <script src="https://sp.zalo.me/plugins/sdk.js"></script>

	<!--header-->
	@include("user.includes.header")
	<!--//header-->
	@yield('content')
	<!--footer-->
    @include("user.includes.footer")
    <!--//footer-->
	@yield('scriptLogin')
	@yield('scriptRegister')
	@yield('scriptEnd')

</body>
</html>
