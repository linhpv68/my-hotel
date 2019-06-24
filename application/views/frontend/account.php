<?php
$ss_name = $this->session->userdata('userInfo');
if ($ss_name['username'] == NULL) {
	$this->load->helper('url');
	redirect(base_url() . 'login');
} else {
	switch ($ss_name['gender']) {
		case 0:
			$ss_name['gender'] = 'Nam';
			break;
		case 1:
			$ss_name['gender'] = 'Nữ';
			break;
		case 2:
			$ss_name['gender'] = 'Khác';
			break;
	}
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>My hotel - Tài khoản cá nhân</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>template/backend/assets/images/logo_factory.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" href="<?= base_url() ?>template/fontend/css/font-awesome.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>template/fontend/css/lineicons.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>template/fontend/css/weather-icons.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>template/fontend/css/bootstrap.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>template/fontend/css/styles.css"/>
</head>
<body>
<!--  Header-->
<?php $this->load->view('frontend/header') ?>
<!-- End Header-->
<div class="theme-page-section theme-page-section-gray theme-page-section-lg">
	<div class="container">
		<div class="row">
			<?php $this->load->view('frontend/side-bar-account') ?>
			<div class="col-md-9-5 ">
				<h1 class="theme-account-page-title">Cá nhân</h1>
				<div class="row">
					<div class="col-md-9 ">
						<div class="theme-account-preferences">
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Tên tài khoản</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"
										   id="username"><?= $ss_name['username'] ?></p>
										<input type="hidden" id="id_user" value="<?= $ss_name['id_user'] ?>">
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Password</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value">********</p>
										<div class="collapse" id="ChangePassword">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<label>Mật khẩu hiện tại</label>
													<input class="form-control" type="password" id="pass_word"
														   value=""/>
													<label>Mật khẩu mới</label>
													<input class="form-control" type="password" id="re_password_first"/>
													<label>Mật khẩu xác nhận</label>
													<input class="form-control" type="password"
														   id="re_password_second"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="changepass(pass_word.value)" href="#">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangePassword"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangePassword" id="btn_cancel_pass">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangePassword"
										   data-toggle="collapse" aria-expanded="false" aria-controls="ChangePassword">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Họ Đệm</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"
										   id="firstname_label"><?= $ss_name['firstname'] ?></p>
										<div class="collapse" id="ChangeFirstname">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<input class="form-control" type="text" id="firstname"
														   value="<?= $ss_name['firstname'] ?>"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(firstname.id, firstname.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangeFirstname"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeFirstname">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangeFirstname"
										   data-toggle="collapse" aria-expanded="false"
										   aria-controls="ChangeFirstname">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Tên</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"
										   id="lastname_label"><?= $ss_name['lastname'] ?></p>
										<div class="collapse" id="ChangeLastname">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<input class="form-control" type="text" id="lastname"
														   value="<?= $ss_name['lastname'] ?>"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(lastname.id,lastname.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangeLastname"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeLastname">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangeLastname"
										   data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLastname">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Email</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"
										   id="emailaddress_label"><?= $ss_name['emailaddress'] ?></p>
										<div class="collapse" id="ChangeEmail">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<input class="form-control" type="text" id="emailaddress"
														   value="<?= $ss_name['emailaddress'] ?>"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(emailaddress.id, emailaddress.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangeEmail"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeEmail">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangeEmail"
										   data-toggle="collapse" aria-expanded="false" aria-controls="ChangeEmail">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Số Điện Thoại</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value" id="numberphone_label">
											0<?= $ss_name['numberphone'] ?></p>
										<div class="collapse" id="ChangePhone">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<input class="form-control" type="text" id="numberphone"
														   value="<?= $ss_name['numberphone'] ?>"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(numberphone.id, numberphone.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangePhone"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeHomeAirportChange">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link"
										   href="#ChangePhone" data-toggle="collapse" aria-expanded="false"
										   aria-controls="ChangePhone">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Giới tính</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"><?= $ss_name['gender'] ?></p>
										<div class="collapse" id="ChangeGender">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<select class="form-control" id="gender">
														<option value="0">Nam</option>
														<option value="1">Nữ</option>
														<option value="2">Khác</option>
													</select>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(gender.id, gender.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangeGender"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeGender">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangeGender"
										   data-toggle="collapse" aria-expanded="false" aria-controls="ChangeGender">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
							<div class="theme-account-preferences-item">
								<div class="row">
									<div class="col-md-3 ">
										<h5 class="theme-account-preferences-item-title">Ngày sinh</h5>
									</div>
									<div class="col-md-7 ">
										<p class="theme-account-preferences-item-value"
										   id="birthday_label"><?= $ss_name['birthday'] ?></p>
										<div class="collapse" id="ChangeBirthday">
											<div class="theme-account-preferences-item-change">
												<div class="form-group theme-account-preferences-item-change-form">
													<input class="form-control" type="date" id="birthday"
														   value="<?= $ss_name['birthday'] ?>"/>
												</div>
												<div class="theme-account-preferences-item-change-actions">
													<a class="btn btn-sm btn-primary"
													   onclick="edit(birthday.id, birthday.value)">Lưu</a>
													<a class="btn btn-sm btn-default" href="#ChangeBirthday"
													   data-toggle="collapse" aria-expanded="false"
													   aria-controls="ChangeBirthday">Hủy</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-2 ">
										<a class="theme-account-preferences-item-change-link" href="#ChangeBirthday"
										   data-toggle="collapse" aria-expanded="false" aria-controls="ChangeBirthday">
											<i class="fa fa-pencil"></i>Sửa
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Footer-->
<?php $this->load->view('frontend/footer') ?>
<!--End Footer-->
<script src="<?= base_url() ?>template/fontend/js/jquery.js"></script>
<script src="<?= base_url() ?>template/fontend/js/moment.js"></script>
<script src="<?= base_url() ?>template/fontend/js/bootstrap.js"></script>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&amp;callback=initMap&amp;libraries=places"></script>
<script src="<?= base_url() ?>template/fontend/js/owl-carousel.js"></script>
<script src="<?= base_url() ?>template/fontend/js/blur-area.js"></script>
<script src="<?= base_url() ?>template/fontend/js/icheck.js"></script>
<script src="<?= base_url() ?>template/fontend/js/gmap.js"></script>
<script src="<?= base_url() ?>template/fontend/js/magnific-popup.js"></script>
<script src="<?= base_url() ?>template/fontend/js/ion-range-slider.js"></script>
<script src="<?= base_url() ?>template/fontend/js/sticky-kit.js"></script>
<script src="<?= base_url() ?>template/fontend/js/smooth-scroll.js"></script>
<script src="<?= base_url() ?>template/fontend/js/fotorama.js"></script>
<script src="<?= base_url() ?>template/fontend/js/bs-datepicker.js"></script>
<script src="<?= base_url() ?>template/fontend/js/typeahead.js"></script>
<script src="<?= base_url() ?>template/fontend/js/quantity-selector.js"></script>
<script src="<?= base_url() ?>template/fontend/js/countdown.js"></script>
<script src="<?= base_url() ?>template/fontend/js/window-scroll-action.js"></script>
<script src="<?= base_url() ?>template/fontend/js/fitvid.js"></script>
<script src="<?= base_url() ?>template/fontend/js/youtube-bg.js"></script>
<script src="<?= base_url() ?>template/fontend/js/custom.js"></script>
<script>

	function edit(field, value) {
		var id_user = <?=$ss_name['id_user']?>;
		var data = {
			id_user: id_user,
			field: field,
			value: value
		};
		$.ajax({
			url: '<?=base_url()?>api/edit-user',
			type: 'get',
			data: data,
			dataType: 'json',
			success: function (result) {
				console.log(result);
				if (result == true) {
					if (field === 'gender') {
						alert('bạn đã thay đổi thành công.');
						location.href = '<?=base_url() . 'user/account'?>';
					} else {
						alert('bạn đã thay đổi thành công.');
						console.log('ok');
						let label = '#' + field + '_label';
						$(label).text(value);
					}


				} else {
					alert('bạn đã thay đổi không thành công.');
				}
			}
		});
	}

	function changepass(value) {
		var id_user = <?=$ss_name['id_user']?>;
		var re_password_first = $("#re_password_first").val();
		var re_password_second = $("#re_password_second").val();
		var data = {
			'id_user': id_user,
			'password': value,
			'new_password': re_password_first

		};
		if (value == "") {
			alert('Vui lòng nhập lại mật khẩu cũ.')
		} else {
			if (re_password_second == "" || re_password_first == "") {
				alert('Mật khẩu Mới và Mật khẩu xác nhận không không được để trống')
			} else {
				if (re_password_first === re_password_second) {
					$.ajax({
						url: '<?=base_url()?>api/edit-user',
						type: 'get',
						data: data,
						dataType: 'json',
						success: function (result) {
							console.log(result);
							if (result == true){
								alert('bạn đã thay đổi thành công mật khẩu');
								$("#btn_cancel_pass").click()

							}

						}
					});
				} else {
					alert('Mật khẩu Mới và Mật khẩu xác nhận không giống nhau.Xin nhập lại !');
				}
			}
		}

	}
</script>
</body>
</html>
