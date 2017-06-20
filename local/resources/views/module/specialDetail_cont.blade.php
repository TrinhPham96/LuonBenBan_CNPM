<div class="main">
	<ol class="breadcrumb">
		<li><a href="#">Trang chủ</a></li>
		<li><a href="/LuonBenBan_CNPM/tra-cuu">Tra cứu</a></li>
		<li><a href="{{url('/danh-sach-khoa')}}">Danh sách khoa</a></li>
	</ol>

	<div class="medicinal-w3">
		<div class="container">
			<div class="sub-hd">
				<h3 class="tittle two">Khoa sản</h3>
			</div>

			<div class="col-md-6 listDoctors">
				<button class="btn lblListDoctors" disabled="">Các bác sĩ</button></br>

				<a class="lblPre" href="">Trước</a>
				<div class="clearfix"></div>
				<div class="col-md-3 doctor">
					<a href="#9">
						<img class="imgLinkToDoctor" src="{{asset('images/hinhBacSi.jpg')}}" width="120px" height="120px">
						<span class="txtDoctorName">Đỗ Thị Ngọc Lan</span>
					</a>
				</div>
				<div class="col-md-3 doctor">
					<a href="#10">
						<img class="imgLinkToDoctor" src="{{asset('images/hinhBacSi.jpg')}}" width="120px" height="120px>
						<span class="txtDoctorName">Đỗ Thị Ngọc Lan</span>
					</a>
				</div>
				<div class="col-md-3 doctor">
					<a href="#11">
						<img class="imgLinkToDoctor" src="{{asset('images/hinhBacSi.jpg')}}" width="120px" height="120px>
						<span class="txtDoctorName">Đỗ Thị Ngọc Lan</span>
					</a>
				</div>
				<a class="lblNext" href="">Sau</a>
				<div class="line"></div>
			</div>
			
			<div class="col-md-3 listBenh">
				<button class="btn lblBenh" disabled="">Bệnh</button></br>
				<select class="lstBenh" name="lstBenh" size="4">
					<option value="/CNPM/#1">Viêm âm đạo</option>
					<option value="#2">Viêm cổ tử cung</option>
					<option value="#3">Kinh nguyệt không đều</option>
					<option value="#4">U xơ tử cung</option>
				</select>
				<div class="line"></div>
			</div>	

			<div class="col-md-3 listMedicine">
				<button class="btn lblMedicine" disabled="">Thuốc</button></br>
				<select class="lstMedicine" name="lstMedicine" size="4">
					<option value="#5">Metronidazole</option>
					<option value="#6">Tinidazole</option>
					<option value="#7">Clindamycin</option>
					<option value="#8">Clindamycin 2</option>
				</select>
			</div>
		</div>

	<div class="intro2">
		<h4 class="lblIntro">Giới thiệu chung</h4>

		<p class="areaIntro areaIntro2">
			Là một trong bốn phân ngành y khoa quan trọng của khối lâm sàng. Khoa có chức năng chẩn đoán và điều trị các bệnh lý và dự phòng sức khỏe của nữ giới, bao gồm phụ nữ còn độc thân và đã mang thai, sinh con.
			Khoa có thể được phân tách thành Sản khoa và Phụ khoa.</br>
		</p>

		<p class="areaIntro">
			Là một trong bốn phân ngành y khoa quan trọng của khối lâm sàng. Khoa có chức năng chẩn đoán và điều trị các bệnh lý và dự phòng sức khỏe của nữ giới, bao gồm phụ nữ còn độc thân và đã mang thai, sinh con.
			Khoa có thể được phân tách thành Sản khoa và Phụ khoa.</br>
		</p>

		<p class="areaIntro">
			Là một trong bốn phân ngành y khoa quan trọng của khối lâm sàng. Khoa có chức năng chẩn đoán và điều trị các bệnh lý và dự phòng sức khỏe của nữ giới, bao gồm phụ nữ còn độc thân và đã mang thai, sinh con.
			Khoa có thể được phân tách thành Sản khoa và Phụ khoa.</br>
		</p>

	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".lstBenh").on('change',function(){
			window.location = $(this).val();
		});
	})

	$(document).ready(function(){
		$(".lstMedicine").on('change',function(){
			window.location = $(this).val();
		});
	})
</script>
</div>
