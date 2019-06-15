<?php
$checkin = $this->input->get('check-in');
$checkout = $this->input->get('check-out');
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
	<div class="theme-hero-area">
		<div class="theme-hero-area-bg-wrap">
			<div class="theme-hero-area-bg theme-hero-area-bg-blur"
				 style="background-image:url(template/fontend/img/hotel-page/layout-1/header-7.jpg);"></div>
			<div class="theme-hero-area-mask theme-hero-area-mask-strong"></div>
			<div class="theme-hero-area-inner-shadow"></div>
		</div>
		<div class="theme-hero-area-body">
			<div class="container">
				<div class="theme-item-page-header _pt-150 _pb-50 theme-item-page-header-white">
					<div class="theme-item-page-header-body">
						<h1 class="theme-item-page-header-title"><?= $hotelInfo['hotel_name'] ?></h1>
						<div class="theme-item-page-header-price theme-item-page-header-price-lg">
							<p class="theme-item-page-header-price-body">
								<span>Giá trung bình chỉ</span>
								<b><?= number_format($hotelInfo['prices']) ?> vnđ</b>
								<span>/ đêm</span>
							</p>
						</div>
						<ul class="theme-breadcrumbs">
							<li>
								<p class="theme-breadcrumbs-item-title">
									<a href="<?= base_url() ?>">Trang chủ</a>
								</p>
							</li>
							<li>
								<p class="theme-breadcrumbs-item-title">
									<a href="<?= base_url() ?>">Khách sạn</a>
								</p>
							</li>
							<li>
								<p class="theme-breadcrumbs-item-title">
									<a href="<?= base_url() ?>search-room?id=<?= $hotelInfo['id_hotel'] ?>"><?= $hotelInfo['hotel_name'] ?></a>
								</p>
								<p class="theme-breadcrumbs-item-subtitle">hiện có <?= sizeof($listRoom) ?> phòng</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="theme-page-section theme-page-section-dark theme-page-section-xl">
		<div class="container">
			<div class="row row-col-static" id="sticky-parent">
				<div class="col-md-12 ">
					<div class="theme-item-page-tabs">
						<div class="tabbable">
							<ul class="nav nav-tabs nav-white nav-no-br nav-sqr nav-mob-inline" role="tablist">
								<li class="active" role="presentation">
									<a class="_ph-30" aria-controls="HotelPageTabs-1" role="tab" data-toggle="tab"
									   href="#HotelPageTabs-1">Phòng</a>
								</li>
								<li role="presentation">
									<a class="_ph-30" aria-controls="HotelPageTabs-2" role="tab" data-toggle="tab"
									   href="#HotelPageTabs-2">Thông tin</a>
								</li>
								<!--<li role="presentation">
									<a class="_ph-30" aria-controls="HotelPageTabs-5" role="tab" data-toggle="tab"
									   href="#HotelPageTabs-5">Tiện ích</a>
								</li>-->
							</ul>
							<div class="tab-content _p-30 _bg-w">
								<div class="tab-pane active" id="HotelPageTabs-1" role="tab-panel">
									<div class="theme-item-page-rooms-table">
										<table class="table">
											<tbody>

											<?php foreach ($listRoom as $listRoom): ?>
												<tr>
													<td class="theme-item-page-rooms-table-type">
														<h5 class="theme-item-page-rooms-table-type-title"><?= $listRoom['room_name'] ?></h5>
														<img class="theme-item-page-rooms-table-type-img"
															 src="template/fontend/img/hotel-page/rooms/1.jpg"
															 alt="Image Alternative text" title="Image Title"/>
														<ul class="theme-item-page-rooms-table-type-feature-list">
															<li>
																<i class="fa fa-bed theme-item-page-rooms-table-type-feature-list-icon"></i>Số
																giường: <?= $listRoom['beds'] ?>
															</li>
															<li>
																<i class="fa fa-arrows-h theme-item-page-rooms-table-type-feature-list-icon"></i>diện
																tích: <?= $listRoom['area_room'] ?> m2
															</li>
															<li>
																<i class="fa fa-wifi theme-item-page-rooms-table-type-feature-list-icon"></i>Miễn
																phí Wifi
															</li>
														</ul>
													</td>
													<td>
														<ul class="theme-item-page-rooms-table-guests-count">
															<?php for ($i = 0; $i < $listRoom['people']; $i++): ?>
																<li>
																	<i class="fa fa-male"></i>
																</li>
															<?php endfor; ?>
														</ul>
													</td>
													<td>
														<ul class="theme-item-page-rooms-table-options-list">
															<li>
																<b class="text-color-inverse">Mô
																	tả:</b><?= $listRoom['describe_hotel'] ?>
															</li>
															<li>
																<b class="text-color-inverse">Thiết
																	bị:</b><?= $listRoom['device_hotel'] ?>
															</li>
														</ul>
													</td>
													<td class="theme-item-page-rooms-table-price">
														<div>
															<div class="theme-item-page-rooms-table-price-night">
																<p class="theme-item-page-rooms-table-price-sign">Mỗi
																	đêm chỉ</p>
																<p class="theme-item-page-rooms-table-price-night-amount"><?= number_format($listRoom['prices_room']) ?>
																	vnđ</p>
																<br>
																<?php if ($listRoom['status'] != 0 ) :?>
																<span>còn <?=$listRoom['status']?> Phòng </span>
																<?php endif;?>
															</div>

														</div>
														<?php $ss_name = $this->session->userdata('userInfo');
														if ($ss_name == NULL): ?>
															<p class="theme-item-page-rooms-table-price-note"><a
																	href="<?= base_url() . 'login' ?>">Đăng nhập</a> để
																được nhiều khuyến mãi lớn
															</p>
														<?php endif; ?>
													</td>
													<td>
														<?php if ($listRoom['status'] != 0 ) :?>
														<a class="btn btn-primary-inverse btn-block"
														   href="deal?id=<?php echo $listRoom['id_room'] . '&check-in=' . $checkin . '&check-out=' . $checkout; ?>">Đặt
															ngay</a>
														<?php else:?>
															<p class="theme-item-page-rooms-table-price-night-amount">Hết Phòng </p>
														<?php endif;?>
													</td>
												</tr>
											<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>

								<div class="tab-pane" id="HotelPageTabs-2" role="tab-panel">
									<div class="theme-item-page-desc">
										<p><?= $hotelInfo['describe_hotel'] ?></p>
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
</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/hotel-index-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:09:13 GMT -->
</html>
