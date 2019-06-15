<?php $this->load->helper('url');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng nhập - My Hotel</title>
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


<div id="main" class="container">
    <!-- LOGO -->
    <div class="form-login">
        <div class="headerbar-left">
            <a href="<?=base_url()?>" class="logo"><img alt="logo" src="../template/backend/assets/images/logo.png"/></a>
        </div>
        <form method="post" action="login">
            <div style="background: #ffb9b961;border-radius: 5px;">
                <?php if (!empty($erro)) { ?>
                    <h5><?= "Lỗi" ?></h5>
                    <h6><?= $erro ?></h6>
                <?php } ?>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Địa chỉ email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <a href="" onclick="forGetPass()">Quên mật khẩu</a>
            <button type="submit" class="btn btn-primary login">Đăng nhập</button>
        </form>
    </div>
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
<script src="../template/backend/assets/js/jquery.scrollTo.min.js"></script>
<script src="../template/backend/assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="../template/backend/assets/js/pikeadmin.js"></script>
<script>
	function forGetPass() {
		alert('Vui lòng liên hệ hotline để được hỗ trợ.')
	}
</script>
</body>
</html>
