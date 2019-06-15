<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Danh sách Kiểu Phòng</title>
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
							<h1 class="main-title float-left">Kiểu Phòng khách sạn</h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Trang chủ</li>
								<li class="breadcrumb-item active">Loại Phòng</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

						<div class="card mb-3">
							<!--card-header -->
							<div class="card-header">
								<div>
                                    <span style="color: #761c19">
                                        <?php
										if (isset($erro) && $erro != "") {
											echo $erro;
										}
										?>
                                    </span>
								</div>
								<span class="pull-right">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
											data-target="#modal_add_user">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        Thêm mới
                                    </button>
                                </span>
								<div class="modal fade custom-modal" tabindex="-1" role="dialog"
									 aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
									<div class="modal-dialog">
										<!--thêm mới modal-->
										<div class="modal-content">
											<form class="theme-login-form" method="post" action="add-room-type"
												  enctype="multipart/form-data" accept-charset="utf-8">
												<div class="modal-header">
													<h5 class="modal-title">Thêm mới</h5>
													<button type="button" class="close" data-dismiss="modal"><span
															aria-hidden="true">&times;</span><span
															class="sr-only">Close</span>
													</button>
												</div>
												<div class="modal-body">

													<div class="row">
														<div class="col-lg-12">
															<div class="form-group">
																<label>Tên Kiểu Phòng</label>
																<input class="form-control" name="room_name" type="text"
																	   required/>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="form-group">
																<label>Khách sạn</label>
																<select name="id_hotel" class="form-control" required>
																	<?php foreach ($listHotel as $listHotel): ?>
																		<option
																			value="<?= $listHotel['id_hotel'] ?>"><?= $listHotel['hotel_name'] ?></option>
																	<?php endforeach; ?>
																</select>
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
							</div>
							<!-- end card-header -->

							<!-- card-body -->
							<div class="card-body">


								<div class="table-responsive">
									<table class="table table-bordered" style="text-align: center;">
										<thead >
										<tr>
											<th >ID</th>
											<th >Khách sạn</th>
											<th >Tên Kiểu Loại Phòng</th>
											<th >Thao Tác</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($listRoomType as $listRoomType): ?>
											<tr>
												<th ><?= $listRoomType['id_type'] ?></th>

												<td >
													<a href="<?=base_url().'admin/room?id='.$listRoomType['id_hotel']?>"><?= $listRoomType['hotel_name'] ?></a>
												</td>
												<td >
													<p id="roomName"
													   name="roomName"><?= $listRoomType['room_name'] ?></p>
												</td>
												<td >
													<div>
													<!--Sửa-->
													<a href="#" onclick="getData(<?=$listRoomType['id_type']?>)" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_roomtype">
														<i class="fa fa-pencil" aria-hidden="true"></i>
													</a>
													<div class="modal fade custom-modal" tabindex="-1" role="dialog"
														 aria-labelledby="modal_add_user" aria-hidden="true"
														 id="edit_roomtype">
														<div class="modal-dialog">
															<!--modal edit-->
															<div class="modal-content">
																<form class="theme-login-form" method="post"
																	  action="edit-room-type"
																	  enctype="multipart/form-data"
																	  accept-charset="utf-8">
																	<div class="modal-header">
																		<h5 class="modal-title">Sửa</h5>
																		<button type="button" class="close"
																				data-dismiss="modal"><span
																				aria-hidden="true">&times;</span><span
																				class="sr-only">Close</span>
																		</button>
																	</div>
																	<div class="modal-body">

																		<div class="row">
																			<div class="col-lg-12">
																				<div class="form-group">
																					<label style="float: left;">Tên Kiểu Phòng</label>
																					<div name="room_name_edit" id="room_name_edit">

																					</div>
																				</div>
																			</div>
																			<div class="col-lg-12">
																				<div class="form-group">
																					<label style="float: left;">Khách sạn</label>
																					<select id="id_hotel"
																							name="id_hotel"
																							class="form-control"
																							required>
																					</select>
																				</div>
																			</div>
																		</div>

																	</div>

																	<div class="modal-footer">
																		<button type="submit" class="btn btn-primary">Sửa</button>
																	</div>

																</form>

															</div>
														</div>
													</div>

													<!--Xóa-->
													<a href="javascript:deleteRecord('<?= $listRoomType['id_type'] ?>','<?= $listRoomType['room_name'] ?>');"
													   class="btn btn-danger btn-sm" data-placement="top"
													   data-toggle="tooltip" data-title="Delete"><i
															class="fa fa-trash-o" aria-hidden="true"></i></a>
													<script>
														function deleteRecord(RecordId, RecordName) {
															if (confirm('Bạn có muốn xóa ' + RecordName + '?')) {
																window.location.href = 'delete-room-type?id=' + RecordId;
															}
														}
													</script>

													</div>
												</td>

											</tr>
										<?php endforeach; ?>
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
<!--ajax-->
<script type="text/javascript">
	function getData(id) {
		//console.log(id);
		$.ajax({
			url: '<?=base_url()?>roomtype/getdata',
			type: 'post',
			data: {id: id},
			dataType: 'json',
			success: function (result) {
				console.log(result['listRoomType']);
				var html = '';
				$.each(result['listHotel'], function (key, value) {
					html += '<option value="';
					html += value['id_hotel'];
					html += '">';
					html += value['hotel_name'];
					html += '</option>';

				});

				var html_roomName = '';
				html_roomName += '<input class="form-control" name="room_name"  id="room_name" type="text" required value="';
				html_roomName += result['listRoomType'].room_name;
				html_roomName += '"/>';
				html_roomName += '<input class="form-control" name="id_type"  id="id_type" type="hidden" required value="';
				html_roomName += result['listRoomType'].id_type;
				html_roomName += '"/>';


				$('#id_hotel').html(html);
				$('#room_name_edit').html(html_roomName);

			}
		});

	};

</script>

</body>
</html>
