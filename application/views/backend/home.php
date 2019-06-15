<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Dashboard - My Hotel</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="../template/backend/assets/images/logo_factory.png">

	<!-- Bootstrap CSS -->
	<link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome CSS -->
	<link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CSS for this page -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/>
	<!-- END CSS for this page -->

</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
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
								<small>Hello, <?= $data['username'] ?></small>
							</h5>
						</div>
						<!-- item-->
						<a href="edit-user?id=<?= $data['id_user'] ?>" class="dropdown-item notify-item">
							<i class="fa fa-user"></i> <span>Cá nhân</span>
						</a>
						<a href="admin/logout" class="dropdown-item notify-item">
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
	<?php $this->load->view('backend/sidebar') ?>
	<!-- End Sidebar -->

	<div class="content-page">

		<!-- Start content -->
		<div class="content">

			<div class="container-fluid">

				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-holder">
							<h1 class="main-title float-left">Dashboard</h1>
							<ol class="breadcrumb float-right">
								<li class="breadcrumb-item">Trang chủ</li>
								<li class="breadcrumb-item active">Dashboard</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->


				<div class="row">
					<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
						<a href="<?= base_url() ?>admin/deal">
							<div class="card-box noradius noborder bg-default">
								<i class="fa fa-file-text-o float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Đơn Đặt</h6>
								<h1 class="m-b-20 text-white counter" id="total_deal">158</h1>
								<span class="text-white">Tổng số đơn đặt</span>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
						<a href="<?= base_url() ?>admin/view-users">
							<div class="card-box noradius noborder bg-info">
								<i class="fa fa-user-o float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">người dùng</h6>
								<h1 class="m-b-20 text-white counter" id="notify_user">0</h1>
								<span class="text-white">người dùng</span>
							</div>
						</a>
					</div>

					<div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
						<a href="<?= base_url() ?>admin/deal">
							<div class="card-box noradius noborder bg-danger">
								<i class="fa fa-bell-o float-right text-white"></i>
								<h6 class="text-white text-uppercase m-b-20">Thông báo</h6>
								<h1 class="m-b-20 text-white counter" id="notify_home">0</h1>
								<span class="text-white">Thông báo mới</span>
							</div>
						</a>
					</div>
				</div>
				<!-- end row -->

			</div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

	</div>
	<!-- END content-page -->

	<?php $this->load->view('backend/footer');?>
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

<!-- BEGIN Java Script for this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<!-- Counter-Up-->
<script src="../template/backend/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="../template/backend/assets/plugins/counterup/jquery.counterup.min.js"></script>

<script>
	$(document).ready(function () {

		// // counter-up
		// $('.counter').counterUp({
		// 	delay: 10,
		// 	time: 600
		// });
	});
</script>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function () {
		$.ajax({
			url: '<?=base_url()?>admin/notify/deal',
			type: 'post',
			data: {type: 'all'},
			dataType: 'json',
			success: function (result) {
				//console.log(result);
				var total_deal = result.length;
				var notify_home = 0;
				for (let i =0; i< result.length ; i++){
					if (result[i].status_deal == 0){
						notify_home+= 1;
					}
				} 
				$("#notify_home").text(notify_home);
				$("#total_deal").text(total_deal);

			}
		});
		$.ajax({
			url: '<?=base_url()?>admin/notify/user',
			type: 'post',
			data: {type: '0'},
			dataType: 'json',
			success: function (result) {
				//console.log(result);
				$("#notify_user").text(result)

			}
		});
	});
</script>

<script>

	/*var ctx1 = document.getElementById("lineChart").getContext('2d');
    var lineChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: 'Dataset 1',
                backgroundColor: '#3EB9DC',
                data: [10, 14, 6, 7, 13, 9, 13, 16, 11, 8, 12, 9]
            }, {
                label: 'Dataset 2',
                backgroundColor: '#EBEFF3',
                data: [12, 14, 6, 7, 13, 6, 13, 16, 10, 8, 11, 12]
            }]

        },
        options: {
            tooltips: {
                mode: 'index',
                intersect: false
            },
            responsive: true,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            }
        }
    });


    var ctx2 = document.getElementById("pieChart").getContext('2d');
    var pieChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            datasets: [{
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true
        }

    });


    var ctx3 = document.getElementById("doughnutChart").getContext('2d');
    var doughnutChart = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Red",
                "Orange",
                "Yellow",
                "Green",
                "Blue"
            ]
        },
        options: {
            responsive: true
        }

    });*/
</script>
<!-- END Java Script for this page -->

</body>
</html>
