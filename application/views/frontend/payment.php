<?php
$ss_name = $this->session->userdata('userInfo');
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Kết quả tìm phòng</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Favicon -->
	<link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
	<link rel="stylesheet" href="template/fontend/css/font-awesome.css"/>
	<link rel="stylesheet" href="template/fontend/css/lineicons.css"/>
	<link rel="stylesheet" href="template/fontend/css/weather-icons.css"/>
	<link rel="stylesheet" href="template/fontend/css/bootstrap.css"/>
	<link rel="stylesheet" href="template/fontend/css/styles.css"/>
</head>
<body>
<!--header-->
<?php $this->load->view('frontend/header') ?>
<!--End header-->
<div class="content">
	<div class="theme-page-section theme-page-section-lg">
		<div class="container">
			<div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
				<div class="col-md-8">
					<div class="theme-payment-page-sections">
						<?php if ($ss_name['username'] == NULL): ?>
							<div class="theme-payment-page-sections-item">
								<div class="theme-payment-page-signin">
									<i class="theme-payment-page-signin-icon fa fa-user-circle-o"></i>
									<div class="theme-payment-page-signin-body">
										<h4 class="theme-payment-page-signin-title">Đăng nhập nếu bạn có tài khoản</h4>
										<p class="theme-payment-page-signin-subtitle">
											Chúng tôi sẽ giúp bạn đặt phòng và thanh toán nhanh hơn</p>
									</div>
									<a class="btn theme-payment-page-signin-btn btn-primary"
									   href="<?= base_url() . 'login' ?>">đăng nhập</a>
								</div>
							</div>
						<?php endif; ?>

						<div class="theme-payment-page-sections-item">
							<div class="theme-search-results-item theme-payment-page-item-thumb">
								<h5 class="theme-search-results-item-title"><?= $roomInfo['room_name'] ?></h5>
								<div class="row" data-gutter="20">
									<div class="col-md-9 ">
										<div class="row" data-gutter="20">
											<div class="col-md-5 ">
												<ul class="theme-search-results-item-hotel-room-features">
													<li>
														<i class="fa fa-arrows-h"></i>Diện tích
														: <?= $roomInfo['area_room'] ?> m2
													</li>
													<li>
														<i class="fa fa-bed theme-item-page-rooms-table-type-feature-list-icon"></i>Số
														giường: <?= $roomInfo['beds'] ?>
													</li>

													<li>
														<i class="fa fa-wifi"></i>Miễn phí Wifi
													</li>
													<li>
														<i class="fa fa-male"></i><?= $roomInfo['people'] ?> người
													</li>
												</ul>
											</div>
											<div class="col-md-5">
												<p style="color: #535353;">Giá : <span><?=number_format($roomInfo['prices_room']).' vnđ/đêm' ?></span></p>

											</div>
										</div>
									</div>
									<div class="col-md-3 ">
										<div class="theme-search-results-item-img-wrap">
											<img class="theme-search-results-item-img"
												 src="template/fontend/img/hotel-page/rooms/1.jpg"
												 alt="Image Alternative text" title="Image Title"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<form method="post" action="<?= base_url() . 'deal' ?>">
							<div class="theme-payment-page-sections-item">
								<h3 class="theme-payment-page-sections-item-title">Thông tin cá nhân</h3>

								<div class="theme-payment-page-form">
									<div class="row row-col-gap" data-gutter="20">
										<div class="col-md-6 ">
											<div>
												<input class="form-control" type="hidden" name="id_user_deal" id="id_user"
													   value=""/>
												<input class="form-control" type="hidden" name="status_deal" id="status"
													   value="0"/>
												<input class="form-control" type="hidden" name="start_date"
													   id="start_date"
													   value="<?= $roomInfo['checkin'] ?>"/>
												<input class="form-control" type="hidden" name="end_date" id="end_date"
													   value="<?= $roomInfo['checkout'] ?>"/>
												<input class="form-control" type="hidden" name="prices_deal"
													   id="total-prices-form"/>
												<input class="form-control" type="hidden" name="id_room" id="id_room"
													   value="<?= $roomInfo['id_room'] ?>"/>
											</div>
											<div class="theme-payment-page-form-item form-group">
												<label> Họ và tên</label>
												<input class="form-control" type="text" name="name" id="name"
													   placeholder="Họ và tên" required/>
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="theme-payment-page-form-item form-group">
												<label>Email</label>
												<input class="form-control" type="email" name="emailaddress"
													   id="emailaddress"
													   placeholder="Email" required/>
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="theme-payment-page-form-item form-group">
												<label> Số điện thoại</label>
												<input class="form-control" type="number" name="numberphone"
													   id="numberphone"
													   placeholder="Số điện thoại" required/>
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="theme-payment-page-form-item form-group">
												<label> Ngày sinh</label>
												<div class='input-group date' id='datetimepicker1'>
													<input type='text' class="form-control" name="birthday"
														   id="birthday"
														   required/>
													<span class="input-group-addon">
                      									<span class="glyphicon glyphicon-calendar"></span>
                    								</span>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label> Yêu cầu thêm</label>
												<textarea class="form-control" name="deprecate" id="deprecate"
														  aria-label="With textarea"></textarea>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="theme-payment-page-sections-item">
								<div class="theme-payment-page-booking">
									<div class="theme-payment-page-booking-header">
										<h3 class="theme-payment-page-booking-title" id="total-date"></h3>
										<p class="theme-payment-page-booking-price" id="total-total">0</p>
									</div>
									<button type="submit" class="btn _tt-uc btn-primary-inverse btn-lg btn-block">Đặt
										Ngay
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="sticky-col">
						<div class="theme-sidebar-section _mb-10">
							<h5 class="theme-sidebar-section-title"><?= $roomInfo['hotel_name'] ?></h5>
							<img class="theme-sidebar-section-hotel-thumbnail-img"
								 src="<?= base_url() . 'assets/images/' . $roomInfo['image'] ?>"
								 alt="Image Alternative text" title="Image Title"/>
							<div class="theme-sidebar-section-hotel-thumbnail-caption">
								<p class="theme-sidebar-section-hotel-thumbnail-address"><?= $roomInfo['address'] ?></p>
							</div>
						</div>
						<div class="theme-sidebar-section _mb-10">
							<h5 class="theme-sidebar-section-title">Tóm Tắt Thông tin đặt phòng</h5>
							<ul class="theme-sidebar-section-summary-list">
								<li>Check-in:
									<div class='input-group date' id='datetimepicker1'>
										<input type='text' class="form-control" name="checkin" id="checkin"
											   value="<?= $roomInfo['checkin']; ?>" required/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</li>
								<li>Check-out:
									<div class='input-group date' id='datetimepicker1'>
										<input type='text' class="form-control" name="checkout" id="checkout"
											   value="<?= $roomInfo['checkout']; ?>"
											   required/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>

								</li>
								<li>
									<button type="submit" class="btn btn-primary" id="btn_edit_days">Sửa</button>
								</li>

							</ul>
						</div>
						<div class="theme-sidebar-section _mb-10">
							<h5 class="theme-sidebar-section-title">Chi Phí</h5>
							<div class="theme-sidebar-section-charges">
								<ul class="theme-sidebar-section-charges-list">
									<li class="theme-sidebar-section-charges-item">
										<h5 class="theme-sidebar-section-charges-item-title" id="total-nigth">0 Đêm</h5>
										<p class="theme-sidebar-section-charges-item-price" id="total-price-nigth">50 vnđ</p>
									</li>
									<li class="theme-sidebar-section-charges-item">
										<h5 class="theme-sidebar-section-charges-item-title">VAT
											(10%)</h5>
										<p class="theme-sidebar-section-charges-item-subtitle"></p>
										<p class="theme-sidebar-section-charges-item-price" id="total-price-vat">0</p>
									</li>
								</ul>
								<p class="theme-sidebar-section-charges-total">Tổng
									<span id="total-total-right">00</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--foter-->
