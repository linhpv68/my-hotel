<?php
$ss_name = $this->session->userdata('userInfo');
$this->load->helper('url');

$t = date('Y-m-d');
$date = $t;
$date1 = str_replace('-', '/', $date);
$tomorrow = date('Y-m-d',strtotime($date1 . "+1 days"));

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>My Hotel - Đặt Phòng Khách sạn trực tuyến </title>
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
<style>
	/*linh add*/
	#datetimepicker1 input {
		height: 55px;
		background: none;
		border: ghostwhite;
		background-color: #e27241;
		color: inherit;
		font-size: 16px;
	}

	.input-group-addon {
		background: center;
		border: #e27240;
		background-color: #d07e5b;
		color: inherit;
	}
</style>
<body>
<?php $this->load->view('frontend/header'); ?>

<div class="theme-hero-area">
	<div class="theme-hero-area-bg-wrap">
		<div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light"
			 style="background-image:url(template/fontend/img/patterns/travel/1.png);"></div>
		<div class="theme-hero-area-grad-mask theme-hero-area-grad-mask-i"></div>
	</div>
	<div class="theme-hero-area-body">
		<div class="container">
			<div class="theme-search-area _pv-60 theme-search-area-stacked theme-search-area-white">
				<div class="theme-search-area-header _mb-20">
					<h1 class="theme-search-area-title theme-search-area-title-sm">Đặt phòng khách sạn</h1>
					<p class="theme-search-area-subtitle">Tìm kiếm hàng trăm trang khách sạn cùng một lúc</p>
				</div>

				<form method="get" action="search-hotel">
					<div class="theme-search-area-form" id="hero-search-form">
						<div class="row" data-gutter="none">
							<div class="col-md-4 ">
								<div
									class="theme-search-area-section first theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
									<div class="form-group theme-search-area-section-inner">
										<i class="theme-search-area-section-icon lin lin-location-pin"></i>
										<input class="theme-search-area-section-input typeahead" type="text"
											   name="key"
											   placeholder="Tên khách sạn hoặc địa điểm" data-provide="typeahead"
											   required/>
									</div>
								</div>
							</div>
							<div class="col-md-6 ">

								<div class="row" data-gutter="none">
									<div class="col-md-6 ">
										<div
											class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
											<div class='input-group date' id='datetimepicker1'>
												<input type='text' class="form-control" name="check-in"
													   id="check-in"
													   required/>
												<span class="input-group-addon">
													<span>Check-In</span>
                    								</span>
											</div>
										</div>
									</div>
									<div class="col-md-6 ">
										<div
											class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
											<div class='input-group date' id='datetimepicker1'>
												<input type='text' class="form-control" name="check-out"
													   id="check-out"
													   required/>
												<span class="input-group-addon">
													<span>
														Check-Out
													</span>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-2 ">
								<button
									class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-no-border theme-search-area-submit-white theme-search-area-submit-curved"
									type="submit">
									<i class="theme-search-area-submit-icon fa fa-angle-right"></i>
									<span class="_desk-h">Tìm kiếm</span>
								</button>
							</div>

						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
	<div class="container">
		<div class="row row-col-mob-gap" data-gutter="60">
			<div class="col-md-3 ">
				<div class="feature">
					<i class="feature-icon _mb-30 feature-icon-lg feature-icon-primary fa fa-globe"></i>
					<div class="feature-caption _c-w">
						<h5 class="feature-title _fs-b">Khám phá thế giới</h5>
						<p class="feature-subtitle">Bắt đầu khám phá. Chúng tôi sẽ giúp bạn đến thăm bất kỳ nơi nào bạn
							có thể tưởng tượng</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="feature">
					<i class="feature-icon _mb-30 feature-icon-lg feature-icon-primary fa fa-gift"></i>
					<div class="feature-caption _c-w">
						<h5 class="feature-title _fs-b">Quà tặng &amp; phần thưởng</h5>
						<p class="feature-subtitle">Nhận nhiều hơn từ dịch vụ của chúng tôi. Chi tiêu ít hơn và đi du
							lịch nhiều hơn</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="feature">
					<i class="feature-icon _mb-30 feature-icon-lg feature-icon-primary fa fa-credit-card"></i>
					<div class="feature-caption _c-w">
						<h5 class="feature-title _fs-b">
							Giá tốt nhất</h5>
						<p class="feature-subtitle">
							Chúng tôi đang so sánh hàng trăm trang web du lịch để tìm giá tốt nhất cho
							bạn</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div class="feature">
					<i class="feature-icon _mb-30 feature-icon-lg feature-icon-primary fa fa-comments-o"></i>
					<div class="feature-caption _c-w">
						<h5 class="feature-title _fs-b">24/7 Hỗ trợ</h5>
						<p class="feature-subtitle">
							Liên lạc với chúng tôi mọi lúc, mọi nơi. Chúng tôi sẽ giải quyết mọi vấn đề càng sớm càng
							tốt</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="theme-page-section theme-page-section-xxl" style="background-color: #333333e0;">
	<div class="container">
		<div class="theme-page-section-header _ta-l">
			<h5 class="theme-page-section-title">
				Địa Điểm Yêu Thích</h5>
			<p class="theme-page-section-subtitle" style="color: aliceblue;">Các địa điểm được yêu thích nhất</p>
		</div>
		<div class="row row-col-gap" data-gutter="10">
			<div class="col-md-4 ">
				<div
					class="banner _h-40vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/hanoi.jpg);"></div>
					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=hà+nội&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">Hà Nội</h5>
						<p class="banner-subtitle _fw-n">Cuốn hút bí hiểm</p>
					</div>
				</div>
			</div>
			<div class="col-md-8 ">
				<div
					class="banner _h-40vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/danang.jpg);"></div>
					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=Đà+nẵng&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">Đà nẵng</h5>
						<p class="banner-subtitle _fw-n">Ẩm thực cuốn hút</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div
					class="banner _h-33vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/hue.jpg);"></div>
					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=Huế&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">Huế</h5>
						<p class="banner-subtitle _fw-n">Khám phá vô tận</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div
					class="banner _h-33vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/hochiminh.png);"></div>

					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=Hồ+Chí+Minh&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">TP Hồ Chí Minh</h5>
						<p class="banner-subtitle _fw-n">
							Khám phá Vô tận</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div
					class="banner _h-33vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/phuquoc.jpg);"></div>
					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=An+giang&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">
							Phú Quốc - An giang</h5>
						<p class="banner-subtitle _fw-n">
							Bờ biển Mộng mơ </p>
					</div>
				</div>
			</div>
			<div class="col-md-3 ">
				<div
					class="banner _h-33vh _br-4 banner-animate banner-animate-mask-out banner-animate-zoom-in banner-animate-slow">
					<div class="banner-bg"
						 style="background-image:url(<?= base_url() ?>assets/images/home/quangninh.jpg);"></div>
					<div class="banner-mask"></div>
					<a class="banner-link" href="<?=base_url().'search-hotel?key=Quảng+ninh&check-in='.$date.'&check-out='.$tomorrow?>"></a>
					<div class="banner-caption banner-caption-top">
						<h5 class="banner-title">Quảng ninh</h5>
						<p class="banner-subtitle _fw-n">Sức hút bất tận</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="theme-hero-area">
	<div class="theme-hero-area-bg-wrap">
		<div class="theme-hero-area-bg ws-action"
			 style="background-image:url(template/fontend/img/7h6u7djcf2e_1500x800.jpg);" data-parallax="true"></div>
		<div class="theme-hero-area-mask"></div>
	</div>
	<div class="theme-hero-area-body">
		<div class="theme-page-section theme-page-section-xxl">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="theme-hero-text theme-hero-text-white theme-hero-text-center">
							<div class="theme-hero-text-header">
								<h2 class="theme-hero-text-title">Tại Sao Không?</h2>
								<p class="theme-hero-text-subtitle">
									Đăng ký ngay và mở khóa giao dịch bí mật của chúng tôi. TIẾT KIỆM
									đến 70% bằng cách truy cập vào khuyến mại đặc biệt của chúng tôi cho khách sạn,
									chuyến bay, xe hơi, kỳ nghỉ
									Thuê và du lịch kinh nghiệm.</p>
							</div>
							<a class="btn _tt-uc _mt-20 btn-white btn-ghost btn-lg" href="<?= base_url() ?>register">Đăng
								ký Ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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

<!--date picker -->
<script>
	$(document).ready(function () {
		var x = new Date();
		var y = x.getFullYear().toString();
		var m = (x.getMonth() + 1).toString();
		var d = x.getDate().toString();
		(d.length == 1) && (d = '0' + d);
		(m.length == 1) && (m = '0' + m);
		var checkin = y + '-' + m + '-' + d;

		var date_out = new Date(checkin);
		//console.log(date_out.getUTCDate(), date_out);
		date_out.setUTCDate(date_out.getUTCDate() + 1);
		//console.log(date_out.getDate());

		var y_out = date_out.getFullYear().toString();
		var m_out_ = (date_out.getMonth() + 1).toString();
		var d_out = date_out.getDate().toString();
		(d_out.length == 1) && (d_out = '0' + d_out);
		(m_out_.length == 1) && (m_out_ = '0' + m_out_);
		var checkout = y_out + '-' + m_out_ + '-' + d_out;
		$("#check-in").val(checkin);
		$("#check-out").val(checkout);
	});


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

</script>
<!--end date picker-->
</body>

</html>
