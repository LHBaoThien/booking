<footer>
	<div class="wrap clearfix">
		<!--column-->
		<article class="one-fourth">
			<h3>Himinn Booking</h3>
			<p>Nha Trang - Khánh Hòa</p>
			<p><em>Liên hệ:</em><a href="tel:0971097399"> +84971 0973 99</a></p>
			<p><em>Email:</em><a href="mailto:himinnbooking@gmail.com" title="himinnbooking@gmail.com"> himinnbooking@gmail.com</a></p>
		</article>
		<!--//column-->

		<!--column-->
		<article class="one-fourth">
			<h3>Hỗ trợ khách hàng</h3>
			<ul>
				<li><a href="{{route('userConditions')}}" title="Điều khoản và điều kiện">Điều khoản và điều kiện</a></li>
				<li><a href="javascript:" title="Làm cách nào để đặt chỗ?">Làm cách nào để đặt chỗ?</a></li>
				<!-- <li><a href="javascript:" title="Payment options">Payment options</a></li> -->
				<li><a href="javascript:" title="Mẹo đặt phòng">Mẹo đặt phòng</a></li>
			</ul>
		</article>
		<!--//column-->

		<!--column-->
		<article class="one-fourth">
			<h3>Theo dõi chúng tôi</h3>
			<ul class="social">
				<li class="facebook"><a href="https://www.facebook.com/hii.peaceful" title="facebook">facebook</a></li>
				<li class="googleplus"><a href="mailto:himinnbooking@gmail.com" title="googleplus">googleplus</a></li>
			</ul>
		</article>
		<!--//column-->

		<!--column-->
		<article class="one-fourth">
			<h3>Đăng ký tài khoản</h3>
			<!-- <form id="newsletter" action="newsletter.php" method="post"> -->
				<fieldset>
					<input type="email" id="email_signup" name="email_signup" placeholder="Nhập email của bạn tại đây" />
					<input type="submit" id="signUp"  name="signUp" value="Đăng ký" onclick="singUp()" class="gradient-button" />
				</fieldset>
			<!-- </form> -->
		</article>
		<!--//column-->

		<section class="bottom">
			<p class="copy">Copyright © 2021 Himinn Booking - Le Hoang Bao Thien</p>
		</section>
	</div>
</footer>
<script>
	// Initiate selectnav function
	selectnav();
	function singUp(){
		var email = $('#email_signup').val();
		$("#register").css("display", "block");
		$('#emailRegister').val(email);
	}

</script>
