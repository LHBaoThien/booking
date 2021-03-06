@extends('partner.master')
@section('title')
    Home
@endsection
@section('main')
    <div class="main" role="main">
        <div class="wrap clearfix">
            <!--main content-->
            <div class="content clearfix">
                <!--breadcrumbs-->
                <nav role="navigation" class="breadcrumbs clearfix">
                    <!--crumbs-->
                    <ul class="crumbs">
                        <li><a href="{{ url('partner/trangchu') }}" title="Home">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                    <!--//crumbs-->
                </nav>
                <!--//breadcrumbs-->

                <!--three-fourth content-->
                <section class="offers clearfix full">
                    @if (Session::get('success-login') == 'register_success')
                        <span class="notify-success">{{ Session::get('massage') }}</span>
                    @endif
                    <h1 style="text-align: center;font-size: 50px;">Dashboard</h1>

                    <!--column-->
                    <article class="one-fourth">
                        <div class="details" style="background-color: #17a2b8 ;height: 194px;">
                            <a href="{{ url('partner/list-homestay') }}"> <img
                                    src="{{ URL::to('/') }}/partner/images/ico/homestay.png" alt="" width="80" height="80"
                                    style="
          background-color: #17a2b8 ; margin: 45px auto" /></a>
                            <h4 style="color: white;border-bottom: none;">Homestay</h4>
                            <span style="text-align: center !important;
           position: absolute;
           top: 77%;
           left: 16%;
           font-size: 20px;
          color: #ffff;">{{ $homestay->count() }}</span>
                        </div>
                    </article>
                    <!--//column-->
                    <!--column-->
                    <article class="one-fourth">
                        <div class="details" style="background-color: #28a745 ;height: 194px;">
                            <a href="javascript:"><img src="{{ URL::to('/') }}/partner/images/ico/products1.png" alt=""
                                    width="80" height="80" style="
          background-color: #28a745 ; margin: 45px auto" /></a>
                            <h4 style="color: white;border-bottom: none;">Room</h4>
                            <span style="text-align: center !important;
           position: absolute;
           top: 77%;
           left: 42%;
           font-size: 20px;
           color: #ffff;">{{ $products->count() }}</span>
                        </div>
                    </article>
                    <!--//column-->
                    <!--column-->
                    <article class="one-fourth">
                        <div class="details" style="background-color: #578EBE ;height: 194px;">
                            <a href="{{ url('partner/list-bills') }}"><img href="link"
                                    src="{{ URL::to('/') }}/partner/images/ico/bills.png" alt="" width="80" height="80"
                                    style="
          background-color: #578EBE ; margin: 45px auto" /></a>
                            <h4 style="color: white;border-bottom: none;">Bills</h4>
                            <span style="text-align: center !important;
           position: absolute;
           top: 77%;
           left: 66%;
           font-size: 20px;
          color: #ffff;">{{ $bill->count() }}</span>
                        </div>
                    </article>
                    <!--//column-->

                    <!--column-->
                    <article class="one-fourth last">
                        <div class="details" style="background-color: #E25A59;height: 194px;">
                            <a href="javascript:"><img src="{{ URL::to('/') }}/partner/images/ico/comment.png" alt=""
                                    width="80" height="80" style="
          background-color: #E25A59; margin: 45px auto" /></a>
                            <h4 style="color: white;border-bottom: none;">Rating</h4>
                            <span style="text-align: center !important;
           position: absolute;
           top: 77%;
           left: 92%;
           font-size: 20px;
          color: #ffff;">{{ $comments->count() }}</span>
                    </article>
                    <!--//column-->
                </section>
                <!--//three-fourth content-->
            </div>
            <!--//main content-->
        </div>
    </div>
@endsection
