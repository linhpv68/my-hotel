<?php
$ss_name = $this->session->userdata('userInfo');
$t = date('Y-m-d');
$date = $t;
$date1 = str_replace('-', '/', $date);
$tomorrow = date('Y-m-d', strtotime($date1 . "+1 days"));
?>
<!--header-->
<nav class="navbar navbar-default navbar-inverse navbar-theme navbar-full" id="main-nav" style="height: 20px;">
	<div class="container">
		<div class="navbar-inner nav">
			<div class="navbar-header">
				<button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button"
						area-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url() . 'home' ?>">
					<img name="img_logo" src="<?= base_url() ?>template/backend/assets/images/logo.png"
						 alt="Image Alternative text"
						 title="Image Title"/>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-main">
				<ul class="nav navbar-nav">
					<li class="active dropdown">
						<a class="dropdown-toggle" href="<?= base_url() . 'home' ?>">Trang chủ</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="<?= base_url() . 'home' ?>">Khách sạn</a>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true"
						   aria-expanded="false">Địa điểm</a>
						<div class="dropdown-menu dropdown-menu-xl">
							<div class="row">
								<div class="col-md-4">
									<h5 class="dropdown-meganav-list-title">Miền bắc</h5>
									<ul class="dropdown-meganav-list-items">
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Hà Nội&check-in=' . $date . '&check-out=' . $tomorrow ?>">Hà Nội</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Hải Phòng&check-in=' . $date . '&check-out=' . $tomorrow ?>">Hải Phòng</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Quảng Ninh&check-in=' . $date . '&check-out=' . $tomorrow ?>">Quảng Ninh</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Tuyên Quang&check-in=' . $date . '&check-out=' . $tomorrow ?>">Tuyên Quang</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Hà Giang&check-in=' . $date . '&check-out=' . $tomorrow ?>">Hà Giang</a>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<h5 class="dropdown-meganav-list-title">Miền Trung</h5>
									<ul class="dropdown-meganav-list-items">
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Thanh Hoá&check-in=' . $date . '&check-out=' . $tomorrow ?>"></a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Nghệ An&check-in=' . $date . '&check-out=' . $tomorrow ?>">Nghệ An</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Hà Tĩnh&check-in=' . $date . '&check-out=' . $tomorrow ?>">Hà Tĩnh</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Quảng Bình&check-in=' . $date . '&check-out=' . $tomorrow ?>">Quảng Bình</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Huế&check-in=' . $date . '&check-out=' . $tomorrow ?>">Thừa Thiên-Huế</a>
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<h5 class="dropdown-meganav-list-title">Miền Nam</h5>
									<ul class="dropdown-meganav-list-items">
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Hồ Chí Minh&check-in=' . $date . '&check-out=' . $tomorrow ?>">Thành
												phố Hồ Chí Minh</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Vũng Tàu&check-in=' . $date . '&check-out=' . $tomorrow ?>">Bà Rịa-Vũng Tàu</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Bình Phước&check-in=' . $date . '&check-out=' . $tomorrow ?>">Bình Phước</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Bình Dương&check-in=' . $date . '&check-out=' . $tomorrow ?>">Bình Dương</a>
										</li>
										<li>
											<a href="<?= base_url() . 'search-hotel?key=Đồng Nai&check-in=' . $date . '&check-out=' . $tomorrow ?>">Đồng Nai</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="<?= base_url() ?>admin/login">Khách hàng doanh nghiệp</a>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="navbar-nav-item-user dropdown">
						<?php if ($ss_name['username'] != NULL) { ?>
						<a class="dropdown-toggle" href="account.php" data-toggle="dropdown" role="button"
						   aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>
							<?= $ss_name['username'] ?>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?= base_url() . 'user/account' ?>">Thông tin cá nhân</a>
							</li>
							<li>
								<a href="<?= base_url() . 'user/history' ?>">Lịch sử đặt phòng</a>
							</li>
							<li>
								<a href="<?= base_url() . 'logout' ?>">Đăng Xuất</a>';
								<?php } ?>
								<?php if ($ss_name['username'] == NULL) { ?>
									<a href="login">Đăng Nhập / Đăng ký</a>;
								<?php } ?>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>


<!--End header-->
