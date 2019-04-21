<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - My Hotel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">

    <!-- Bootstrap CSS -->
    <link href="template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Font Awesome CSS -->
    <link href="template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

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
            <a href="admin" class="logo"><img alt="Logo" src="template/backend/assets/images/logo_factory.png"/>
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
                        <img src="assets/images/<?= $data['image'] ?>" alt="Profile image"
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
                        <a href="edit-user?id=<?=$data['id_user'] ?>" class="dropdown-item notify-item">
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
    <div class="left main-sidebar">

        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">

                <ul>

                    <li class="submenu">
                        <a class="active" href="admin">
                            <i class="fa fa-fw fa-bars"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Quản lý Khách sạn </span> <span
                                    class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/hotel">khách sạn</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-tv"></i> <span> Quản lý Người dùng </span> <span
                                    class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="view-users">Người dùng</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <span class="label radius-circle bg-danger float-right">20</span>
                            <i class="fa fa-fw fa-file-text-o"></i>
                            <span> Yêu Cầu Đặt Phòng </span>
                            <span class="menu-arrow"></span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fa fa-fw fa-copy"></i>
                            <span> Quản Lý doanh thu </span>
                        </a>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>
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
                        <div class="card-box noradius noborder bg-default">
                            <i class="fa fa-file-text-o float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Đơn hàng</h6>
                            <h1 class="m-b-20 text-white counter">1,587</h1>
                            <span class="text-white">15 Đơn hàng mới</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card-box noradius noborder bg-info">
                            <i class="fa fa-user-o float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">người dùng</h6>
                            <h1 class="m-b-20 text-white counter">120</h1>
                            <span class="text-white">25 người dùng mới</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card-box noradius noborder bg-danger">
                            <i class="fa fa-bell-o float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Thông báo</h6>
                            <h1 class="m-b-20 text-white counter">58</h1>
                            <span class="text-white">5 Thông báo mới</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-line-chart"></i> Items Sold Amount</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus.
                                Vivamus fermentum ultricies orci sit amet sollicitudin.
                            </div>

                            <div class="card-body">
                                <canvas id="lineChart"></canvas>
                            </div>
                            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div><!-- end card-->
                    </div>

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

<script src="template/backend/assets/js/modernizr.min.js"></script>
<script src="template/backend/assets/js/jquery.min.js"></script>
<script src="template/backend/assets/js/moment.min.js"></script>

<script src="template/backend/assets/js/popper.min.js"></script>
<script src="template/backend/assets/js/bootstrap.min.js"></script>

<script src="template/backend/assets/js/detect.js"></script>
<script src="template/backend/assets/js/fastclick.js"></script>
<script src="template/backend/assets/js/jquery.blockUI.js"></script>
<script src="template/backend/assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="template/backend/assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<!-- Counter-Up-->
<script src="template/backend/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="template/backend/assets/plugins/counterup/jquery.counterup.min.js"></script>

<script>
    $(document).ready(function () {
        // data-tables
        $('#example1').DataTable();

        // counter-up
        $('.counter').counterUp({
            delay: 10,
            time: 600
        });
    });
</script>

<script>
    var ctx1 = document.getElementById("lineChart").getContext('2d');
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

    });
</script>
<!-- END Java Script for this page -->

</body>
</html>