<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:02:33 GMT -->
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="template/backend/assets/images/logo_factory.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="template/fontend/css/font-awesome.css"/>
    <link rel="stylesheet" href="template/fontend/css/lineicons.css"/>
    <link rel="stylesheet" href="template/fontend/css/weather-icons.css"/>
    <link rel="stylesheet" href="template/fontend/css/bootstrap.css"/>
    <link rel="stylesheet" href="template/fontend/css/styles.css"/>
</head>
<body class="bg-gray">
<!--top header-->
<?php $this->load->view('frontend/header');?>
<!--end top header-->
<div class="theme-page-section theme-page-section-xl theme-page-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="theme-login">
                    <div class="theme-login-header">
                        <h1 class="theme-login-title">Đăng Nhập</h1>
                        <p class="theme-login-subtitle">Đăng nhập với tài khoản My Hotel</p>
                    </div>
                    <div class="theme-login-box">
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
                            <form class="theme-login-form" method="post" action="login">
                                <div class="form-group theme-login-form-group">
                                    <input name="username" class="form-control" type="text"
                                           placeholder="Tên Tài Khoản"/>
                                </div>
                                <div class="form-group theme-login-form-group">
                                    <input name="password" class="form-control" type="password" placeholder="Mật Khẩu"/>
<!--                                    <p class="help-block">-->
<!--                                        <a href="pwd-reset.html">Quên Mật Khẩu?</a>-->
<!--                                    </p>-->
                                </div>
                                <button class="btn btn-uc btn-dark btn-block btn-lg" type="submit">Đăng Nhập</button>
                            </form>
                           <!--<div class="theme-login-social-separator">
                              <p>or sign in with social media</p>
                            </div>
                            <div class="theme-login-social-login">
                              <div class="row" data-gutter="10">
                                <div class="col-xs-6">
                                  <a class="theme-login-social-login-facebook" href="#">
                                    <i class="fa fa-facebook-square"></i>
                                    <span>Sign in with
                                      <br/>
                                      <b>Facebook</b>
                                    </span>
                                  </a>
                                </div>
                                <div class="col-xs-6">
                                  <a class="theme-login-social-login-google" href="#">
                                    <i class="fa fa-google-plus-circle"></i>
                                    <span>Sign in with
                                      <br/>
                                      <b>Google</b>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>-->
                        </div>
                        <div class="theme-login-box-alt">
                            <p>Bạn chưa có tài khoản? &nbsp;
                                <a href="register">Đăng ký</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--foter-->
<?php $this->load->view('frontend/footer');?>
<!--end foter-->


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
</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:02:33 GMT -->
</html>
