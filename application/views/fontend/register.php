<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:02:34 GMT -->
<head>
    <title>Đăng Ký</title>
    <meta charset="UTF-8"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="template/fontend/css/font-awesome.css"/>
    <link rel="stylesheet" href="template/fontend/css/lineicons.css"/>
    <link rel="stylesheet" href="template/fontend/css/weather-icons.css"/>
    <link rel="stylesheet" href="template/fontend/css/bootstrap.css"/>
    <link rel="stylesheet" href="template/fontend/css/styles.css"/>
    <!--Date-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>

</head>
<body class="bg-gray">
<!--top header-->
<nav class="navbar navbar-default navbar-inverse navbar-theme" id="main-nav">
    <div class="container">
        <div class="navbar-inner nav">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target="#navbar-main" data-toggle="collapse" type="button"
                        area-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">
                    <img name="img_logo" src="template/backend/assets/images/logo.png" alt="Image Alternative text"
                         title="Image Title"/>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-main">
                <ul class="nav navbar-nav">
                    <li class="active dropdown">
                        <a class="dropdown-toggle" href="home">Trang chủ</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="home">Khách sạn</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Địa điểm</a>
                        <div class="dropdown-menu dropdown-menu-xl">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="dropdown-meganav-list-title">Miền bắc</h5>
                                    <ul class="dropdown-meganav-list-items">
                                        <li>
                                            <a href="room-index-1.html">Hà Nội</a>
                                        </li>
                                        <li>
                                            <a href="room-index-2.html">Hải Phòng</a>
                                        </li>
                                        <li>
                                            <a href="room-index-3.html">Quảng Ninh</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="dropdown-meganav-list-title">Miền Trung</h5>
                                    <ul class="dropdown-meganav-list-items">
                                        <li>
                                            <a href="room-results-1.html">Layout 1</a>
                                        </li>
                                        <li>
                                            <a href="room-results-2.html">Layout 2</a>
                                        </li>
                                        <li>
                                            <a href="room-results-3.html">Layout 3</a>
                                        </li>
                                        <li>
                                            <a href="room-results-4.html">Layout 4</a>
                                        </li>
                                        <li>
                                            <a href="room-results-5.html">Layout 5</a>
                                        </li>
                                        <li>
                                            <a href="room-results-6.html">Layout 6</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="dropdown-meganav-list-title">Miền Nam</h5>
                                    <ul class="dropdown-meganav-list-items">
                                        <li>
                                            <a href="room-page-1.html">Layout 1</a>
                                        </li>
                                        <li>
                                            <a href="room-page-2.html">Layout 2</a>
                                        </li>
                                        <li>
                                            <a href="room-page-3.html">Layout 3</a>
                                        </li>
                                        <li>
                                            <a href="room-page-4.html">Layout 4</a>
                                        </li>
                                        <li>
                                            <a href="room-page-5.html">Layout 5</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="admin">Khách hàng doanh nghiệp</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="navbar-nav-item-user dropdown">
                        <a href="http://localhost/quanlykhachsan/login">Đăng nhập / Đăng ký</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</nav>
