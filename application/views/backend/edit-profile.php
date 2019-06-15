<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sửa Tài Khoản</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../template/backend/assets/images/logo_factory.png">

	<!-- Switchery css -->
	<link href="../template/backend/assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>

	<!-- Bootstrap CSS -->
	<link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome CSS -->
	<link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CSS for this page -->

	<!-- END CSS for this page -->

</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
		<div class="headerbar-left">
			<a href="home" class="logo"><img alt="Logo" src="../template/backend/assets/images/logo_factory.png"/>
				<span style="font: initial;
                        color: #f1b53d;
                        font-weight: 600;"
				>My Hotel</span>
			</a>
		</div>

		<nav class="navbar-custom">

			<ul class="list-inline float-right mb-0">
				<?php $data = $this->session->userdata('userInfoAdmin') ?>
				<?php if ($data['image'] == NULL) {
					$data['image'] = 'admin.jpg';
				} ?>
				<li class="list-inline-item dropdown notif">
					<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
					   aria-haspopup="false" aria-expanded="false">
						<img src="../assets/images/<?= $data['image'] ?>" alt="Profile image"
							 class="avatar-rounded">
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						<!-- item-->
						<div class="dropdown-item noti-title">
							<!--<h5 class="text-overflow"><small>Hello, admin</small> </h5>-->
							<h5 class="text-overflow">
								<small>Hello, <?= $data['username'] ?></small>
							</h5>
						</div>
						<!-- item-->
						<a href="edit-user?id=<?= $data['id_user'] ?>" class="dropdown-item notify-item">
							<i class="fa fa-user"></i> <span>Cá nhân</span>
						</a>
						<a href="admin/logout" class="dropdown-item notify-item">
							<i class="fa fa-power-off"></i> <span>Đăng Xuất</span>
						</a>
					</div>
				</li>

			</ul>

			<ul class="list-inline menu-left mb-0">
				<li class="float-left">
					<button class="button-menu-mobile open-left">
						<i class="fa fa-fw fa-bars"></i>
					</button>
				</li>
			</ul>

		</nav>

	</div>
	<!-- End Navigation -->

	<!-- Left Sidebar -->
	<?php $this->load->view('backend/sidebar') ?>
	<!-- End Sidebar -->

	<div class="content-page">

		<!-- Start content -->
		<div class="content">

			<div class="container-fluid">

				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left"><?= $user['username'] ?></h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Dashboard</li>
								<li class="breadcrumb-item">Người dùng</li>
								<li class="breadcrumb-item active">Sửa</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->
				<?php
				if (isset($notify) && $notify != NULL) {
					//var_dump($notify);
					echo '<div class="alert alert-danger" role="alert">';
					echo '<h4 class="alert-heading">Thông Báo</h4>';
					echo "<p><b>$notify</b></p>";
					echo '</div>';
				}
				?>
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-user"></i> Thông tin tài khoản</h3>
							</div>

							<div class="card-body">
								<div class="row">
									<form action="edit-user" method="post" enctype="multipart/form-data"
										  accept-charset="utf-8">
										<div class="col-lg-9 col-xl-9">

											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Tên tài khoản:</label>
														<input class="form-control" name="username" type="text" required
															   value="<?= $user['username'] ?>"/>
														<input class="form-control" name="id_user" type="hidden"
															   required value="<?= $user['id_user'] ?>"/>
													</div>
												</div>

												<div class="col-lg-12">

													<div class="form-group">
														<label>Địa chỉ Email</label>
														<input class="form-control" name="emailaddress" type="email"
															   value="<?= $user['emailaddress'] ?>" required/>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Họ Đệm</label>
																<input class="form-control" name="firstname" type="text"
																	   value="<?= $user['firstname'] ?>" required/>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Tên</label>
																<input class="form-control" name="lastname" type="text"
																	   value="<?= $user['lastname'] ?>" required/>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Mật khẩu</label>
																<input class="form-control" name="password"
																	   type="password"/>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Nhập lại Mật khẩu</label>
																<input class="form-control" name="re-password"
																	   type="password"/>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Loại tài khoản</label>
																<select name="role" class="form-control" required>
																	<option value="">--chọn--</option>
																	<option value="0">user</option>
																	<option value="1">Manager</option>
																	<option value="2">Administrator</option>
																</select>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Ngày Sinh:</label>
																<input class="form-control" name="birthday" type="date"
																	   data-date="" value="<?= $user['birthday'] ?>"
																	   data-date-format="DD/MM/YYYY" required>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Giới tính</label>
																<select name="gender" class="form-control" required>
																	<option value="1">Nữ</option>
																	<option value="0">Nam</option>
																</select>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="form-group">
																<label>Số Điện thoại</label>
																<input name="numberphone" class="form-control"
																	   type="number" value="<?= $user['numberphone'] ?>"
																	   placeholder="Số điện thoại" required/>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<button type="submit" class="btn btn-primary">Sửa Tài khoản</button>
												</div>
											</div>

										</div>
									</form>
									<div class="col-lg-3 col-xl-3 border-left" id="form_upload">
										<div class="m-b-10"></div>
										<div id="avatar_image">
											<?php if ($user['image'] != ''): ?>
												<img alt="image" id="img_avatar" style="max-width:100px; height:auto;"
													 src="<?= base_url() ?>assets/images/<?= $user['image'] ?>"/>
												<br/>
												<br>
												<i class="fa fa-trash-o fa-fw"></i>
												<a class="delete_image" id="delete_image" href="#">Xóa avatar</a>
											<?php endif; ?>
										</div>
										<div id="image_deleted_text"></div>
										<div class="m-b-10"></div>

										<div class="form-group" id="form_upload_image">
											<?php if ($user['image'] == ''): ?>
												<label>Thêm mới avatar</label>
												<input type="file" name="files" id="files" size="20"
													   class="form-control" required/>
												<br>
												<button class="btn btn-primary" id="upload_image">Up load</button>
											<?php endif; ?>
										</div>

									</div>
								</div>
							</div>
							<!-- end card-body -->

						</div>
						<!-- end card -->

					</div>
					<!-- end col -->

				</div>
				<!-- end row -->


			</div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

	</div>
	<!-- END content-page -->

	<?php $this->load->view('backend/footer'); ?>

