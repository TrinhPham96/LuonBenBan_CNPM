<div class = "tieu_de">
	<p>Trang chủ / Danh sách bác sĩ / Chi tiết bác sĩ</p> 
	<h2> Bác sĩ. Đỗ Hữu Thảnh</h2>
</div>
<div class="infoDoctor_left">
	<img src="{{ asset('images/tuan2.png') }}" width="250px" height="250px">
	<div class="btn_infoDoctor">
		<button type="button" class="btn btn-info" id="addClass">Chat tư vấn</button>
		

		{{-- Open chat --}}
		<div class="popup-box chat-popup" id="qnimate">
			<div class="popup-head">
				<i class="fa fa-circle" aria-hidden="true"></i> Đỗ Hữu Thảnh

				<i class="fa fa-window-close" aria-hidden="true" data-widget="remove" id="removeClass"></i>

			</div>
			<div class="popup-messages">
				<div class="direct-chat-messages">
				
						<abbr class="timestamp">October 8th, 2015</abbr>
						

					<!-- Message. Default to the left -->
					<div class="direct-chat-msg doted-border">
						<!-- /.direct-chat-info -->
						<div class="direct-chat-text">
							Hey bro, how’s everything going ?
						</div>
						<div class="direct-chat-info clearfix">
							<span class="direct-chat-timestamp pull-right">3.36 PM</span>
						</div>
						
					</div>
				</div>

			</div>
			<div class="popup-messages-footer">
				<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
				<div class="btn-footer">
					<button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
					<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
					<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
				</div>
			</div>
		</div>

		{{-- Đặt lịch --}}
		<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg"></i> Đặt lịch hẹn</button>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<div class="modal-body">

						<H3>Đặt lịch hẹn</H3>
						<div class="chuthich">
							<i class="fa fa-square red" aria-hidden="true"></i> Lịch đã được đặt   
							<i class="fa fa-square " aria-hidden="true"></i> Còn trống
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- JavaScripts -->
<script type="text/javascript" src="js/chatbox.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

