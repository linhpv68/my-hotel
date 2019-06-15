<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sửa Phòng</title>
	<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
	<meta name="author" content="Pike Web Development - https://www.pikephp.com">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../template/backend/assets/images/logo_factory.png">

	<!-- Bootstrap CSS -->
	<link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome CSS -->
	<link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>


</head>

<body class="adminbody">

<div id="main">

	<?php $this->load->view('backend/sidebar') ?>


	<div class="content-page">

		<!-- Start content -->
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left">Phòng khách sạn</h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Trang chủ</li>
								<li class="breadcrumb-item active">Phòng khách sạn</li>
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
								<div>
                                    <span style="color: #761c19">
                                        <?php
										if (isset($erro)) {
											echo $erro;
										}
										?>
                                    </span>
								</div>

								<h3><i class="fa"></i>Sửa</h3>
							</div>
							<!-- end card-header -->

							<div class="card-body">
								<form class="theme-form" method="post" action="edit-room">
									<div class="modal-body">
										<input class="form-control" name="id_hotel" type="hidden"
											   value="<?= $idHotel ?>">
										<input class="form-control" name="id_room" type="hidden"
											   value="<?= $roomDetail['id_room'] ?>">
										<div class="col-lg-9 col-xl-9">
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Kiểu loại phòng</label>
														<select name="id_type" id="id_type" class="form-control"
																required>
															<?php foreach ($roomType as $roomType): ?>
																<option
																	value="<?= $roomType['id_type'] ?>"><?= $roomType['room_name'] ?></option>
															<?php endforeach; ?>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label>Diện tích phòng: </label>
														<input class="form-control" name="area_room" type="text"
															   value="<?= $roomDetail['area_room'] ?>" required/>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label>Số lượng người ở: </label>
														<input class="form-control" name="people" type="text"
															   value="<?= $roomDetail['people'] ?>" required/>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label>Giá Phòng: </label>
														<input class="form-control" name="prices_room" type="text"
															   value="<?= $roomDetail['prices_room'] ?>" required/>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label>Số Lượng Phòng: </label>
														<input class="form-control" name="status" type="text"
															   value="<?= $roomDetail['status'] ?>" required/>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Số Giường</label>
														<input class="form-control" name="beds"
															   type="text"
															   value="<?= $roomDetail['beds'] ?>" required/>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<label>Thiết bị trong phòng: </label>
														<input class="form-control" name="device_hotel" type="text"
															   value="<?= $roomDetail['device_hotel'] ?>" required/>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="form-group">
														<label>Mô tả: </label>
														<input class="form-control" name="describe_hotel" type="text"
															   value="<?= $roomDetail['describe_hotel'] ?>" required/>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary">Sửa</button>
										</div>

								</form>
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

	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="home">My hotel</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.facebook.com/linh.pv68"><b>Linh Phùng</b></a>
		</span>
	</footer>

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

</body>
</html>
