<header>
    <div class="wrap clearfix">
        <!--logo-->
        <h1 class="logo"><a href="../" title="Himinn Booking - Home"><img src="user/images/txt/logo.png"
                    alt="Himinn Booking" /></a></h1>
        <!--//logo-->

        <!--ribbon-->
        <div class="ribbon">
            <nav>
                @if (Auth::check() && Auth::user()->permision == 2)
                    <ul class="profile-nav">
                        <?php
                        $name = explode(' ', Auth::user()->name);
                        $last_name = array_pop($name);
                        ?>
                        <li class="active" id="static"><a class="no-href" title="Thông tin">Chào!
                                <br />{{ $last_name }}</a></li>
                        <li class=""><a class="li_list" href="{{ route('userAccount', ['id' => Auth::user()->id]) }}"
                                title="My Account">Thông tin</a></li>
                        <li class=""><a href="{{ route('logoutUser') }}" class="li_list" title="My Account">Đăng
                                xuất</a></li>
                    </ul>
                @else
                    <ul class="profile-nav">
                        <li class="active" id="static"><a class="no-href" title="My Account">Tài khoản</a></li>
                        <li><a class="register no-href li_list" title="Register">Đăng ký</a></li>
                        <li><a class="login no-href li_list" title="Login">Đăng nhập</a></li>
                    </ul>
                @endif
                <ul class="currency-nav">
                    <li class="active"><a href="{{ url('/partner/login-partner') }}" target="_blank"
                            title="Bạn muốn hợp tác với chúng tôi?">Đối tác</a></li>
                </ul>
            </nav>
        </div>
        <!--//ribbon-->

        <!--search-->
        <!-- <div class="search">
    <form id="search-form" method="get" action="search-form">
     <input type="search" placeholder="Search entire site here" name="site_search" id="site_search" />
     <input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
    </form>
   </div> -->
        <!--//search-->

        <!--contact-->
        <div class="contact">
            <span>24/7 Support number</span>
            <span class="number"><a href="tel:0971097399" style="color: white">+84971 0973 99</a></span>
        </div>
        <!--//contact-->
    </div>

    <!--main navigation-->
    <nav class="main-nav" role="navigation" id="nav">
        <ul class="wrap">
            <li @yield('home')><a href="{{ route('userHomePage') }}" title="Home">Trang chủ</a></li>
            <li @yield('blog')><a href="{{ route('userBlog') }}" title="Blog">Blog</a></li>
            <li @yield('hot_deal')><a href="{{ route('userHotDeal') }}" title="Hot deals">Khuyến mại</a></li>
        </ul>
    </nav>
    <!--//main navigation-->

    <!-- Popup -->
    <div class="popup">
        <!-- Login -->
        @include("user.popups.login")
        <!-- Register -->
        @include("user.popups.register")
    </div>
    <!-- //Popup -->
</header>
