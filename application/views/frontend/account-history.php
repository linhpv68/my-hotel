<?php
$ss_name = $this->session->userdata('userInfo');
if ($ss_name['username'] == NULL) {
	$this->load->helper('url');
	redirect(base_url() . 'login');
}
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/account-history.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:23:26 GMT -->
<head>
	<title>My Hotel - Lịch sử đặt phòng</title>
	<meta charset="UTF-8"/>
	<link rel="shortcut icon" href="<?= base_url() ?>template/backend/assets/images/logo_factory.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" href="../template/fontend/css/font-awesome.css"/>
	<link rel="stylesheet" href="../template/fontend/css/lineicons.css"/>
	<link rel="stylesheet" href="../template/fontend/css/weather-icons.css"/>
	<link rel="stylesheet" href="../template/fontend/css/bootstrap.css"/>
	<link rel="stylesheet" href="../template/fontend/css/styles.css"/>
	<style>
		.btn-sm{
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<!--Header-->
<?php $this->load->view('frontend/header'); ?>
<!--End Header-->
<div class="theme-page-section theme-page-section-gray theme-page-section-lg">
	<div class="container">
		<div class="row">
			<?php $this->load->view('frontend/side-bar-account') ?>
			<div class="col-md-9-5 ">
				<h1 class="theme-account-page-title">Lịch Sử</h1>
				<div class="theme-account-history">
					<table class="table">
						<thead>
						<tr>
							<th></th>
							<th>Tên Phòng</th>
							<th>Địa chỉ</th>
							<th>Thời gian</th>
							<th style="width: 140px;">Giá tiền</th>
							<th style="width:100px;">Trạng thái</th>
							<th style="width:100px;">Thao tác</th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($history as $value): ?>
							<tr>
								<td class="theme-account-history-type">
									<i class="fa fa-home theme-account-history-type-icon"></i>
								</td>
								<td>
									<p class="theme-account-history-type-title"><?= $value['room_name'] ?></p>
									<a class="theme-account-history-item-name"
									   href="<?= base_url() . 'search-hotel?key=' . $value['hotel_name'] . '&check-in=' . $value['start_date'] . '&check-out=' . $value['end_date'] ?>"><?= $value['hotel_name'] ?></a>
								</td>
								<td>
									<p href="#"><?= $value['address'] ?></p>

								</td>
								<td class="theme-account-history-tr-date">
									<p class="theme-account-history-date"><?= $value['start_date'] ?>
										&#8212; <?= $value['end_date'] ?></p>
								</td>
								<td>
									<p class="theme-account-history-item-price"
									   id="history-total"><?= number_format($value['prices_deal']) . ' vnđ' ?></p>
								</td>
								<td>
									<p class="theme-account-history-item-price" id="history-total">
										<?php
										switch ($value['status_deal']) {
											case 0 :
//												$value['status_deal'] = 'chờ xử lý';
												echo 'chờ xử lý';
												break;
											case 1:
//												$value['status_deal'] = 'đặt thành công';
												echo 'đặt thành công';
												break;
											case 2:
//												$value['status_deal'] = 'trả phòng';
												echo 'trả phòng';
												break;
											case 3:
//												$value['status_deal'] = 'hủy';
												echo 'hủy';
												break;
										}

										?>
									</p>
								</td>
								<td>
									<?php if ($value['status_deal'] == 0):?>
									<button class="btn btn-danger btn-sm"
											onclick="accept(<?= $value['id'] ?>,3)"
											style="width: 83px;">hủy
									</button>
									<?php endif;?>

<!--									--><?php //if ($value['status_deal'] !=1):?>
										<button class="btn btn-danger btn-sm"
												onclick="deleteRecord('<?= $value['id'] ?>','<?= $value['room_name'] ?>')"
												style="width: 83px;">Xóa
										</button>
<!--									--><?php //endif;?>


									<script>
										function deleteRecord(RecordId, RecordName) {
											if (confirm('Bạn có muốn xóa giao dịch của phòng ' + RecordName + ' này?')) {
												window.location.href = '<?=base_url()?>' + 'delete-history?id=' + RecordId;
											}
										}
									</script>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Footer-->
<?php $this->load->view('frontend/footer'); ?>
<!--End Footer-->

<script src="../template/fontend/js/jquery.js"></script>
<script src="../template/fontend/js/moment.js"></script>
<script src="../template/fontend/js/bootstrap.js"></script>
<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&amp;callback=initMap&amp;libraries=places"></script>
<script src="../template/fontend/js/owl-carousel.js"></script>
<script src="../template/fontend/js/blur-area.js"></script>
<script src="../template/fontend/js/icheck.js"></script>
<script src="../template/fontend/js/gmap.js"></script>
<script src="../template/fontend/js/magnific-popup.js"></script>
<script src="../template/fontend/js/ion-range-slider.js"></script>
<script src="../template/fontend/js/sticky-kit.js"></script>
<script src="../template/fontend/js/smooth-scroll.js"></script>
<script src="../template/fontend/js/fotorama.js"></script>
<script src="../template/fontend/js/bs-datepicker.js"></script>
<script src="../template/fontend/js/typeahead.js"></script>
<script src="../template/fontend/js/quantity-selector.js"></script>
<script src="../template/fontend/js/countdown.js"></script>
<script src="../template/fontend/js/window-scroll-action.js"></script>
<script src="../template/fontend/js/fitvid.js"></script>
<script src="../template/fontend/js/youtube-bg.js"></script>
<script src="../template/fontend/js/custom.js"></script>
<script>
	function accept(id, value) {
		window.location.href = '<?=base_url()?>' + 'edit-history?id=' + id + '&status_deal=' + value;

	}
</script>

</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/account-history.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:23:26 GMT -->
</html>
