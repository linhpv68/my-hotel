<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Vntrip business</title>
		<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
		<meta name="author" content="Pike Web Development - https://www.pikephp.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/template/backend/assets/images/vntrip_favicon.png">

		<!-- Bootstrap CSS -->
		<link href="/template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="/template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="/template/backend/assets/css/style.css" rel="stylesheet" type="text/css" />		
		
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

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                <span>Try Pike Admin PRO</span>
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
										<h1 class="main-title float-left">Danh sách</h1>
										<ol class="breadcrumb float-right">
											<li class="breadcrumb-item">Home</li>
											<li class="breadcrumb-item active">Danh Sách</li>
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
									<h3><i class="fa fa-table"></i> Danh sách khách sạn</h3>
                                </div>

								<div class="card-body">
									<div class="table-responsive">
									<table id="example1" class="table table-bordered table-hover display">
										<thead>
											<tr>
												<th>ID</th>
												<th>Tên khách sạn</th>
												<th>Địa chỉ</th>
												<th>Thao tác</th>
											</tr>
										</thead>
										<tbody>
                    <?php foreach ($list_KhachSan as $list_KhachSan):?>
                      <tr>
                        <td><?php echo $list_KhachSan['idKhachSan']?></td>
                        <td>
                          <a href="http://vntrip.com/index.php/Room_controller/view?id=<?= $list_KhachSan['idKhachSan'] ?>">
                            <?=$list_KhachSan['tenKS']?>
                          </a>
                        </td>
                        <td>
                          <?php echo $list_KhachSan['diachi_phuong'].' , Quận '.$list_KhachSan['diachi_quan'].' , Thành Phố '.$list_KhachSan['tenTP']?>
                        </td>
                        <td>
                          <a href="http://vntrip.com/index.php/Hotel_controller/edit/edit_hotel?id=<?= $list_KhachSan['idKhachSan'] ?>">
                            <button type="button" class="btn btn-primary-1">Sửa</button>
                          </a>
                            <a href="http://vntrip.com/index.php/Hotel_controller/delete_hotel?id=<?= $list_KhachSan['idKhachSan'] ?>">
                          <button type="button" class="btn btn-danger">Xóa</button>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
										</tbody>
									</table>
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

<!-- BEGIN Java Script for this page -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

	<script>
	// START CODE FOR BASIC DATA TABLE 
	$(document).ready(function() {
		$('#example1').DataTable();
	} );
	// END CODE FOR BASIC DATA TABLE 
	
	
	// START CODE FOR Child rows (show extra / detailed information) DATA TABLE 
	function format ( d ) {
		// `d` is the original data object for the row
		return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
			'<tr>'+
				'<td>Full name:</td>'+
				'<td>'+d.name+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extension number:</td>'+
				'<td>'+d.extn+'</td>'+
			'</tr>'+
			'<tr>'+
				'<td>Extra info:</td>'+
				'<td>And any further details here (images etc)...</td>'+
			'</tr>'+
		'</table>';
	}
 
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				"ajax": "/template/backend/assets/data/dataTablesObjects.txt",
				"columns": [
					{
						"className":      'details-control',
						"orderable":      false,
						"data":           null,
						"defaultContent": ''
					},
					{ "data": "name" },
					{ "data": "position" },
					{ "data": "office" },
					{ "data": "salary" }
				],
				"order": [[1, 'asc']]
			} );
			 
			// Add event listener for opening and closing details
			$('#example2 tbody').on('click', 'td.details-control', function () {
				var tr = $(this).closest('tr');
				var row = table.row( tr );
		 
				if ( row.child.isShown() ) {
					// This row is already open - close it
					row.child.hide();
					tr.removeClass('shown');
				}
				else {
					// Open this row
					row.child( format(row.data()) ).show();
					tr.addClass('shown');
				}
			} );
		} );
		// END CODE FOR Child rows (show extra / detailed information) DATA TABLE 		
		
				
		
		// START CODE Show / hide columns dynamically DATA TABLE 		
		$(document).ready(function() {
			var table = $('#example3').DataTable( {
				"scrollY": "350px",
				"paging": false
			} );
		 
			$('a.toggle-vis').on( 'click', function (e) {
				e.preventDefault();
		 
				// Get the column API object
				var column = table.column( $(this).attr('data-column') );
		 
				// Toggle the visibility
				column.visible( ! column.visible() );
			} );
		} );
		// END CODE Show / hide columns dynamically DATA TABLE 	
		
		
		// START CODE Individual column searching (text inputs) DATA TABLE 		
		$(document).ready(function() {
			// Setup - add a text input to each footer cell
			$('#example4 thead th').each( function () {
				var title = $(this).text();
				$(this).php( '<input type="text" placeholder="Search '+title+'" />' );
			} );
		 
			// DataTable
			var table = $('#example4').DataTable();
		 
			// Apply the search
			table.columns().every( function () {
				var that = this;
		 
				$( 'input', this.header() ).on( 'keyup change', function () {
					if ( that.search() !== this.value ) {
						that
							.search( this.value )
							.draw();
					}
				} );
			} );
		} );
		// END CODE Individual column searching (text inputs) DATA TABLE 	 	
	</script>	
<!-- END Java Script for this page -->

</body>
</html>