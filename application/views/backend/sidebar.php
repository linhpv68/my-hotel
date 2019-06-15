<!-- top bar navigation -->
<?php $this->load->helper('url'); ?>
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
							<small><?= $data['username'] ?></small>
						</h5>
					</div>
					<!-- item-->
					<a href="edit-user?id=<?= $data['id_user'] ?>" class="dropdown-item notify-item">
						<i class="fa fa-user"></i> <span>Cá nhân</span>
					</a>
					<a href="logout" class="dropdown-item notify-item">
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
<!-- Left Sidebar -->
<div class="left main-sidebar">

	<div class="sidebar-inner leftscroll">

		<div id="sidebar-menu">

			<ul>

				<li class="submenu">
					<a class="active" href="home">
						<i class="fa fa-fw fa-bars"></i>
						<span> Dashboard </span>
					</a>
				</li>

				<li class="submenu">
					<a href="#"><i class="fa fa-fw fa-table"></i> <span> Quản lý Khách sạn </span> <span
							class="menu-arrow"></span></a>
					<ul class="list-unstyled">
						<li><a href="hotel">khách sạn</a></li>
						<li><a href="room-type">Kiểu loại phòng</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="#"><i class="fa fa-fw fa-tv"></i> <span> Quản lý Người dùng </span> <span
							class="menu-arrow"></span></a>
					<ul class="list-unstyled">
						<li><a href="<?=base_url()?>admin/view-users">Người dùng</a></li>
					</ul>
				</li>

				<li class="submenu">
					<a href="<?= base_url() . 'admin/deal'; ?>">
						<span class="label radius-circle bg-danger float-right" id="notify_sidebar">0</span>
						<i class="fa fa-fw fa-file-text-o"></i>
						<span> Yêu Cầu Đặt Phòng </span>
					</a>
				</li>

			</ul>

			<div class="clearfix"></div>

		</div>

		<div class="clearfix"></div>

	</div>

</div>
<!-- End Sidebar -->
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function () {
		$.ajax({
			url: '<?=base_url()?>admin/notify/deal',
			type: 'post',
			data: {type: '0'},
			dataType: 'json',
			success: function (result) {
				var notify_sidebar = 0;
				for (let i =0; i< result.length ; i++){
					if (result[i].status_deal == 0){
						notify_sidebar+= 1;
					}
				}
				if (notify_sidebar == 0){
					$("#notify_sidebar").hide();
				}
				$("#notify_sidebar").text(notify_sidebar);

			}
		});
	});
</script>