<!--end top header-->
<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="theme-login">
                    <div class="theme-login-header">
                        <h1 class="theme-login-title">Đăng ký</h1>
                        <p class="theme-login-subtitle">đăng ký tài khoản với My Hotel</p>
                    </div>
                    <div class="theme-login-box">
                        <div class="theme-login-box-inner">
                            <div class="theme-login-box-inner">
                                <div>
                                    <span style="color: #761c19">
                                        <?php
                                            if (isset($erro)) {
                                                echo $erro;
                                            }
                                        ?>
                                    </span>
                                </div>
                                <form class="theme-login-form" method="post" action="register" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="form-group theme-login-form-group">
                                        <label>Họ đệm: </label>
                                        <input name="firstname" class="form-control" type="text"
                                               placeholder="Họ đệm"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Tên: </label>
                                        <input name="lastname" class="form-control" type="text" placeholder="Tên"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Tên tài khoản: </label>
                                        <input name="username" class="form-control" type="text"
                                               placeholder="Tên tài khoản"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Mật khẩu: </label>
                                        <input name="password" class="form-control" type="password"
                                               placeholder="Mật khẩu"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Nhập lại Mật khẩu: </label>
                                        <input name="re-password" class="form-control" type="password"
                                               placeholder="Nhập lại Mật khẩu"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Địa chỉ Email: </label>
                                        <input name="emailaddress" class="form-control" type="email"
                                               placeholder="Địa chỉ Email"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Số điện thoại: </label>
                                        <input name="numberphone" class="form-control" type="number"
                                               placeholder="Số điện thoại"/>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Ngày sinh: </label>
                                        <input class="form-control" name="birthday" type="date" data-date=""
                                               data-date-format="DD/MM/YYYY" value="2015-08-09">
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Giới tính: </label>
                                        <select class="form-group theme-login-form-group" name="gender"
                                                style="width: 327px;height: 45px;">
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </div>
                                    <div class="form-group theme-login-form-group">
                                        <label>Ảnh Đại Diện: </label>
                                        <input type="file" name="files" size="20" />
                                    </div>

                                    <button class="btn btn-uc btn-dark btn-block btn-lg" type="submit">Đăng Ký
                                    </button>
                                </form>
                            </div>
                            <div class="theme-login-box-alt">
                                <p>Bạn đã có tài khoản? &nbsp;
                                    <a href="login">Đăng Nhập.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--foter-->
    <div class="theme-footer" id="mainFooter">
        <div class="container _ph-mob-0">
            <div class="row row-eq-height row-mob-full" data-gutter="60">
                <div class="col-md-3">
                    <div class="theme-footer-section theme-footer-">
                        <a class="theme-footer-brand _mb-mob-30" href="#">
                            <img src="template/backend/assets/images/logo.png" alt="Image Alternative text"
                                 title="Image Title"/>
                        </a>
                        <div class="theme-footer-brand-text">
                            <p>Website đặt phòng khách sạn trực tuyến, uy tín, chất lượng</p>
                            <p>Chính sách khuyến mãi lớn cho khách hàng thân thiết</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="theme-footer-section theme-footer-">
                                <h5 class="theme-footer-section-title">Travel Mate</h5>
                                <ul class="theme-footer-section-list">
                                    <li>
                                        <a href="#">About Travel Mate</a>
                                    </li>
                                    <li>
                                        <a href="#">Mobile App</a>
                                    </li>
                                    <li>
                                        <a href="#">Customer Support</a>
                                    </li>
                                    <li>
                                        <a href="#">Advertising</a>
                                    </li>
                                    <li>
                                        <a href="#">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of Use</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="theme-footer-section theme-footer-">
                                <h5 class="theme-footer-section-title">Explore</h5>
                                <ul class="theme-footer-section-list">
                                    <li>
                                        <a href="#">Countries</a>
                                    </li>
                                    <li>
                                        <a href="#">Regions</a>
                                    </li>
                                    <li>
                                        <a href="#">Cities</a>
                                    </li>
                                    <li>
                                        <a href="#">Districs</a>
                                    </li>
                                    <li>
                                        <a href="#">Airports</a>
                                    </li>
                                    <li>
                                        <a href="#">Hotels</a>
                                    </li>
                                    <li>
                                        <a href="#">Places of Interest</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="theme-footer-section theme-footer-">
                                <h5 class="theme-footer-section-title">Book</h5>
                                <ul class="theme-footer-section-list">
                                    <li>
                                        <a href="#">Apartments</a>
                                    </li>
                                    <li>
                                        <a href="#">Resorts</a>
                                    </li>
                                    <li>
                                        <a href="#">Villas</a>
                                    </li>
                                    <li>
                                        <a href="#">Hostels</a>
                                    </li>
                                    <li>
                                        <a href="#">B&Bs</a>
                                    </li>
                                    <li>
                                        <a href="#">Guesthouses</a>
                                    </li>
                                    <li>
                                        <a href="#">Hotel Chains</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end foter-->
    <div class="theme-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="theme-copyright-text">Copyright &copy; 2018
                        <a href="home">My Hotel</a>. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6">
                    <ul class="theme-copyright-social">
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-google" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-youtube-play" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="template/fontend/js/jquery.js"></script>
    <script src="template/fontend/js/moment.js"></script>
    <script src="template/fontend/js/bootstrap.js"></script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYeBBmgAkyAN_QKjAVOiP_kWZ_eQdadeI&amp;callback=initMap&amp;libraries=places"></script>
    <script src="template/fontend/js/owl-carousel.js"></script>
    <script src="template/fontend/js/blur-area.js"></script>
    <script src="template/fontend/js/icheck.js"></script>
    <script src="template/fontend/js/gmap.js"></script>
    <script src="template/fontend/js/magnific-popup.js"></script>
    <script src="template/fontend/js/ion-range-slider.js"></script>
    <script src="template/fontend/js/sticky-kit.js"></script>
    <script src="template/fontend/js/smooth-scroll.js"></script>
    <script src="template/fontend/js/fotorama.js"></script>
    <script src="template/fontend/js/bs-datepicker.js"></script>
    <script src="template/fontend/js/typeahead.js"></script>
    <script src="template/fontend/js/quantity-selector.js"></script>
    <script src="template/fontend/js/countdown.js"></script>
    <script src="template/fontend/js/window-scroll-action.js"></script>
    <script src="template/fontend/js/fitvid.js"></script>
    <script src="template/fontend/js/youtube-bg.js"></script>
    <script src="template/fontend/js/custom.js"></script>
    <!--date-->
    <script>
        $("input").on("change", function () {
            this.setAttribute(
                "data-date",
                moment(this.value, "YYYY-MM-DD")
                    .format(this.getAttribute("data-date-format"))
            )
        }).trigger("change")
    </script>
</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:02:34 GMT -->
</html>