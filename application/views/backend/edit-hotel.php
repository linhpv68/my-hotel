<?php
//	echo '<pre>';
//	print_r($hotel);
//	echo '</pre>';
//exit;
//
//?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sửa Thông tin Khách sạn</title>
	<meta name="description" content="Sửa Thông tin Khách sạn">
	<meta name="author" content="Sửa Thông tin Khách sạn">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../template/backend/assets/images/vntrip_favicon.png"/>

	<!-- Bootstrap CSS -->
	<link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome CSS -->
	<link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- IMG -->
	<link href="../template/backend/assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet"/>
	<link href="../template/backend/assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css"
		  rel="stylesheet"/>
	<!-- END IMG -->

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

	<!-- Siderbar -->
	<?php $this->load->view('backend/sidebar') ?>
	<!--end Sidebar-->
	<div class="content-page">

		<!-- Start content -->
		<div class="content">

			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left">Sửa thông tin Khách sạn</h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Dashboard</li>
								<li class="breadcrumb-item active">Sửa thông tin Khách sạn</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card mb-3">
							<div class="card-header">
								<h3><i class="fa fa-table"></i> Sửa/Thêm</h3>
							</div>

							<div class="card-body">

								<div class="row">

									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
										<div class="card mb-3">
											<div class="card-header">
												<h3><i class="fa fa-user"></i> Thông tin Khách Sạn</h3>
											</div>

											<div class="card-body">

												<form class="theme-form" method="post"
													  action="<?= base_url() ?>admin/edit-hotel"
													  enctype="multipart/form-data" accept-charset="utf-8">

													<div class="modal-body">
														<div class="row">
															<input class="form-control" name="id_user" type="hidden"
																   value="<?= $hotel['id_user'] ?>">
															<input class="form-control" name="id_hotel" type="hidden"
																   value="<?= $hotel['id_hotel'] ?>">
															<div class="col-lg-9 col-xl-9">
																<div class="row">
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>Tên khách sạn:</label>
																			<input class="form-control"
																				   name="hotel_name"
																				   type="text"
																				   value="<?= $hotel['hotel_name'] ?>"
																				   required/>
																		</div>
																	</div>
																</div>

																<div class="row">

																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>Địa chỉ</label>
																			<select name="thanhpho" id="thanhpho"
																					class="form-control" required>
																				<option
																					value="<?= $hotel['matp'] ?>"></option>
																			</select>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group quanhuyen">
																			<select name="quanhuyen" id="quanhuyen"
																					class="form-control" required>
																				<!--<option>- Chọn Quận Huyện -</option>-->
																			</select>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<select name="xaphuong" id="xaphuong"
																					class="form-control" required>
																				<!--<option>- Chọn Xã Phường -</option>-->
																			</select>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<input class="form-control" name="address"
																				   placeholder="Tòa nhà, Tên đường..."
																				   type="text"
																				   required/>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>Giá trung bình</label>
																			<input class="form-control" name="prices"
																				   type="number"
																				   value="<?= $hotel['prices'] ?>"
																				   required/>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>Mô tả khách sạn </label>
																			<textarea class="form-control"
																					  name="describe_hotel"
																					  type="text"
																					  required>
																				<?=$hotel['describe_hotel'] ?>
																			</textarea>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label>Các thiết bị</label>
																			<textarea class="form-control"
																					  name="device_hotel"
																					  type="text"
																					  required><?=$hotel['device_hotel'] ?>
																			</textarea>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="submit" class="btn btn-primary"
																				id="btn_submit_form">Sửa
																		</button>
																	</div>
																</div>


															</div>
															<div class="col-lg-3 col-xl-3 border-left">

																<div id="avatar_image">
																	<?php if ($hotel['image'] != ''): ?>
																		<img alt="image" id="img_avatar"
																			 style="max-width:100px; height:auto;"
																			 src="<?= base_url() ?>assets/images/<?= $hotel['image'] ?>"/>
																		<br/>
																		<br>
																		<i class="fa fa-trash-o fa-fw"></i>
																		<a class="delete_image" id="delete_image"
																		   href="#">Xóa hình ảnh</a>
																	<?php endif; ?>
																</div>
																<div class="m-b-10"></div>

																<div id="form_upload_image">
																	<?php if ($hotel['image'] == ''): ?>
																		<label>Thêm mới hình ảnh</label>
																		<input type="file" name="files" id="files"
																			   size="20"/>
																		<br><br>
																		<button class="btn btn-primary"
																				id="upload_image">Up load
																		</button>
																	<?php endif; ?>
																</div>

															</div>
														</div>

													</div>

												</form>

											</div>
											<!-- end card-body -->

										</div>
										<!-- end card -->

									</div>
									<!-- end col -->

								</div>
							</div>
						</div><!-- end card-->
					</div>

				</div>


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

<!-- App js -->
<script src="../template/backend/assets/js/pikeadmin.js"></script>

<!--Upload IMG-->
<script src="../template/backend/assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>
<!--End Upload IMG-->

<!--ajax-->
<script type="text/javascript">

	$(document).ready(function () {

		var id = 'tp';
		$.ajax({
			url: '<?=base_url()?>address/thanhpho',
			type: 'post',
			data: {id: id},
			dataType: 'json',
			success: function (result) {
				//console.log(result);
				var html = '';
				$.each(result, function (key, value) {
					//console.log(value['name']);

					html += '<option value="';
					html += value['matp'];
					html += '">';
					html += value['name_tp'];
					html += '</option>';

				});
				$('#thanhpho').html(html);

			}
		});

		$("#thanhpho").change(function () {
			var id = $("#thanhpho").val();
			// alert(id);
			$.ajax({
				url: '<?=base_url()?>address/quanhuyen',
				type: 'post',
				data: {id: id},
				dataType: 'json',
				success: function (result) {
					//console.log(result);
					var html = '';
					$.each(result, function (key, value) {
						//console.log(value['name']);

						html += '<option value="';
						html += value['maqh'];
						html += '">';
						html += value['name_qh'];
						html += '</option>';

					});
					$('#quanhuyen').html(html);

				}
			});

		});
		$("#quanhuyen").change(function () {
			var id = $("#quanhuyen").val();
			// alert(id);
			$.ajax({
				url: '<?=base_url()?>address/xaphuong',
				type: 'post',
				data: {id: id},
				dataType: 'json',
				success: function (result) {
					var html = '';
					$.each(result, function (key, value) {
						//console.log(value['name']);
						html += '<option value="';
						html += value['xaid'];
						html += '">';
						html += value['name_xaphuong'];
						html += '</option>';
					});
					$('#xaphuong').html(html);

				}
			});

		});

	});

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
					id_hotel: <?=$hotel['id_hotel']?>,
					method: '0',
				},
				dataType: 'json',
				success: function (result) {
					//console.log(result);
					if (result == true) {
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
								html += "<label>Thêm mới hình ảnh</label>";
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
				//khởi tạo đối tượng form data
				var form_data = new FormData();
				//thêm files vào trong form data
				form_data.append('files', file_data);
				form_data.append('id_hotel', <?= $hotel['id_hotel'] ?>);
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
							html += "<?=base_url() . 'assets/images/'?>" + res['image_name'];
							html += "\"/>";
							html += "<br/>";
							html += '<i class="fa fa-trash-o fa-fw"></i>' + '<a class="delete_image" id="delete_image" href="#">Xóa hình ảnh</a>';
							$("#avatar_image").html(html);

						}
						console.log(res['msg']);

					}
				});
				return false;
			}
		});


	});
</script>

</body>
</html>
