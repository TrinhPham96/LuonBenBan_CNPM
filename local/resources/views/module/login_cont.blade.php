
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
		<form action="{{url('/dang-nhap')}}" method="POST" role="form">
		@if($errors->has('errorlogin'))
		<div class="alert alert-danger">{{$errors->first('errorlogin')}}</div>
		@endif
			<input type="text" name="user" placeholder="Tên đăng nhập" id="user" value="{{old('user')}}">
			@if($errors->has('user'))
			<p style="color: red;">{{$errors->first('user')}}</p>
			@endif
			<input type="password" name="pass"  placeholder="Mật khẩu" id="pass" value="{{old('pass')}}">\
			@if($errors->has('pass'))
			<p style="color: red;">{{$errors->first('pass')}}</p>
			@endif
			{!! csrf_field()!!}
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
		<form action="{{url('/dang-ki')}}" method="POST" role="form">
			<input type="text" name="username" placeholder="Họ và tên" id="username" value="{{old('username')}}">
			@if($errors->has('username'))
			<p style="color: red;">{{$errors->first('username')}}</p>
			@endif
			<input type="tel" name="phone" placeholder="Số điện thoại" id="phone" value="{{old('phone')}}">
			@if($errors->has('phone'))
			<p style="color: red;">{{$errors->first('phone')}}</p>
			@endif
			<input type="text" name="email" placeholder="Email" id="email" value="{{old('email')}}">
			@if($errors->has('email'))
			<p style="color: red;">{{$errors->first('email')}}</p>
			@endif
			<input type="password" name="psw" placeholder="Mật khẩu" id="psw" value="{{old('psw')}}">
			@if($errors->has('psw'))
			<p style="color: red;">{{$errors->first('psw')}}</p>
			@endif
			{!! csrf_field()!!}
			<input type="submit" class="register" value="Đăng kí">
			<input type="reset" class="reset1" value="Hủy">
		</form>
	</div>
	<div class="clear"></div>
</div>


</body>
</html>