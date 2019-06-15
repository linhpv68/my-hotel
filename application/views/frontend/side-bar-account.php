<?php
$ss_name = $this->session->userdata('userInfo');
if ($ss_name['image'] == null) {
	$ss_name['image'] = 'admin.jpg';
}
?>
<div class="col-md-2-5 ">
	<div class="theme-account-sidebar">
		<div class="theme-account-avatar">
			<img class="theme-account-avatar-img" src="<?= base_url() . 'assets/images/' . $ss_name['image'] ?>"
				 alt="Image Alternative text"
				 title="Image Title"/>
			<p class="theme-account-avatar-name">Xin chào,
				<br/><?= $ss_name['username'] ?>
			</p>
		</div>
		<nav class="theme-account-nav">
			<ul class="theme-account-nav-list">
				<li>
					<a href="<?= base_url() . 'user/account' ?>">
						<i class="fa fa-cog"></i>Thông tin cá nhân
					</a>
				</li>
				<!--				<li class="active">-->
				<li>
					<a href="<?= base_url() . 'user/history' ?>">
						<i class="fa fa-history"></i>Lịch sử đặt phòng
					</a>
				</li>
				<li>
					<a href="<?= base_url() . 'logout' ?>">
						<i class="fa fa-cog"></i>Đăng xuất
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