<?php $this->load->view('frontend/footer') ?>
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

<!--date picker -->
<script>
	$(function () {

		var bindDatePicker = function () {
			$(".date").datetimepicker({
				format: 'YYYY-MM-DD',
				icons: {
					time: "fa fa-clock-o",
					date: "fa fa-calendar",
					up: "fa fa-arrow-up",
					down: "fa fa-arrow-down"
				}
			}).find('input:first').on("blur", function () {
				// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
				// update the format if it's yyyy-mm-dd
				var date = parseDate($(this).val());

				if (!isValidDate(date)) {
					//create date based on momentjs (we have that)
					date = moment().format('YYYY-MM-DD');
				}

				$(this).val(date);
			});

		};

		var isValidDate = function (value, format) {
			format = format || false;
			// lets parse the date to the best of our knowledge
			if (format) {
				value = parseDate(value);
			}

			var timestamp = Date.parse(value);

			return isNaN(timestamp) == false;
		};

		var parseDate = function (value) {
			var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
			if (m)
				value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

			return value;
		};

		bindDatePicker();
	});


	function changeDateFormat(inputDate) {  // expects Y-m-d
		var splitDate = inputDate.split('-');
		if (splitDate.count == 0) {
			return null;
		}

		var year = splitDate[0];
		var month = splitDate[1];
		var day = splitDate[2];

		return day + '-' + month + '-' + year;
	}

	/*xử lý Form*/
	$(document).ready(function () {
		<?php if ($ss_name != null):?>
		var data = <?=json_encode($ss_name);?>;
		//var birthday = changeDateFormat(data.birthday);
		//console.log(data);
		$("#id_user").val(data.id_user);
		$("#name").val(data.firstname + ' ' + data.lastname);
		$("#numberphone").val(data.numberphone);
		$("#emailaddress").val(data.emailaddress);
		$("#emailaddress").val(data.emailaddress);
		$("#birthday").val(data.birthday);

		<?php endif;?>

		/*Xử lý giá phòng*/
		var checkin = new Date($("#checkin").val());
		var checkout = new Date($("#checkout").val());
		var date = ((checkout - checkin) / (60 * 60 * 24)) / 1000;
		var prices = <?=$roomInfo['prices_room']?>;
		var vat = (prices * date) / 10;
		var total = prices * date;

		$("#total-date").text('Tổng giá cho ' + date + ' đêm');
		$("#total-nigth").html(date + ' đêm');
		$("#total-price-nigth").text(formatDollar(prices * date) + ' vnđ');
		$("#total-price-vat").text(formatDollar(vat) + ' vnđ');
		$("#total-total").text(formatDollar(total+vat) + ' vnđ');
		$("#total-total-right").text((formatDollar(total+vat)) + ' vnđ');
		$("#total-prices-form").val(total + vat);

	});

	$('#btn_edit_days').click(function () {
		let id = $("#id_room").val();
		let start = $("#checkin").val();
		let end = $("#checkout").val();

		let url = '<?=base_url()?>'+'deal?id='+id+'&check-in='+start+'&check-out='+end;
		//alert(url);
		location.replace(url)

	});

	function formatDollar(num) {
		var p = num.toFixed(2).split(".");
		return p[0].split("").reverse().reduce(function(acc, num, i, orig) {
			return  num=="-" ? acc : num + (i && !(i % 3) ? "," : "") + acc;
		}, "");
	}


</script>
<!--end date picker-->

</body>
</html>

