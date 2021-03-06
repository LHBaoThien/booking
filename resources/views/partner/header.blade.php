<header>
    <div class="wrap clearfix">
        <!--logo-->
        <h1 class="logo"><a href="{{ url('partner/trangchu') }}" title="Himinn Booking - Home"><img
                    src="/partner/images/txt/logo.png" alt="Himinn Booking" /></a></h1>
        <!--//logo-->

        <!--ribbon-->
        <div class="ribbon">
            <nav>
                <ul class="profile-nav">
                    <?php
                    $name = explode(' ', Auth::user()->name);
                    $last_name = array_pop($name);
                    ?>
                    <li class="active">
                        @if (Auth::check())<a title="{{ Auth::user()->name }}">
                        @endif Hi<br />{{ $last_name }} !!</a>
                    </li>
                    <li><a href="{{ url('partner/my-account', ['id' => Auth::user()->id]) }}"
                            title="Thông tin cá nhân">Thông tin</a></li>
                    <li><a href="{{ asset('partner/logout') }}" title="Đăng xuất">Đăng xuất</a></li>
                </ul>
            </nav>
        </div>
        <!--//ribbon-->

        <!--search-->
        <div class="search">
            {{-- <form id="search-form" method="get" action="search-form">
                <input type="search" placeholder="Search entire site here" name="site_search" id="site_search" />
                <input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
            </form> --}}
        </div>
        <!--//search-->

        <!--contact-->
        {{-- <div class="contact">
            <span style="font-size: 14px; color:white">24/7 Hỗ trợ - Liên hệ:
                <a href="tel:0971097399" style="color: white"> 0971 0973 99</a></span>
        </div> --}}

        <!--//contact-->
    </div>

    <!--main navigation-->
    <nav class="main-nav" role="navigation" id="nav">
        <ul class="wrap">
            <li><a href="{{ url('partner/trangchu') }}" title="Home" class="active">Trang chủ</a></li>
            <li><a href="{{ url('partner/list-homestay') }}">Homestay</a>
                <ul>
                    <li><a href="{{ route('View_Restore_homestay') }}">Khôi phục Homestay</a></li>
                </ul>
            </li>
            <li class="listbills"><a href="{{ url('partner/list-bills') }}"> Hóa đơn</a>
                <ul>
                    <li><a href="{{ url('partner/total-revenue') }}">Thống Kê Hóa Đơn</a></li>
                    <li><a href="{{ route('total_loyal_customers') }}">Danh Sách Khách Hàng </a></li>
                </ul>
            </li>
            <li><a href="{{ route('partnerProductManage') }}">Trạng thái phòng</a>
        </ul>
    </nav>
    <!--//main navigation-->
</header>
