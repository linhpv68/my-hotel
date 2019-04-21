
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sửa Tài Khoản</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">

    <!-- Switchery css -->
    <link href="template/backend/assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Font Awesome CSS -->
    <link href="template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>

    <!-- BEGIN CSS for this page -->

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
                        <a href="admin/profile" class="dropdown-item notify-item">
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
                            <h1 class="main-title float-left"><?= $user['username'] ?></h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Người dùng</li>
                                <li class="breadcrumb-item active">Sửa</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <?php
                    if (isset($notify) && $notify != NULL) {
                        //var_dump($notify);
                        echo '<div class="alert alert-danger" role="alert">';
                        echo '<h4 class="alert-heading">Thông Báo</h4>';
                        echo "<p><b>$notify</b></p>";
                        echo '</div>';
                    }
                ?>
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fa fa-user"></i> Thông tin tài khoản</h3>
                            </div>

                            <div class="card-body">


                                <form action="edit-user" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                                    <div class="row">

                                        <div class="col-lg-9 col-xl-9">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                            <label>Tên tài khoản:</label>
                                                            <input class="form-control" name="username" type="text" required value="<?=$user['username']?>" />
                                                            <input class="form-control" name="id_user" type="hidden" required value="<?=$user['id_user']?>" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">

                                                    <div class="form-group">
                                                        <label>Địa chỉ Email</label>
                                                        <input class="form-control" name="emailaddress" type="email" value="<?=$user['emailaddress']?>" required />
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Họ Đệm</label>
                                                                <input class="form-control" name="firstname" type="text" value="<?=$user['firstname']?>"  required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Tên</label>
                                                                <input class="form-control" name="lastname" type="text" value="<?=$user['lastname']?>" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Mật khẩu</label>
                                                                <input class="form-control" name="password" type="password" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Nhập lại Mật khẩu</label>
                                                                <input class="form-control" name="re-password" type="password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Loại tài khoản</label>
                                                                <select name="role" class="form-control" required>
                                                                    <option value="">- chọn -</option>
                                                                    <option value="0">user</option>
                                                                    <option value="1">Manager</option>
                                                                    <option value="2">Administrator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Ngày Sinh:</label>
                                                                <input class="form-control" name="birthday" type="date" data-date="" value="<?=$user['birthday']?>" data-date-format="DD/MM/YYYY">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Giới tính</label>
                                                                <select name="gender" class="form-control">
                                                                    <option value="1">Nữ</option>
                                                                    <option value="0">Nam</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Số Điện thoại</label>
                                                                <input name="numberphone" class="form-control" type="number" value="<?=$user['numberphone']?>" placeholder="Số điện thoại" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">Sửa Tài khoản</button>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-lg-3 col-xl-3 border-left">
                                            <div class="m-b-10"></div>

                                            <div id="avatar_image">
                                                <img alt="image" style="max-width:100px; height:auto;"
                                                     src="assets/images/<?=$user['image']?>"/>
                                                <br/>
                                                <i class="fa fa-trash-o fa-fw"></i> <a class="delete_image" href="#">Xóa avatar</a>

                                            </div>
                                            <div id="image_deleted_text"></div>


                                            <div class="m-b-10"></div>

                                            <div class="form-group">
                                                <label>Thay đổi avatar</label>
                                                <input type="file" name="files" size="20" class="form-control" />
                                            </div>

                                        </div>
                                    </div>

                                </form>

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

<script src="template/backend/assets/js/modernizr.min.js"></script>
<script src="template/backend/assets/js/jquery.min.js"></script>
<script src="template/backend/assets/js/moment.min.js"></script>

<script src="template/backend/assets/js/popper.min.js"></script>
<script src="template/backend/assets/js/bootstrap.min.js"></script>

<script src="template/backend/assets/js/detect.js"></script>
<script src="template/backend/assets/js/fastclick.js"></script>
<script src="template/backend/assets/js/jquery.blockUI.js"></script>
<script src="template/backend/assets/js/jquery.nicescroll.js"></script>
<script src="template/backend/assets/js/jquery.scrollTo.min.js"></script>
<script src="template/backend/assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="template/backend/assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->

<!-- END Java Script for this page -->

</body>

</html>