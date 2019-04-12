<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Đăng Nhập</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../template/backend/assets/images/logo_factory.png">

    <!-- Switchery css -->
    <link href="../template/backend/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="../template/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="../template/backend/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="../template/backend/assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->

    <!-- END CSS for this page -->

</head>

<body class="adminbody">


    <div id="main" class="container">
        <!-- LOGO -->
        <div class="form-login">

            <div class="headerbar-left">
                <a href="home" class="logo"><img alt="logo" src="../template/backend/assets/images/logo.png" /></a>
            </div>
            <form method="post" action="">
                <div>
                    <span><?php if (isset($erro)){echo $erro;}?></span>
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Địa chỉ email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                </div>
                <a href="">Quên mật khẩu</a>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
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

    <!-- BEGIN Java Script for this page -->

    <!-- END Java Script for this page -->

</body>

</html>