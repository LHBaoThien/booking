@extends('partner.login.master-login')
@section('content')
    <!--main-->
	<div class="main" role="main">
		<div class="wrap clearfix">
			<!--main content-->
			<div class="content clearfix">
				<!--three-fourth content-->
				<section class="three-fourth" style="padding: 70px;">

					<!--inner navigation-->
					<nav class="inner-nav">
						<ul>
							<li><a href="#Register" title="Register">Đăng ký tài khoản</a></li>
						</ul>
					</nav>
					<!--//inner navigation-->
					<!--Register-->
					<section id="Register" class="tab-content register-tab">
						<article class="logins">
							@if( $errors->register->has('email') )
								<span class="errors-register"><i>{{$errors->register->first('email')}}</i></span><br/>
							@endif
							@if( $errors->register->has('phone') )
								<span class="errors-register"><i>{{$errors->register->first('phone')}}</i></span><br/>
							@endif
							@if( $errors->register->has('password') )
								<span class="errors-register"><i>{{$errors->register->first('password')}}</i></span><br/>
							@endif
							<h1 style="text-align: center;">Đăng ký </h1>
							<div class="b-info">
								<form action="" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<table>
										<tr>
											<th>Email</th>
											<td>
												<input required type="email" name="email" id="email" placeholder="Nhập email">
											</td>
										</tr>
										<tr>
											<th>Họ và tên</th>
											<td>
												<input required type="text" name="name" id="name" placeholder="Nhập họ và tên của bạn">
											</td>
										</tr>
										<tr>
											<th>Mật khẩu</th>
											<td>
												<input required type="password" name="password" id="password" placeholder="Nhập mật khẩu">
											</td>
										</tr>
										<tr>
											<th>Số điện thoại</th>
											<td>
												<input required type="text" name="phone" id="phone" placeholder="Nhập số điện thoại">
											</td>
										</tr>
										<tr>
											<td></td>
											<td>
												<input type="submit" name="register" value="Tạo tài khoản" class="gradient-button">
											</td>
										</tr>
									</table>
								</form>
							</div>
						</article>
					</section>
					<!--//Register-->
				</section>
				<!--//three-fourth content-->
			</div>
			<!--//main content-->
		</div>
	</div>
	<!--//main-->
