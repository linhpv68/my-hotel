<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Yêu Cầu Đặt Phòng</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>template/backend/assets/images/logo_factory.png">

	<!-- Bootstrap CSS -->
	<link href="<?= base_url() ?>template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome CSS -->
	<link href="<?= base_url() ?>template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"
		  type="text/css"/>

	<!-- Custom CSS -->
	<link href="<?= base_url() ?>template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CSS for this page -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
	<style>
		td.details-control {
			background: url(<?=base_url()?>. 'template/backend/assets/plugins/datatables/img/details_open.png') no-repeat center center;
			cursor: pointer;
		}

		tr.shown td.details-control {
			background: url(<?=base_url()?>. 'template/backend/assets/plugins/datatables/img/details_close.png') no-repeat center center;
		}

		.btn-sm {
			margin-bottom: 10px;
		}
	</style>
	<!-- END CSS for this page -->

</head>

<body class="adminbody">

<div id="main">

	<?php $this->load->view('backend/sidebar'); ?>

	<div class="content-page">

		<!-- Start content -->
		<div class="content">

			<div class="container-fluid">


				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left">Thông tin</h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Dashboard</li>
								<li class="breadcrumb-item active">Yêu cầu đặt phòng</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->


				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="card mb-6">
							<div class="card-header">
								<h3><i class="fa fa-table"></i>Yêu cầu đặt phòng</h3>
							</div>

							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
										<tr>
											<th>ID</th>
											<th>Thông tin khách sạn</th>
											<th>Thông tin cá nhân</th>
											<th>Thời gian</th>
											<th>Giá</th>
											<th>Trạng thái</th>
											<th style="width: 50px;">Thao tác</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($listDeals as $listDeal): ?>
											<tr>
												<td><?= $listDeal['id'] ?></td>
												<td>
													<ul>
														<li>Khách sạn: <?= $listDeal['hotel_name'] ?></li>
														<li>Loại Phòng: <?= $listDeal['room_name'] ?></li>
													</ul>
												</td>
												<td>
													<ul>
														<li>Họ Tên: <?= $listDeal['name'] ?></li>
														<li>Email : <?= $listDeal['emailaddress'] ?></li>
														<li>Ngày sinh: <?= $listDeal['birthday'] ?></li>
														<li>Số điện thoại: <?= $listDeal['numberphone'] ?></li>
														<li>Yêu cầu :<?= $listDeal['deprecate'] ?></li>
													</ul>
												</td>
												<td>
													<?= $listDeal['start_date'] ?> - <?= $listDeal['end_date'] ?>
												</td>
												<td><?= number_format($listDeal['prices_deal']) ?> vnđ</td>
												<td>
													<?php switch ($listDeal['status_deal']) {
														case 0:
															//$listDeal['status_deal'] = 'chờ xử lý';
															echo '<b id="status">chờ xử lý</b>';
															break;
														case 1:
															//$listDeal['status_deal'] = 'đặt thành công ';
															echo '<b id="status">đặt thành công</b>';
															//echo $listDeal['status_deal'];

															break;
														case 2:
															//$listDeal['status_deal'] = 'trả phòng';
															echo '<b id="status">đã trả phòng</b>';
															//echo $listDeal['status_deal'];

															break;
														case 3:
															echo '<b id="status">hủy</b>';
															//$listDeal['status_deal'] = 'hủy';
															//echo $listDeal['status_deal'];

															break;
													}
													?>
												</td>
												<td>
													<!-- Button trigger modal -->
													<button type="button" class="btn btn-primary btn-sm"
															data-toggle="modal" data-target="#editModal"
															id="showEditModal"
															onclick='showEditModal(<?= $listDeal['id'] ?>)'
															style="width: 83px;">
														Sửa
													</button>


													<button class="btn btn-danger btn-sm"
															onclick="deleteRecord('<?= $listDeal['id'] ?>','<?= $listDeal['room_name'] ?>')"
															style="width: 83px;">Xóa
													</button>

												</td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="editModal" tabindex="-1" role="dialog"
									 aria-labelledby="editModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header" style="background-color: #5ba2e6;color: #ffff;">
												<h5 class="modal-title" id="editModalLabel">Thay đổi Thông tin giao
													dịch</h5>
												<button type="button" class="close" data-dismiss="modal"
														aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form>
													<div class="form-group" id="infoProfile"
														 aria-label="Thông tin cá nhân">
														<input class="form-control" type="hidden" id="id_deal"
															   name="id">
														<label>Họ tên: </label>
														<input class="form-control" id="name" name="name">
														<label>Email: </label>
														<input class="form-control" id="emailaddress"
															   name="emailaddress">
														<label>Ngày Sinh: </label>
														<input class="form-control" id="birthday" name="birthday">
														<label>Số điện thoại: </label>
														<input class="form-control" id="numberphone" name="numberphone">
														<label>Yêu cầu thêm</label>
														<textarea class="form-control" rows="5" id="deprecate"
																  name="deprecate"></textarea>
													</div>
													<div class="form-group" id="infoDeal"
														 aria-label="Thông tin khách sạn">
														<div>
															<label>Khách sạn: </label>
															<select id="id_hotel" class="form-control"
																	required>
															</select>
														</div>
														<div>
															<label>Loại phòng: </label>
															<select name="id_room" id="id_room" class="form-control"
																	required>
															</select>
														</div>

													</div>
													<div>
														<label>Thời gian: </label>
														<div class="row">
															<div class="col-md-6">
																<span>Check In</span>
																<input class="form-control" type="text" id="start_date"
																	   name="start_date">
															</div>
															<div class="col-md-6">
																<span>Check Out</span>
																<input class="form-control" type="text" id="end_date"
																	   name="end_date">
															</div>
														</div>
													</div>
													<div>
														<label>Giá: </label>
														<input class="form-control" type="text" id="prices_deal"
															   name="prices_deal">
													</div>
													<div>
														<label>Trạng thái: </label>
														<select class="form-control custom-select" id="status_deal"
																name="status_deal">
															<option value="0">chờ xử lý</option>
															<option value="1">đặt thành công</option>
															<option value="2">trả phòng</option>
															<option value="3">hủy</option>
														</select>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">
													Hủy
												</button>
												<button type="button" class="btn btn-primary" id="btn_save_form">Lưu
												</button>
											</div>
										</div>
									</div>
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