</div>
<!-- END main -->

<script src="../template/backend/assets/js/modernizr.min.js"></script>
<script src="../template/backend/assets/js/jquery.min.js"></script>
<script src="../template/backend/assets/js/moment.min.js"></script>

<script src="../template/backend/assets/js/popper.min.js"></script>
<script src="../template/backend/assets/js/bootstrap.min.js"></script>

<script src="../template/backend/assets/js/detect.js"></script>
<script src="../template/backend/assets/js/fastclick.js"></script>
<script src="../template/backend/assets/js/jquery.blockUI.js"></script>
<script src="../template/backend/assets/js/jquery.nicescroll.js"></script>
<script src="../template/backend/assets/js/jquery.scrollTo.min.js"></script>
<script src="../template/backend/assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="../template/backend/assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script>
	$(document).on('click', '.border-left', function () {
		$('#delete_image').click(function () {
			let img = $('#img_avatar').attr('src');
			img = img.split("/");

			var name = img[img.length - 1];
			//Xoa anh tren database
			$.ajax({
				url: '<?=base_url()?>admin/image/setname',
				type: 'post',
				data: {
					image: name,
					id_user: <?= $user['id_user'] ?>,
					method: '0'
				},
				dataType: 'json',
				success: function (result) {
					//console.log(result);
					if (result == true) {
						//alert('Xóa ảnh thành công');
						$('#avatar_image').html("");
						//Xoa anh tren loacal
						$.ajax({
							url: '<?=base_url()?>/admin/image/delete',
							type: 'post',
							data: {
								file: name,
							},
							dataType: 'json',
							success: function (result) {
								console.log(result);
								let html = "";
								html += "<span>Xóa ảnh thành công</span><br>";
								html += "<label>Thêm mới avatar</label>";
								html += "<br><input type=\"file\" name=\"files\" id=\"files\" size=\"20\"class=\"form-control\" required/>";
								html += "<br><button class=\"btn btn-primary\" id=\"upload_image\">Up load</button>";
								$('#form_upload_image').html(html);
							}
						});

					} else {
						console.log('Xóa ảnh không thành công');
					}

				}
			});

		});
		$('#upload_image').click(function () {
			var path = $('#files').val();
			var img = $('#img_avatar').val();
			if (path == '') {
				alert('bạn chưa chọn file!');
			} else {
				//Lấy ra files
				var file_data = $('#files').prop('files')[0];
				//lấy ra kiểu file
				var type = file_data.type;
				//Xét kiểu file được upload
				var match = ["image/gif", "image/png", "image/jpg",];
				//kiểm tra kiểu file
				/*if (type == match[0] || type == match[1] || type == match[2]) {*/
				//khởi tạo đối tượng form data
				var form_data = new FormData();
				//thêm files vào trong form data
				form_data.append('files', file_data);
				form_data.append('id_user', <?= $user['id_user'] ?>);
				//sử dụng ajax post
				$.ajax({
					url: '<?=base_url()?>admin/image/upload', // gửi đến file upload.php
					dataType: 'text',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
					type: 'post',
					success: function (res) {
						res = JSON.parse(res);
						let html = "";

						if (res['image_name']) {
							$('#form_upload_image').html('');
							console.log(res['image_name']);

							html += '<span>thêm ảnh thành công.</span>';
							html += "<img alt=\"image\" id=\"img_avatar\" style=\"max-width:100px; height:auto;\" src=\"";
							html += "<?=base_url().'assets/images/'?>" + res['image_name'];
							html += "\"/>";
							html += "<br/>";
							html += '<i class="fa fa-trash-o fa-fw"></i>' + '<a class="delete_image" id="delete_image" href="#">Xóa avatar</a>';
							$("#avatar_image").html(html);

						}
						console.log(res['msg']);

					}
				});
				/*} else {

                    alert('err');
                }*/
				return false;
			}
		})


	});
</script>

<!-- END Java Script for this page -->

</body>

</html>
