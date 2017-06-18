@extends('templates.master')
@section('title', 'Chi tiết bác sĩ')
@section('main')

	<div class = "tieu_de">
		<p>Trang chủ / Danh sách bác sĩ / Chi tiết bác sĩ</p> 
		<h2> Bác sĩ. Đỗ Hữu Thảnh</h2>
	</div>
	<div class = "content">
		<div class="infoDoctor_left">
			<img src="{{ asset('images/tuan2.png') }}" width="250px" height="250px">
			<div class="btn_infoDoctor">
				<button type="button" class="btn btn-info">Chat tư vấn</button>
				<button type="button" class="btn btn-danger">Đặt lịch hẹn</button>

			</div>
		</div>
		<div class="infoDoctor_right">
			<p> Bác sĩ Thảnh là người tìm ra phương pháp tạo màng ngăn chữa chứng "Nhiệt miệng" từ năm 1990.Đến nay đã qua 20 năm kiểm chứng từ thực tiễn là có kết quả điều trị cao.Bác sĩ đã nghỉ hưu
			</p>
			<div class="chuyenkhoa-infDoc">
				<div class="chuyenkhoa-infDoc-title">
					<img src="{{ asset('images/tai-kham.png') }}" width="50px" height="50px">
					<p>Chuyên khoa</p>
				</div>
				<ul>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội cơ xương khớp</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội thần kinh</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội tiêu hóa - gan mật</li>
				</ul>	
				<ul>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội cơ xương khớp</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội thần kinh</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội tiêu hóa - gan mật</li>
				</ul>
				<ul>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội cơ xương khớp</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội thần kinh</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i>Nội tiêu hóa - gan mật</li>
				</ul>
			</div>

		</div>
	</div>





@stop