<script src="<?= base_url() ?>template/backend/assets/js/modernizr.min.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/moment.min.js"></script>

<script src="<?= base_url() ?>template/backend/assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/bootstrap.min.js"></script>

<script src="<?= base_url() ?>template/backend/assets/js/detect.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/fastclick.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/jquery.blockUI.js"></script>
<script src="<?= base_url() ?>template/backend/assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="<?= base_url() ?>template/backend/assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!--Alert-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	// START CODE FOR BASIC DATA TABLE 
	$(document).ready(function () {
		$('#example1').DataTable();
		getHotel('');
		getRoom('', 'first');
		$('#id_hotel').change(function () {
			var id = $('#id_hotel').val();
			getRoom(id, 'second');
		});

		$('#btn_save_form').click(function () {
			var input = $("form").serializeArray();
			var email_address;
			var status_deal;
			var id_room;


			input.forEach(function (item) {
				if (item.name == "emailaddress") {
					email_address = item.value;
				}
				if (item.name == "status_deal") {
					status_deal = item.value;
				}
				if (item.name == "id_room") {
					id_room = item.value;
				}
			});

			$.ajax({
				url: '<?=base_url()?>admin/edit-deal',
				type: 'post',
				data: input,
				dataType: 'json',
				success: function (result) {
					if (result == true) {
						console.log(result);
						console.log(status_deal);

						if (status_deal == 1) {
							console.log('send email');
							sendEmail(email_address);
						}
						;
						if (status_deal == 2) {
							edit_number_room(id_room);
						}
						;
						if (status_deal == 3) {
							edit_number_room(id_room);
						}


						swal("Thành công!", "Bạn đã thay đổi thông tin thành công!", "success").then(function () {
							location.href = '<?=base_url() . 'admin/deal'?>';
						});
					} else {
						swal("Lỗi!", "Bạn thay đổi thông tin Không thành công!", "error").then(function () {
							location.href = '<?=base_url() . 'admin/deal'?>';
						});
					}

				}
			});


		});
	});

	function sendEmail(email_address) {
		$.ajax({
			url: '<?=base_url()?>email/sendEmail',
			type: 'post',
			data: {email_address: email_address},
			dataType: 'json',
			success: function (result) {
				console.log(result);

			}
		});
	};

	function accept(id, value) {
		window.location.href = '<?=base_url()?>' + 'admin/edit-deal?id=' + id + '&status_deal=' + value;
	};

	function showEditModal(id) {
		$.ajax({
			url: '<?=base_url()?>admin/api/deal',
			type: 'get',
			dataType: 'json',
			success: function (result) {
				$.each(result, function (key, value) {
					if (value.id == id) {
						$("#id_deal").val(id);
						$("#name").val(value.name);
						$("#emailaddress").val(value.emailaddress);
						$("#birthday").val(value.birthday);
						$("#numberphone").val(value.numberphone);
						$("#deprecate").val(value.deprecate);
						$("#status_deal").val(value.status_deal);
						$("#prices_deal").val(value.prices_deal);
						$("#start_date").val(value.start_date);
						$("#end_date").val(value.end_date);
						$("#id_hotel").val(value.id_hotel);
						$("#id_room").val(value.id_room);
					}
				});
			}
		});
	}

	function getHotel(id) {
		$.ajax({
			url: '<?=base_url()?>roomtype/getdata',
			type: 'post',
			data: {id: id},
			dataType: 'json',
			success: function (result) {
				var html = '';
				$.each(result['listHotel'], function (key, value) {
					html += '<option value="';
					html += value['id_hotel'];
					html += '">';
					html += value['hotel_name'];
					html += '</option>';
				});
				$('#id_hotel').html(html);
			}
		});

	}

	function getRoom(id, method) {
		$.ajax({
			url: '<?=base_url()?>admin/getroom',
			type: 'get',
			data: {id: ''},
			dataType: 'json',
			success: function (result) {
				var html_room = '';
				$.each(result, function (key, value) {
					switch (method) {
						case 'first':
							html_room += '<option value="';
							html_room += value['id_room'];
							html_room += '">';
							html_room += value['room_name'];
							html_room += '</option>';
							break;
						case 'second':
							if (value['id_hotel'] === id) {
								html_room += '<option value="';
								html_room += value['id_room'];
								html_room += '">';
								html_room += value['room_name'];
								html_room += '</option>';
							}
							break;
					}

				});
				$('#id_room').html(html_room);
			}
		});
	}

	function edit_number_room(id) {
		$.ajax({
			url: '<?=base_url()?>admin/edit-number-room-api',
			type: 'post',
			data: {id: id},
			dataType: 'json',
			success: function (result) {
				console.log(result);
				console.log(id)
			}
		});

	}

	function deleteRecord(RecordId, RecordName) {
		swal({
			title: "Xác nhận?",
			text: 'Bạn có muốn xóa giao dịch của phòng ' + RecordName + ' này?',
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {

					$.ajax({
						url: '<?=base_url()?>' + 'admin/delete-deal',
						type: 'get',
						data: {id: RecordId},
						dataType: 'json',
						success: function (result) {
							if (result == true) {
								swal("Thành công!", "Xóa Giao dịch thành công!", "success").then(function () {
									location.href = '<?=base_url() . 'admin/deal'?>';
								});
							} else {
								swal("Lỗi!", "Thao tác không thành công!", "error").then(function () {
									location.href = '<?=base_url() . 'admin/deal'?>';
								});
							}

						}
					});

					//swal("Thành công", {
					//	icon: "success",
					//}).then(function () {
					//	window.location.href = '<?//=base_url()?>//' + 'admin/delete-deal?id=' + RecordId;
					//});
				} else {
				}
			});
	}

</script>
<!-- END Java Script for this page -->

</body>
</html>
