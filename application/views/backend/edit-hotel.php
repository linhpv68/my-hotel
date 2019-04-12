

<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Sửa Thông tin Khách sạn</title>
		<meta name="description" content="Sửa Thông tin Khách sạn">
		<meta name="author" content="Sửa Thông tin Khách sạn">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/template/backend/assets/images/vntrip_favicon.png"/>

		<!-- Bootstrap CSS -->
		<link href="/template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="/template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="/template/backend/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- IMG -->
    <link href="/template/backend/assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="/template/backend/assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
    <!-- END IMG -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="http://vntrip.com/index.php/Admin_controller/home" class="logo"><img alt="Logo" src="/template/backend/assets/images/logo-vntrip.svg" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-question-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small>Help and Support</small></h5>
                        </div>

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Do you want custom development to integrate this theme?</b>
                                <span>Contact Us</span>
                            </p>
                        </a>
                        <!-- All-->
                        <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                            <i class="fa fa-link"></i> Visit Pike Admin Website
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Jokn Doe</b>
                                <span>New message received</span>
                                <small class="text-muted">2 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Michael Jackson</b>
                                <span>New message received</span>
                                <small class="text-muted">15 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Foxy Johnes</b>
                                <span>New message received</span>
                                <small class="text-muted">Yesterday, 13:30</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="/template/backend/assets/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>John Doe</b>
                                <span>User registration</span>
                                <small class="text-muted">3 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="/template/backend/assets/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michael Cox</b>
                                <span>Task 2 completed</span>
                                <small class="text-muted">12 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="/template/backend/assets/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michelle Dolores</b>
                                <span>New job completed</span>
                                <small class="text-muted">35 minutes ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All Allerts
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/template/backend/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <!--<h5 class="text-overflow"><small>Hello, admin</small> </h5>-->
                            <?php  $data = $this->session->userdata('userInfo')?>
                            <h5 class="text-overflow"><small><?=$data['userName']?></small> </h5>
                        </div>

                        <!-- item-->
                        <a href="pro-profile.php" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i> <span>Hồ sơ</span>
                        </a>

                        <!-- item-->
                        <a href="http://vntrip.com/index.php/Admin_controller/logout" class="dropdown-item notify-item">
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
                        <a href="http://vntrip.com/index.php/Admin_controller/home"><i class="fa fa-fw fa-bars"></i><span>
									Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="#" class="active"><i class="fa fa-fw fa-table"></i> <span> Quản lý Khách sạn
								</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="http://vntrip.com/index.php/Hotel_controller/add/add_hotel" class="active">Thêm
                                    khách sạn</a></li>
                            <li><a href="http://vntrip.com/index.php/Room_controller/add/add_room">Thêm phòng</a></li>
                            <li><a href="http://vntrip.com/index.php/Hotel_controller/view_hotel">Danh sách khách
                                    sạn</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-tv"></i> <span> Quản lý Người dùng </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="http://vntrip.com/index.php/Admin_controller/users">Người dùng</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right">20</span><i class="fa fa-fw fa-file-text-o"></i>
                            <span> Yêu Cầu Đặt Phòng </span> <span class="menu-arrow"></span></a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-copy"></i><span> Quản Lý doanh thu </span></a>
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
                            <h1 class="main-title float-left">Sửa thông tin Khách sạn</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item active">Sửa thông tin Khách sạn</li>
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
                                <h3><i class="fa fa-table"></i> Sửa/Thêm</h3>
                            </div>

                            <div class="card-body">

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <div class="card mb-3">
                                        <div class="card-header">
                                            <h3><i class="fa fa-hand-pointer-o"></i>Thông tin</h3>
                                        </div>

                                        <div class="card-body">

                                            <form method="post" action="http://vntrip.com/index.php/Hotel_controller/edit_img" enctype="multipart/form-data" accept-charset="utf-8">
                                                <div class="form-group">
                                                    <label>Tên Khách Sạn</label>
                                                    <?php /*foreach ($khachsan as $khachsan):*/?>
                                                        <input name="tenKS" type="text" class="form-control" id="tenKS" value="<?=$khachsan['tenKS']?>">
                                                        <label>Địa chỉ</label>
                                                        <input name="idKhachSan" type="hidden" class="form-control" id="idKhachSan"  value="<?= $khachsan['idKhachSan']?>">
                                                        <br>
                                                        <input name="diachi_phuong" type="text" class="form-control" id="diachi_phuong"  value="<?= $khachsan['diachi_phuong']?>" placeholder="Đường">
                                                        <br>
                                                        <input name="diachi_quan" type="text" class="form-control" id="diachi_quan" value="<?= $khachsan['diachi_quan']?>" placeholder="Quận">
                                                        <br>
                                                        <select class="form-control select2" name="diachi_idThanhPho" id="diachi_idThanhPho">
                                                            <option value="<?= $khachsan['diachi_idThanhPho'] ?>"><?= $khachsan['tenTP'] ?></option>
                                                            <?php foreach ($thanhpho as $thanhpho):?>
                                                                <option value="<?= $thanhpho['idThanhPho'] ?>"><?= $thanhpho['TenTP'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <label>Giá Phòng Trung Bình:</label>
                                                        <input name="GiaPhongTB" type="number" class="form-control" id="GiaPhongTB" value="<?=$khachsan['GiaPhongTB']?>">
                                                        <label> Hình ảnh:</label>
                                                        <input type="file" name="files[]" id="HinhAnh" multiple="multiple">
                                                    <?php /*endforeach; */?>
                                                </div>

                                                <button type="submit" class="btn btn-primary">
                                                    Sửa
                                                </button>
                                            </form>

                                        </div>
                                    </div><!-- end card-->
                                </div>
                            </div>
                        </div><!-- end card-->
                    </div>

                </div>


            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">Your Website</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="/template/backend/assets/js/modernizr.min.js"></script>
<script src="/template/backend/assets/js/jquery.min.js"></script>
<script src="/template/backend/assets/js/moment.min.js"></script>

<script src="/template/backend/assets/js/popper.min.js"></script>
<script src="/template/backend/assets/js/bootstrap.min.js"></script>

<script src="/template/backend/assets/js/detect.js"></script>
<script src="/template/backend/assets/js/fastclick.js"></script>
<script src="/template/backend/assets/js/jquery.blockUI.js"></script>
<script src="/template/backend/assets/js/jquery.nicescroll.js"></script>

<!-- App js -->
<script src="/template/backend/assets/js/pikeadmin.js"></script>

<!--Upload IMG-->
<script src="/template/backend/assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>
<script>
    $("#HinhAnh").filer({
        limit: null,
        maxSize: null,
        extensions: null,
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Kéo và thả tập tin ở đây</h3><span>(dung lượng nhỏ hơn 2MB)</span> <span style="display:inline-block; margin: 15px 0"></span></div><a class="jFiler-input-choose-btn btn btn-custom">Chọn ảnh</a></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <li>{{fi-progressBar}}</li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action">Xóa</a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
            itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash" href="http://vntrip.com/index.php/Hotel_controller/delete_img?file_name={{fi-name}}&id=<?=$khachsan['idKhachSan']?>">Xóa {{fi-idPhong}}</a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        uploadFile: {
            /*url: "/template/backend/assets/plugins/jquery.filer/php/upload.php",*/
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function(){},
            success: function(data, el){

                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"fa fa-plus\"></i>Thành Công</div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            error: function(el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-error\"><i class=\"fa fa-minus\"></i>Lỗi</div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        <?php if ($khachsan['HinhAnhKS'] != ''): ?>
        files: [

            {
                name: "<?=$khachsan['HinhAnhKS']?>",
                size: 145,
                type: "image/jpg",
                file: "<?="/../uploads/".$khachsan['HinhAnhKS']?>",
                idKhachSan: "<?=$khachsan['idKhachSan']?>"
            }

        ],
        <?php endif ?>
        addMore: false,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
            var file = file.name;
            /*$.post('/template/backend/assets/plugins/jquery.filer/php/remove_file.php', {file: file});*/
        },
        onEmpty: null,
        options: null,
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            removeConfirmation: "Bạn muốn xóa file?",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
            }
        }
    });
</script>
<!--End Upload IMG-->

</body>
</html>