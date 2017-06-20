
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('widgets.head_login')
<body class="body-login">
<div class="log">
	<div class="content1">
		<h2>Đăng nhập</h2>
		<form>
			<input type="text" name="userid" placeholder="Tên đăng nhập" >
			<input type="password" name="psw"  placeholder="Mật khẩu">
			<div class="button-row">
				<input type="submit" class="sign-in" value="Đăng nhập">
				<input type="reset" class="reset" value="Hủy">
				<div class="clear"></div>
			</div>
			<a href="" class="fogotpass">Quên mật khẩu?</a>
		</form>
	</div>
	<div class="content2">
		<h2>Đăng kí</h2>
		<form>
			<input type="text" name="userid" placeholder="Họ và tên">
			<input type="tel" name="usrtel" placeholder="Số điện thoại" >
			<input type="email" name="email" placeholder="Email" >
			<input type="password" name="psw" placeholder="Mật khẩu" >
			<input type="submit" class="register" value="Đăng kí">
			<input type="reset" class="reset1" value="Hủy">
		</form>
	</div>
	<div class="clear"></div>
</div>


</body>
</html>