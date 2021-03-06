@extends("user.master")

@section('title')
    My Account
@endsection

@section('script')
    $(document).ready(function() {
    $('.starRate').raty({
    score : 5
    });

    $('#provinces').change(function(){
    var cid = $(this).val();
    if(cid){
    $.ajax({
    type:"get",
    url: '../get-district/'+cid,//Please see the note at the end of the post**
    success:function(res){
    if(res.length !== 0){
    $("#districts").empty();
    $("#wards").empty();
    $("#districts").append('<option></option>');
    $.each(res,function(key,value){
    $("#districts").append('<option value="'+key+'">'+value+'</option>');
    });
    }else{
    $("#districts").empty();
    $("#wards").empty();
    $("#districts").append('<option></option>');
    $("#wards").append('<option></option>');
    }
    }

    });
    }
    });

    $('#districts').change(function(){
    var cid = $(this).val();
    if(cid){
    $.ajax({
    type:"get",
    url: '../get-ward/'+cid,//Please see the note at the end of the post**
    success:function(res){
    if(res){
    $("#wards").empty();
    $("#wards").append('<option></option>');
    $.each(res,function(key,value){
    $("#wards").append('<option value="'+key+'">'+value+'</option>');
    });
    }
    }
    });
    }
    });
    });
@endsection
@section('content')
    <!--main-->
    <div class="main" role="main">
        <div class="wrap clearfix">
            <!--main content-->
            <div class="content clearfix">
                <!--breadcrumbs-->
                <nav role="navigation" class="breadcrumbs clearfix">
                    <!--crumbs-->
                    <ul class="crumbs">
                        <li><a href="{{ route('userHomePage') }}" title="Home">Home</a></li>
                        <li><a href="#" title="My Account">My Account</a></li>
                    </ul>
                    <!--//crumbs-->

                </nav>
                <!--//breadcrumbs-->

                <!--three-fourth content-->
                <section class="three-fourth">
                    <h1>My account
                        <span class="alert-account">
                            @if (Session::get('rating') == 'success')
                                <i class="done_account">{{ Session::get('massage') }}</i>
                            @elseif(Session::get('cancel-booking') == 'success')
                                <i class="done_account">{{ Session::get('massage') }}</i>
                            @endif
                        </span>
                    </h1>
                    <!--inner navigation-->
                    <nav class="inner-nav">
                        <ul>
                            <li><a href="#MySettings" title="Settings">C??i ?????t t??i kho???n</a></li>
                            <li><a href="#MyBookings" title="My Booking">Ph??ng ??ang ?????t</a></li>
                            <li><a href="#MyHistorys" title="Bookings History">L???ch s??? ?????t ph??ng</a></li>
                        </ul>
                    </nav>
                    <!--//inner navigation-->

                    <!--MySettings-->
                    <section id="MySettings" class="tab-content">
                        <article class="mysettings">
                            <h1>Th??ng tin c???a b???n</h1>
                            <table>
                                <tr>
                                    <th>H??? v?? T??n</th>
                                    <td>{{ $user->name }}&nbsp&nbsp
                                        @if (Session::get('edit_name') == 'success')
                                            <i class="done_account">{{ Session::get('massage') }}</i>
                                        @endif
                                        <!--edit fields-->
                                        <div class="edit_field" id="field1">
                                            <form action="{{ route('userEditName', ['id' => $id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <label for="new_name">Nh???p t??n m???i: </label>
                                                <input type="text" id="name" name="name" required="required" />
                                                <input type="submit" value="C???p nh???t" name="editUserName"
                                                    class="gradient-button" id="editUserName" />
                                            </form>
                                        </div>
                                        <!--//edit fields-->
                                    </td>
                                    <td><a href="#field1" class="gradient-button edit">S???a</a></td>
                                </tr>
                                <tr>
                                    <th>E-mail: </th>
                                    <td>{{ $user->email }}&nbsp&nbsp
                                        @if (Session::get('edit_email') == 'success')
                                            <i class="done_account">{{ Session::get('massage') }}</i>
                                        @elseif( count($errors->email) >0)
                                            <i class="error_account">{{ $errors->email->first('email') }}</i><br />
                                        @endif
                                        <!--edit fields-->
                                        <div class="edit_field" id="field2">
                                            <form action="{{ route('userEditEmail', ['id' => $id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <label for="email">Nh???p ?????a ch??? email m???i: </label>
                                                <input type="email" id="email" name="email" />
                                                <input type="submit" value="C???p nh???t" name="editEmail"
                                                    class="gradient-button" id="editEmail" />
                                            </form>
                                        </div>
                                        <!--//edit fields-->
                                    </td>
                                    <td><a href="#field2" class="gradient-button edit">S???a</a></td>
                                </tr>
                                <tr>
                                    <th>M???t kh???u: </th>
                                    <td>
                                        @if (Session::get('edit_pass') == 'success')
                                            <i class="done_account">{{ Session::get('massage') }}</i>
                                        @elseif( count($errors->password) >0)
                                            <i class="error_account">?????i m???t kh???u kh??ng th??nh c??ng</i>
                                        @else
                                            ????????????????????????????????????
                                        @endif
                                        <!--edit fields-->
                                        <div class="edit_field" id="field3">
                                            <form action="{{ route('userEditPassword', ['id' => $id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="input-pass">
                                                    <label for="pass_old">Nh???p m???t kh???u c??: </label>
                                                    <input type="password" id="pass_old" class="show" name="pass_old"
                                                        required="required" />
                                                    <input type="button" class="btnShow showPassword" value="show">
                                                    @if ($errors->has('pass_old'))
                                                        <i class="error_account">{{ $errors->first('pass_old') }}</i><br />
                                                    @endif
                                                </div>
                                                <div class="input-pass">
                                                    <label for="pass_new">Nh???p m???t kh???u m???i: </label>
                                                    <input type="password" id="pass_new" class="show" name="pass_new"
                                                        required="required" />
                                                    <input type="button" class="btnShow showPassword" value="show">
                                                    @if ($errors->has('pass_new'))
                                                        <i class="error_account">{{ $errors->first('pass_new') }}</i><br />
                                                    @endif
                                                </div>
                                                <div class="input-pass">
                                                    <label for="confirm_pass_new">Nh???p l???i m???t kh???u m???i: </label>
                                                    <input type="password" id="confirm_pass_new" class="show"
                                                        name="confirm_pass_new" required="required" />
                                                    <input type="button" class="btnShow showPassword" value="show">
                                                    @if ($errors->has('confirm_pass_new'))
                                                        <i
                                                            class="error_account">{{ $errors->first('confirm_pass_new') }}</i><br />
                                                    @endif
                                                </div>
                                                <input type="submit" value="C???p nh???t" name="editPassword"
                                                    class="gradient-button" id="editPassword" />
                                            </form>
                                        </div>
                                        <!--//edit fields-->
                                    </td>
                                    <td><a href="#field3" class="gradient-button edit">S???a</a></td>
                                </tr>
                                <tr>
                                    <th>S??? ??i???n tho???i: </th>
                                    <td>{{ $user->phone }}&nbsp&nbsp
                                        @if (Session::get('edit_phone') == 'success')
                                            <i class="done_account">{{ Session::get('massage') }}</i>
                                        @elseif( count($errors->phone) >0)
                                            <i class="error_account">{{ $errors->phone->first('phone') }}</i><br />
                                        @endif
                                        <!--edit fields-->
                                        <div class="edit_field" id="field4">
                                            <form action="{{ route('userEditPhone', ['id' => $id]) }}" method="post">
                                                {{ csrf_field() }}
                                                <label for="phone">Nh???p s??? ??i???n tho???i m???i: </label>
                                                <input type="text" id="phone" name="phone" minLength="6" maxLength="12"
                                                    required="required" />
                                                <input type="submit" value="C???p nh???t" name="editPhone"
                                                    class="gradient-button" id="editPhone" />
                                            </form>
                                        </div>
                                        <!--//edit fields-->
                                    </td>
                                    <td><a href="#field4" class="gradient-button edit">S???a</a></td>
                                </tr>
                                <tr>
                                    <th>???nh ?????i di???n: </th>
                                    <td>
                                        <img src="{{ URL::to('/') }}/{{ $user->avatar }}" alt="avatar" width="70"
                                            height="70">
                                        @if (Session::get('edit_avatar') == 'success')
                                            <i class="done_account">{{ Session::get('massage') }}</i>
                                        @elseif( count($errors->avatar) >0)
                                            <i class="error_account">{{ $errors->avatar->first('avatar') }}</i><br />
                                        @endif
                                        <!--edit fields-->
                                        <div class="edit_field" id="field5">
                                            <form action="{{ route('userEditAvatar', ['id' => $id]) }}" method="post"
                                                enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <label for="avatar">Ch???n ???nh ?????i di???n m???i </label>
                                                <input type="file" id="avatar" name="avatar" /><br />
                                                <input type="submit" value="C???p nh???t" name="editAvatar"
                                                    class="gradient-button" id="editAvatar" />
                                            </form>
                                        </div>
                                        <!--//edit fields-->
                                    </td>
                                    <td><a href="#field5" class="gradient-button edit">S???a</a></td>
                                </tr>
                                <tr>
                                    <th>?????a ch???: </th>
                                    @if (!empty($user->address_detail) && !empty($user->xaid))
                                        <td>{{ $user->address_detail . ', ' . $user->ward->name . ', ' . $user->ward->district->name . ', ' . $user->ward->district->province->name }}
                                            <br />
                                            @if (Session::get('edit_address') == 'success')
                                                <i class="done_account">{{ Session::get('massage') }}</i>
                                            @elseif(Session::get('edit_address') == 'fail')
                                                <i class="error_account">{{ Session::get('massage') }}</i>
                                            @endif
                                        @elseif(empty($user->address_detail) && !empty($user->xaid))
                                        <td>{{ $user->ward->name . ', ' . $user->ward->district->name . ', ' . $user->ward->district->province->name }}
                                            <br />
                                            @if (Session::get('edit_address') == 'success')
                                                <i class="done_account">{{ Session::get('massage') }}</i>
                                            @elseif(Session::get('edit_address') == 'fail')
                                                <i class="error_account">{{ Session::get('massage') }}</i>
                                            @endif
                                        @else
                                        <td>
                                            <br />
                                            @if (Session::get('edit_address') == 'success')
                                                <i class="done_account">{{ Session::get('massage') }}</i>
                                            @elseif(Session::get('edit_address') == 'fail')
                                                <i class="error_account">{{ Session::get('massage') }}</i>
                                            @endif
                                    @endif
                                    <!--edit fields-->
                                    <div class="edit_field" id="field6">
                                        <form action="{{ route('userEditAddress', ['id' => $id]) }}" method="post">
                                            {{ csrf_field() }}
                                            <label for="address_detail">?????a ch??? c??? th???(kh??ng b???t bu???c):</label>
                                            <textarea name="address_detail" id="address_detail" cols="10"
                                                rows="3"></textarea>
                                            <label>T???nh/Th??nh Ph???</label>
                                            <select name="provinces" id="provinces">
                                                <option selected="selected"></option>
                                                @if ($province)
                                                    @foreach ($province as $provinceVal)
                                                        <option value="{{ $provinceVal->matp }}">{{ $provinceVal->name }}
                                                        </option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            <label>Qu???n/Huy???n</label>
                                            <select name="districts" id="districts">
                                                <option selected="selected"></option>
                                            </select>
                                            <label>Ph?????ng/X??</label>
                                            <select name="wards" id="wards">
                                                <option selected="selected"></option>
                                            </select>
                                            <br />
                                            <input type="submit" value="C???p nh???t" name="editAddress" class="gradient-button"
                                                id="editAddress" />
                                        </form>
                                    </div>
                                    <!--//edit fields-->
                                    </td>
                                    <td><a href="#field6" class="gradient-button edit">S???a</a></td>
                                </tr>
                            </table>

                        </article>
                    </section>
                    <!--//MySettings-->

                    <!--MyReviews-->
                    <section id="MyBookings" class="tab-content">
                        @foreach ($billBooking as $billBookingVal)
                            <!--booking-->
                            <article class="bookings">
                                <h1><a
                                        href="{{ route('userRoomDetail') . '?id=' . $billBookingVal->order->first()->product->homestay->id }}">{{ $billBookingVal->order->first()->product->homestay->name }}</a>
                                </h1>
                                <div class="b-info">
                                    <table>
                                        <tr>
                                            <th>H??? t??n kh??ch h??ng:</th>
                                            <td>{{ $billBookingVal->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>S??? ??i???n tho???i</th>
                                            <td>{{ $billBookingVal->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>?????a ch??? email</th>
                                            <td>{{ $billBookingVal->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lo???i ph??ng</th>
                                            <td>
                                                @foreach ($billBookingVal->order as $orderBooking)
                                                    {{ $orderBooking->product->roomType->name }} <br />
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>S??? l?????ng ph??ng</th>
                                            <td>{{ $billBookingVal->order->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ng??y nh???n ph??ng</th>
                                            <td>{{ date('d-m-Y', strtotime($orderBooking->date_start)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ng??y tr??? ph??ng</th>
                                            <td>{{ date('d-m-Y', strtotime($orderBooking->date_end)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>T???ng ti???n thanh to??n</th>
                                            <td><strong>{{ number_format($billBookingVal->payments, 0, ',', '.') }}??</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tr???ng th??i ?????t ph??ng</th>
                                            <td><strong class="done_account">?????t ph??ng th??nh c??ng</strong></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="actions">
                                    <!-- <a href="#" class="gradient-button">Change booking</a> -->
                                    <a href="{{ route('userCancelBooking', ['id' => $id, 'bill_id' => $billBookingVal]) }}"
                                        class="gradient-button">Cancel booking</a>
                                    <!-- <a href="#" class="gradient-button">View confirmation</a>
             <a href="#" class="gradient-button">Print confirmation</a> -->
                                </div>
                            </article>
                            <!--//booking-->
                        @endforeach
                        {{ $billBooking->withQueryString()->links('vendor.pagination.custom') }}
                    </section>
                    <!--//MyReviews-->

                    <!--My Bookings-->
                    <section id="MyHistorys" class="tab-content">
                        @foreach ($billHistory as $billHistoryVal)
                            <!--booking-->
                            <article class="bookings">
                                @foreach ($billHistoryVal->order->take(1) as $orderHistoryTake_1)
                                    <h1><a
                                            href="{{ route('userRoomDetail') . '?id=' . $orderHistoryTake_1->product->homestay->id }}">{{ $orderHistoryTake_1->product->homestay->name }}</a>
                                    </h1>
                                @endforeach
                                <div class="b-info">
                                    <table>
                                        <tr>
                                            <th>H??? t??n kh??ch h??ng:</th>
                                            <td>{{ $billHistoryVal->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>S??? ??i???n tho???i</th>
                                            <td>{{ $billHistoryVal->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>?????a ch??? email</th>
                                            <td>{{ $billHistoryVal->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lo???i ph??ng</th>
                                            <td>
                                                @foreach ($billHistoryVal->order as $orderHistory)
                                                    {{ $orderHistory->product->roomType->name }} <br />
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>S??? l?????ng ph??ng</th>
                                            <td>{{ $billHistoryVal->order->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ng??y nh???n ph??ng</th>
                                            <td>{{ date('d-m-Y', strtotime($orderHistory->date_start)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Ng??y tr??? ph??ng</th>
                                            <td>{{ date('d-m-Y', strtotime($orderHistory->date_end)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>T???ng ti???n thanh to??n</th>
                                            <td><strong>{{ number_format($billHistoryVal->payments, 0, ',', '.') }}??</strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tr???ng th??i ?????t ph??ng</th>
                                            @if ($billHistoryVal->status == 1)
                                                <td><strong class="error_account">???? h???y</strong></td>
                                            @elseif($billHistoryVal->status == 2)
                                                <td><strong class="booking-succes">???? ho??n th??nh</strong></td>
                                            @endif
                                        </tr>
                                        @if ($billHistoryVal->status == 2)
                                            <tr>
                                                <th>????nh gi??</th>
                                                <td>
                                                    @if ($billHistoryVal->rating != null)
                                                        <!--Star rating-->
                                                        <dt>Star rating</dt>
                                                        <dd style="display: block; height: auto;">
                                                            <div class="starVoted" style=" width: 130px;">
                                                                @for ($i = $billHistoryVal->rating->point; $i--; $i >= 0)
                                                                    <img src="{{ URL::to('/') }}/user/images/ico/star-rating-on.png"
                                                                        alt="" />
                                                                @endfor
                                                                @for ($i = 5 - $billHistoryVal->rating->point; $i--; $i >= 0)
                                                                    <img src="{{ URL::to('/') }}/user/images/ico/star-rating-off.png"
                                                                        alt="" />
                                                                @endfor
                                                            </div>
                                                        </dd>
                                                        <!--//Star rating-->
                                                        <textarea readonly="readonly" name="comment" id="comment" cols="10"
                                                            rows="3">{{ $billHistoryVal->rating->comment }}</textarea>
                                                    @else
                                                        <!--Star rating-->
                                                        <dt>Star rating</dt>
                                                        <form
                                                            action="{{ route('userRating', ['id' => $id, 'bill_id' => $billHistoryVal->id]) }}"
                                                            method="post">
                                                            {{ csrf_field() }}
                                                            <dd style="display: block; height: auto;">
                                                                <div id="star" class="starRate"></div>
                                                            </dd>
                                                            <!--//Star rating-->
                                                            <input type="hidden" name="homestay_id"
                                                                value="{{ $orderHistoryTake_1->product->homestay->id }}">
                                                            <textarea name="comment" id="comment" cols="10"
                                                                rows="3"></textarea>
                                                            <input type="submit" class="gradient-button" id="addRating"
                                                                name="addRating" value="G???i">
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>

                                <div class="actions">
                                    <a href="{{ route('userRoomDetail') . '?id=' . $orderHistoryTake_1->product->homestay->id }}"
                                        class="gradient-button">Book again</a>
                                    <!-- <a href="#" class="gradient-button">Remove from list</a> -->
                                </div>
                            </article>
                            <!--//booking-->
                        @endforeach
                        {{ $billHistory->withQueryString()->links('vendor.pagination.custom') }}
                    </section>
                    <!--//My Bookings-->
                </section>
                <!--//three-fourth content-->

                <!--sidebar-->
                <aside class="right-sidebar">

                    <!--Need Help Booking?-->
                    <article class="default clearfix">
                        <h2>H??? tr??? ?????t ph??ng?</h2>
                        <p>G???i cho nh??m d???ch v??? kh??ch h??ng c???a ch??ng t??i theo s??? d?????i ????y ????? n??i chuy???n v???i m???t trong nh???ng
                            c??? v???n c???a ch??ng t??i, nh???ng ng?????i s??? gi??p b???n v???i t???t c??? c??c nhu c???u k??? ngh??? c???a b???n.</p>
                        <p class="number">0971 0973 99</p>
                    </article>
                    <!--//Need Help Booking?-->

                    <!--Ads-->
                    <article class="default clearfix">
                        <img src="/uploads/Ads/ad.png" alt="">
                    </article>
                    <!--//Ads-->

                </aside>
                <!--//sidebar-->
            </div>
            <!--//main content-->
        </div>
    </div>
    <!--//main-->
@endsection
