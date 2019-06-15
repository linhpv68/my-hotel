<?php $idHotel = $idHotel; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Danh sách Phòng</title>
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
								<span class="pull-right">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
											data-target="#modal_add" onclick="getRoomType(<?= $idHotel ?>)">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        Thêm mới
                                    </button>
                                </span>
								<div class="modal fade custom-modal" tabindex="-1" role="dialog"
									 aria-labelledby="modal_add" aria-hidden="true" id="modal_add">
									<div class="modal-dialog">
										<!--thêm mới modal-->
										<div class="modal-content">

											<form class="theme-login-form" method="post" action="<?=base_url()?>admin/add-room"
												  accept-charset="utf-8">
												<div class="modal-header">
													<h5 class="modal-title">Thêm mới Phòng</h5>
													<button type="button" class="close" data-dismiss="modal"><span
															aria-hidden="true">&times;</span><span
															class="sr-only">Close</span>
													</button>
												</div>
												<div class="modal-body">

													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Kiểu loại phòng</label>
																<select name="id_type" id="id_type" class="form-control"
																		required>
																	<option value="">- chọn -</option>
																</select>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>diện tích phòng</label>
																<input class="form-control" name="area_room"
																	   type="number"
																	   required/>
																<input class="form-control" name="id_hotel"
																	   type="hidden"
																	   value="<?= $idHotel ?>"/>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label>Số lượng người ở</label>
																<input class="form-control" name="people" type="number"
																	   required/>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="form-group">
																<label>Giá phòng</label>
																<input class="form-control" name="prices_room"
																	   type="number"
																	   required/>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="form-group">
																<label> Trạng thái(Số Lượng Phòng)</label>
																<input class="form-control" name="status"
																	   type="number"
																	   required/>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Số Giường</label>
																<input class="form-control" name="beds"
																	   type="text"
																	   required/>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Thiết bị trong phòng</label>
																<input class="form-control" name="device_hotel"
																	   type="text"
																	   required/>
															</div>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Mô tả</label>
																<input class="form-control" name="describe_hotel"
																	   type="text"
																	   required/>
															</div>
														</div>
													</div>

												</div>

												<div class="modal-footer">
													<button type="submit" class="btn btn-primary">Thêm</button>
												</div>

											</form>

										</div>
									</div>
								</div>
								<h3><i class="fa"></i> Tổng Số: <?php echo count($listRoom) . ' Phòng'; ?>
								</h3>
							</div>
							<!-- end card-header -->

							<div class="card-body">


								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
										<tr>
											<th style="width:50px">ID</th>
											<th style="width:130px">Tên phòng</th>
											<th>Thông tin</th>
											<th style="width:120px">Giá</th>
											<th style="width:120px">Số lượng phòng</th>
											<th style="width:120px">Thao tác</th>
										</tr>
										</thead>
										<tbody>
										<?php if (isset($listRoom)) { ?>

											<?php foreach ($listRoom as $listRoom): ?>
												<tr>
													<th><?= $listRoom['id_room'] ?></th>
													<td>
														<b><?= $listRoom['room_name'] ?></b>
														<br>
														<span><?= $listRoom['beds'] ?> giường</span>
													</td>

													<td>
														<ul>
															<li>diện tích: <?= $listRoom['area_room'] ?> m2</li>
															<li>số người ở: <?= $listRoom['people'] ?></li>
															<li>thiết bị: <?= $listRoom['device_hotel'] ?></li>
															<li>mô tả: <?= $listRoom['describe_hotel'] ?></li>
														</ul>
													</td>

													<td>
														<p><?=number_format($listRoom['prices_room']) . ' VND' ?></p>
													</td>

													<td><?= $listRoom['status'] ?></td>

													<td>
														<!--Sửa-->
														<a href="edit-room?idroom=<?= $listRoom['id_room'] ?>&idhotel=<?= $idHotel ?>"
														   class="btn btn-primary btn-sm">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</a>

														<!--Xóa-->
														<a href="javascript:deleteRecord('<?= $listRoom['id_room'] ?>','<?= $listRoom['room_name'] ?>','<?= $idHotel ?>');"
														   class="btn btn-danger btn-sm" data-placement="top"
														   data-toggle="tooltip" data-title="Delete"><i
																class="fa fa-trash-o" aria-hidden="true"></i></a>
														<script>
															function deleteRecord(RecordId, RecordName, IdHotel) {
																if (confirm('Bạn có muốn xóa ' + RecordName + '?')) {
																	window.location.href = 'delete-room?idRoom=' + RecordId + '&idHotel=' + IdHotel;
																}
															}
														</script>
													</td>

												</tr>
											<?php endforeach; ?>
										<?php } ?>
										</tbody>
									</table>
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

<script>

	function getRoom(idRoom, idHotel) {
		// console.log(idRoom);
		// console.log(idHotel);
		getRoomType(idHotel);

	}


	function getRoomType(id) {
		$.ajax({
			url: '<?=base_url()?>admin/get-room-type',
			type: 'post',
			data: {id: id},
			dataType: 'json',
			success: function (result) {
				console.log(result);
				//alert(result);
				var html = '';
				$.each(result, function (key, value) {
					html += '<option value="';
					html += value['id_type'];
					html += '">';
					html += value['room_name'];
					html += '</option>';
				});

				$('#id_type').html(html);

			}
		});

	}
</script>

</body>
</html>
