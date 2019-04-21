<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danh sách Phòng</title>
    <meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
    <meta name="author" content="Pike Web Development - https://www.pikephp.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../template/backend/assets/images/logo_factory.png">

    <!-- Bootstrap CSS -->
    <link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Font Awesome CSS -->
    <link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css"/>


</head>

<body class="adminbody">

<div id="main">
    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="admin" class="logo"><img alt="Logo" src="../template/backend/assets/images/logo_factory.png"/>
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
                            <h1 class="main-title float-left">Phòng khách sạn</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Trang chủ</li>
                                <li class="breadcrumb-item active">Phòng khách sạn</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="card mb-3">

                            <div class="card-header">
                                <div>
                                    <span style="color: #761c19">
                                        <?php
                                            if (isset($erro)) {
                                                echo $erro;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <span class="pull-right">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modal_add_user">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        Thêm mới
                                    </button>
                                </span>
                                <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                                     aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                    <div class="modal-dialog">
                                        <!--thêm mới modal-->
                                        <div class="modal-content">

                                            <!--<form action="add" method="post" enctype="multipart/form-data">-->
                                            <form class="theme-login-form" method="post" action="add-user"
                                                  enctype="multipart/form-data" accept-charset="utf-8">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Thêm mới người dùng</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Tên tài khoản:</label>
                                                                <input class="form-control" name="username" type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Họ Đệm</label>
                                                                <input class="form-control" name="firstname" type="text"
                                                                       required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Tên</label>
                                                                <input class="form-control" name="lastname" type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Địa chỉ Email</label>
                                                                <input class="form-control" name="emailaddress"
                                                                       type="email"
                                                                       required/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Mật khẩu</label>
                                                                <input class="form-control" name="password"
                                                                       type="password"
                                                                       required/>
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
                                                                <label>Nhập lại Mật khẩu</label>
                                                                <input class="form-control" name="re-password"
                                                                       type="password"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Ngày Sinh:</label>
                                                                <input class="form-control" name="birthday" type="date"
                                                                       data-date=""
                                                                       data-date-format="DD/MM/YYYY">
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
                                                                <input name="numberphone" class="form-control"
                                                                       type="number"
                                                                       placeholder="Số điện thoại"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Ảnh đại diện (không bắt buộc):</label> <br/>
                                                        <input type="file" name="files" size="20"/>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <h3><i class="fa fa-user"></i> Tổng Số: (<?php /*echo count($list_users) . ' user'; */?>)
                                </h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width:50px">ID</th>
                                            <th style="width:130px">Tên khách sạn</th>
                                            <th >Thông tin</th>
                                            <th style="width:130px">Thông tin</th>
                                            <th style="width:150px">Địa chỉ</th>
                                            <th style="width:120px">thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($list_users)){?>
                                        <?php foreach ($list_users as $list_user): ?>
                                            <tr>
                                                <th><?= $list_user['id_user'] ?></th>

                                                <td>
                                                <span style="float: left; margin-right:10px;">
                                                    <img alt="image"
                                                         style="max-width:40px; height:auto;"
                                                         src="assets/images/<?= $list_user['image'] ?>">
                                                </span>
                                                    <strong><?= $list_user['username'] ?></strong> <br/>
                                                    <small><?= $list_user['emailaddress'] ?></small>
                                                </td>
                                                <td>
                                                    <strong><?= $list_user['firstname'] . ' ' . $list_user['lastname'] ?></strong>
                                                    <br>
                                                    <p>Ngày sinh : <?= $list_user['birthday'] ?></p>
                                                    <p>Giới tính : <?= $list_user['gender'] ?></p>
                                                </td>
                                                <td><?= $list_user['role'] ?></td>
                                                <td><?= $list_user['numberphone'] ?></td>

                                                <td>
                                                    <!--Sửa-->
                                                    <!--                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_user">-->
                                                    <a href="edit-user?id=<?=$list_user['id_user']?>" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>

                                                    <!--Xóa-->
                                                    <a href="javascript:deleteRecord('<?= $list_user['id_user'] ?>','<?= $list_user['username'] ?>');"
                                                       class="btn btn-danger btn-sm" data-placement="top"
                                                       data-toggle="tooltip" data-title="Delete"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    <script>
                                                        function deleteRecord(RecordId, RecordName) {
                                                            if (confirm('Bạn có muốn xóa '+RecordName+'?')) {
                                                                window.location.href = 'delete-user/'+RecordId;
                                                            }
                                                        }
                                                    </script>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>


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

</body>
</html>