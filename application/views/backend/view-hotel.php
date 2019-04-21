<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Danh sách Khách sạn</title>
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

    <!-- Ajax-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


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
                                <small><?= $data['username'] ?></small>
                            </h5>
                        </div>
                        <!-- item-->
                        <a href="edit-user?id=<?=$data['id_user']?>" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i>
                            <span>Cá nhân</span>
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
                            <h1 class="main-title float-left">Quản lý Khách sạn</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Trang chủ</li>
                                <li class="breadcrumb-item active">Khách sạn</li>
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
                                            if (isset($notify)) {
                                                echo "<h5>Thông báo</h5>";
                                                echo "<h6>$notify</h6><br>";

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

                                            <form class="theme-form" method="post" action="add-hotel"
                                                  enctype="multipart/form-data" accept-charset="utf-8">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Thêm mới khách sạn</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                                aria-hidden="true">&times;</span><span class="sr-only">Hủy</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input class="form-control" name="id_user" type="hidden" value="<?=$data['id_user']?>">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Tên khách sạn:</label>
                                                                <input class="form-control" name="hotel_name"
                                                                       type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Địa chỉ</label>
                                                                <select name="thanhpho" id = "thanhpho" class="form-control" required>
                                                                    <option>- Chọn -</option>
                                                                    <?php foreach ($citys as $city):?>
                                                                    <option value="<?=$city['matp']?>"><?=$city['name_tp']?></option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group quanhuyen">
                                                                <select name="quanhuyen" id ="quanhuyen" class="form-control">
                                                                    <option>- Chọn -</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <select name="xaphuong" id="xaphuong" class="form-control">
                                                                    <option>- Chọn -</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <input class="form-control" name="address"
                                                                       placeholder="Tòa nhà, Tên đường..." type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Giá trung bình</label>
                                                                <input class="form-control" name="prices" type="number"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Mô tả khách sạn </label>
                                                                <input class="form-control" name="describe_hotel" type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Các thiết bị</label>
                                                                <input class="form-control" name="device_hotel" type="text"
                                                                       required/>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Ảnh đại diện (bắt buộc):</label> <br/>
                                                        <input type="file" name="files" size="20" required/>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Thêm</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <h3><i class="fa fa-user"></i> Danh sách khách sạn
                                </h3>
                            </div>

                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width:50px">ID</th>
                                            <th style="width:130px">Hình ảnh</th>
                                            <th style="width:130px">Tên khách sạn</th>
                                            <th>Thông tin</th>
                                            <th style="width:130px">Địa chỉ</th>
                                            <th style="width:150px">Giá</th>
                                            <th style="width:120px">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (isset($list_hotels)) { ?>
                                            <?php foreach ($list_hotels as $list_hotels): ?>
                                                <tr>
                                                    <th><?= $list_hotels['id_hotel'] ?></th>
                                                    <td>
                                                        <span style="float: left;">
                                                            <img alt="image"
                                                                 style="height:auto;width: auto;max-width: 110px;"
                                                                 src="../assets/images/<?= $list_hotels['images'] ?>">
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <strong><?= $list_hotels['hotel_name'] ?></strong>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li>
                                                               Mô tả: <?= $list_hotels['describe_hotel'] ?>
                                                            </li>
                                                            <li>
                                                                Thiết bị: <?= $list_hotels['device_hotel'] ?>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td><?= $list_hotels['address'] ?></td>
                                                    <td><?= $list_hotels['prices'] ?> VNĐ</td>

                                                    <td>
                                                        <!--Sửa-->
                                                        <!--                                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_user">-->
                                                        <a href="edit-hotel?id=<?= $list_hotels['id_hotel'] ?>"
                                                           class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                                        </a>

                                                        <!--Xóa-->
                                                        <a href="javascript:deleteRecord('<?= $list_hotels['id_hotel'] ?>','<?= $list_hotels['hotel_name'] ?>');"
                                                           class="btn btn-danger btn-sm" data-placement="top"
                                                           data-toggle="tooltip" data-title="Delete"><i
                                                                    class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        <script>
                                                            function deleteRecord(RecordId, RecordName) {
                                                                if (confirm('Bạn có muốn xóa ' + RecordName + '?')) {
                                                                    window.location.href = 'delete-hotel?id=' + RecordId;
                                                                }
                                                            }
                                                        </script>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        <?php } ?>
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

<!--ajax-->
<script type="text/javascript">
    $(document).ready(function () {
        $("#thanhpho").change(function () {
            var id = $("#thanhpho").val();
            // alert(id);
            $.ajax({
                url : 'http://localhost/quanlykhachsan/address/quanhuyen',
                type : 'post',
                data: {id: id},
                dataType : 'json',
                success : function (result){
                    //console.log(result);
                    var html = '';
                    $.each (result, function (key, value){
                        //console.log(value['name']);

                        html += '<option value="';
                        html +=value['maqh'];
                        html +='">';
                        html +=value['name_qh'];
                        html +='</option>';

                    });
                    $('#quanhuyen').html(html);

                }
            });

        })
        $("#quanhuyen").change(function () {
            var id = $("#quanhuyen").val();
            // alert(id);
            $.ajax({
                url : 'http://localhost/quanlykhachsan/address/xaphuong',
                type : 'post',
                data: {id: id},
                dataType : 'json',
                success : function (result){
                    //console.log(result);
                    var html = '';
                    $.each (result, function (key, value){
                        //console.log(value['name']);
                        html += '<option value="';
                        html +=value['xaid'];
                        html +='">';
                        html +=value['name_xaphuong'];
                        html +='</option>';
                    });
                    $('#xaphuong').html(html);

                }
            });

        })


    })
</script>
<style>
    .table-bordered thead td, .table-bordered thead th {
        border-bottom-width: 2px;
        color: #008fea;
        text-align: center;
    }
</style>

</body>
</html>