<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:02:34 GMT -->
<head>
	<title>Đăng Ký</title>
	<meta charset="UTF-8"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" href="template/fontend/css/font-awesome.css"/>
	<link rel="stylesheet" href="template/fontend/css/lineicons.css"/>
	<link rel="stylesheet" href="template/fontend/css/weather-icons.css"/>
	<link rel="stylesheet" href="template/fontend/css/bootstrap.css"/>
	<link rel="stylesheet" href="template/fontend/css/styles.css"/>
	<!--Date-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

</head>
<body class="bg-gray">
<!--top header-->
<?php $this->load->view('frontend/header'); ?>
<!--end top header-->
<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="theme-login">
					<div class="theme-login-header">
						<h1 class="theme-login-title">Đăng ký</h1>
						<p class="theme-login-subtitle">đăng ký tài khoản với My Hotel</p>
					</div>
					<div class="theme-login-box">
						<div class="theme-login-box-inner">
							<div class="theme-login-box-inner">
								<div>
                                    <span style="color: #761c19">
                                        <?php
										if (isset($erro)) {
											echo $erro;
										}
										?>
                                    </span>
								</div>
								<form class="theme-login-form" method="post" action="register"
									  enctype="multipart/form-data" accept-charset="utf-8">
									<div class="form-group theme-login-form-group">
										<label>Họ đệm: </label>
										<input name="firstname" class="form-control" type="text"
											   placeholder="Họ đệm" required/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Tên: </label>
										<input name="lastname" class="form-control" type="text" placeholder="Tên"
											   required/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Tên tài khoản: </label>
										<input name="username" class="form-control" type="text" required
											   placeholder="Tên tài khoản"/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Mật khẩu: </label>
										<input name="password" class="form-control" type="password" required
											   placeholder="Mật khẩu"/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Nhập lại Mật khẩu: </label>
										<input name="re-password" class="form-control" type="password" required
											   placeholder="Nhập lại Mật khẩu"/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Địa chỉ Email: </label>
										<input name="emailaddress" class="form-control" type="email" required
											   placeholder="Địa chỉ Email"/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Số điện thoại: </label>
										<input name="numberphone" class="form-control" type="number" required
											   placeholder="Số điện thoại"/>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Ngày sinh: </label>
										<input class="form-control" name="birthday" id="birthday" type="date"
											   data-date="" required
											   data-date-format="DD/MM/YYYY" value="2015-08-09">
									</div>
									<div class="form-group theme-login-form-group">
										<label>Giới tính: </label>
										<select class="form-group theme-login-form-group" name="gender"
												style="width: 327px;height: 45px;">
											<option value="0">Nam</option>
											<option value="1">Nữ</option>
										</select>
									</div>
									<div class="form-group theme-login-form-group">
										<label>Ảnh Đại Diện: </label>
										<input type="file" name="files" size="20" required/>
									</div>

									<button class="btn btn-uc btn-dark btn-block btn-lg" type="submit">Đăng Ký
									</button>
								</form>
							</div>
							<div class="theme-login-box-alt">
								<p>Bạn đã có tài khoản? &nbsp;
									<a href="login">Đăng Nhập.</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>


</div>
<!--foter-->
<?php $this->load->view('frontend/footer'); ?>
<!--end foter-->
	<script src="template/fontend/js/jquery.js"></script>
	<script src="template/fontend/js/moment.js"></script>
	<script src="template/fontend/js/bootstrap.js"></script>
	<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&amp;callback=initMap&amp;libraries=places"></script>
	<script src="template/fontend/js/owl-carousel.js"></script>
	<script src="template/fontend/js/blur-area.js"></script>
	<script src="template/fontend/js/icheck.js"></script>
	<script src="template/fontend/js/gmap.js"></script>
	<script src="template/fontend/js/magnific-popup.js"></script>
	<script src="template/fontend/js/ion-range-slider.js"></script>
	<script src="template/fontend/js/sticky-kit.js"></script>
	<script src="template/fontend/js/smooth-scroll.js"></script>
	<script src="template/fontend/js/fotorama.js"></script>
	<script src="template/fontend/js/bs-datepicker.js"></script>
	<script src="template/fontend/js/typeahead.js"></script>
	<script src="template/fontend/js/quantity-selector.js"></script>
	<script src="template/fontend/js/countdown.js"></script>
	<script src="template/fontend/js/window-scroll-action.js"></script>
	<script src="template/fontend/js/fitvid.js"></script>
	<script src="template/fontend/js/youtube-bg.js"></script>
	<script src="template/fontend/js/custom.js"></script>
	<!--date-->
	<script>
		$("input").on("change", function () {
			this.setAttribute(
				"data-date",
				moment(this.value, "YYYY-MM-DD")
					.format(this.getAttribute("data-date-format"))
			)
		}).trigger("change")
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
</body>
</html>
