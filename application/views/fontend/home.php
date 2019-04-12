<?php
    $ss_name = $this->session->userdata('userInfo');
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>My Hotel - Đặt Phòng Khách sạn trực tuyến </title>
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
<body>
<nav class="navbar navbar-default navbar-inverse navbar-theme navbar-full" id="main-nav">
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
                        <?php
                            if ($ss_name['username'] != NULL) {
                                echo '<a class="dropdown-toggle" href="account.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user-circle-o navbar-nav-item-user-icon"></i>'
                                    . $ss_name['username'] .
                                    '  
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li>
                                        <a href="account.php">Preferences</a>
                                    </li>
                                    <li>
                                        <a href="account-notifications.php">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="account-cards.php">Payment Methods</a>
                                    </li>
                                    <li>
                                        <a href="account-travelers.php">Travelers</a>
                                    </li>
                                    <li>
                                        <a href="account-history.php">History</a>
                                    </li>
                                    <li>
                                    <a href="http://localhost/quanlykhachsan/logout">Đăng Xuất</a>';
                            } else {
                                echo '<a href="http://localhost/quanlykhachsan/login">Đăng Nhập / Đăng ký</a>';
                            }
                        ?>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="theme-hero-area">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg-pattern theme-hero-area-bg-pattern-ultra-light"
             style="background-image:url(template/fontend/img/patterns/travel/1.png);"></div>
        <div class="theme-hero-area-grad-mask theme-hero-area-grad-mask-i"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="container">
            <div class="theme-search-area _pv-60 theme-search-area-stacked theme-search-area-white">
                <div class="theme-search-area-header _mb-20">
                    <h1 class="theme-search-area-title theme-search-area-title-sm">Đặt phòng khách sạn</h1>
                    <p class="theme-search-area-subtitle">Tìm kiếm hàng trăm trang khách sạn cùng một lúc</p>
                </div>
                <div class="theme-search-area-form" id="hero-search-form">
                    <div class="row" data-gutter="none">
                        <div class="col-md-4 ">
                            <div class="theme-search-area-section first theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                                <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text"
                                           placeholder="Tên khách sạn hoặc địa điểm" data-provide="typeahead"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row" data-gutter="none">
                                <div class="col-md-6 ">
                                    <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                                        <div class="theme-search-area-section-inner">
                                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                            <input class="theme-search-area-section-input datePickerStart _mob-h"
                                                   value="Wed 06/27" type="text" placeholder="Check-in"/>
                                            <input class="theme-search-area-section-input _desk-h mobile-picker"
                                                   value="2018-06-27" type="date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="theme-search-area-section theme-search-area-section-fade-white theme-search-area-section-mr theme-search-area-section-no-border theme-search-area-section-curved">
                                        <div class="theme-search-area-section-inner">
                                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                            <input class="theme-search-area-section-input datePickerEnd _mob-h"
                                                   value="Mon 07/02" type="text" placeholder="Check-out"/>
                                            <input class="theme-search-area-section-input _desk-h mobile-picker"
                                                   value="2018-07-02" type="date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-no-border theme-search-area-submit-white theme-search-area-submit-curved">
                                <i class="theme-search-area-submit-icon fa fa-angle-right"></i>
                                <span class="_desk-h">Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
    <div class="container">
        <div class="row" data-gutter="20">
            <div class="col-md-4 ">
                <div class="banner _br-5 _bsh-xl _bsh-light banner-animate banner-animate-mask-out">
                    <img class="banner-img"
                         src="template/fontend/img/architectural-design-architecture-beach-bridge-453201_800x600.jpg"
                         alt="Image Alternative text" title="Image Title"/>
                    <div class="banner-mask banner-mask-dark"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _ta-c banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Last Minute Deals</h5>
                        <p class="banner-subtitle">Save up to 50% on booking</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="banner _br-5 _bsh-xl _bsh-light banner-animate banner-animate-mask-out">
                    <img class="banner-img" src="template/fontend/img/bonding-cold-cozy-dog-374845_800x600.jpg"
                         alt="Image Alternative text" title="Image Title"/>
                    <div class="banner-mask banner-mask-dark"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _ta-c banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Family Travel</h5>
                        <p class="banner-subtitle">Special offers for family vacation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="banner _br-5 _bsh-xl _bsh-light banner-animate banner-animate-mask-out">
                    <img class="banner-img"
                         src="template/fontend/img/bedroom-door-entrance-guest-room-271639_800x600.jpg"
                         alt="Image Alternative text" title="Image Title"/>
                    <div class="banner-mask banner-mask-dark"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption _ta-c banner-caption-bottom banner-caption-grad">
                        <h5 class="banner-title">Save on Luxury Hotels</h5>
                        <p class="banner-subtitle">5 stars hotels at 3 stars price</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
    <div class="container">
        <div class="theme-page-section-header theme-page-section-header-white">
            <h5 class="theme-page-section-title">Top Destinations</h5>
            <p class="theme-page-section-subtitle">Cum pulvinar urna inceptos dictum donec consequat magna pretium
                pretium</p>
        </div>
        <div class="row row-col-gap" data-gutter="20">
            <div class="col-md-7 ">
                <div class="banner _h-40vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/kwd5er2xpsg_900x500.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">San Francisco</h5>
                        <p class="banner-subtitle">United States</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ">
                <div class="banner _h-40vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/ypkiwlvhopi_800x600.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">Rome</h5>
                        <p class="banner-subtitle">Italy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/lvjzhhoijj4_400x400.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">Moscow</h5>
                        <p class="banner-subtitle">Russia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/3nuld7_4rnc_400x400.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">London</h5>
                        <p class="banner-subtitle">United Kindom</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/o14abktz5iy_800x600.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">Bali</h5>
                        <p class="banner-subtitle">Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/nnzkznywhau_800x600.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">Paris</h5>
                        <p class="banner-subtitle">France</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/hv5plutrkci_800x600.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">New York</h5>
                        <p class="banner-subtitle">United States</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="banner _h-33vh _bsh-sm _bsh-light _br-4 banner-animate banner-animate-mask-in">
                    <div class="banner-bg"
                         style="background-image:url(template/fontend/img/hallway-in-blue-and-orange-wall-paint-219000_800x600.jpg);"></div>
                    <div class="banner-mask"></div>
                    <a class="banner-link" href="#"></a>
                    <div class="banner-caption banner-caption-bottom">
                        <h5 class="banner-title">Kyoto</h5>
                        <p class="banner-subtitle">Japan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-hero-area">
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg ws-action"
             style="background-image:url(template/fontend/img/7h6u7djcf2e_1500x800.jpg);" data-parallax="true"></div>
        <div class="theme-hero-area-mask"></div>
    </div>
    <div class="theme-hero-area-body">
        <div class="theme-page-section theme-page-section-xxl">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="theme-hero-text theme-hero-text-white theme-hero-text-center">
                            <div class="theme-hero-text-header">
                                <h2 class="theme-hero-text-title">Why pay more?</h2>
                                <p class="theme-hero-text-subtitle">Subscribe now and unlock our secret deals. Save up
                                    to 70% by getting access to our special offers for hotels, flights, cars, vacation
                                    rentals and travel experiences.</p>
                            </div>
                            <a class="btn _tt-uc _mt-20 btn-white btn-ghost btn-lg" href="#">Sign Up Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="theme-page-section theme-page-section-xxl theme-page-section-dark">
    <div class="container">
        <div class="theme-page-section-header theme-page-section-header-white">
            <h5 class="theme-page-section-title">Travel Inspirations</h5>
            <p class="theme-page-section-subtitle">Our latest travel tips, hacks and insights</p>
        </div>
        <div class="theme-inline-slider row" data-gutter="10">
            <div class="owl-carousel owl-carousel-nav-white" data-items="4" data-loop="true" data-nav="true">
                <div class="theme-inline-slider-item">
                    <div class="theme-blog-item theme-blog-item-white">
                        <a class="theme-blog-item-link" href="blog-post.html"></a>
                        <div class="banner _h-45vh  banner-">
                            <div class="banner-bg"
                                 style="background-image:url(template/fontend/img/city-sun-hot-child_350x260.jpg);"></div>
                            <div class="banner-caption banner-caption-bottom banner-caption-">
                                <p class="theme-blog-item-time">day ago</p>
                                <h5 class="theme-blog-item-title">Booking hotel in India</h5>
                                <p class="theme-blog-item-desc">Nec nibh mattis elit lobortis feugiat felis nec enim
                                    luctus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-inline-slider-item">
                    <div class="theme-blog-item theme-blog-item-full">
                        <a class="theme-blog-item-link" href="blog-post.html"></a>
                        <div class="banner _h-45vh  banner-">
                            <div class="banner-bg"
                                 style="background-image:url(template/fontend/img/man-wearing-black-and-red-checkered_350x435.jpg);"></div>
                            <div class="banner-caption banner-caption-bottom banner-caption-grad">
                                <p class="theme-blog-item-time">week ago</p>
                                <h5 class="theme-blog-item-title">Total Solar Eclipse</h5>
                                <p class="theme-blog-item-desc">Quis nullam cubilia sem neque ante vehicula volutpat
                                    varius neque</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-inline-slider-item">
                    <div class="theme-blog-item theme-blog-item-white">
                        <a class="theme-blog-item-link" href="blog-post.html"></a>
                        <div class="banner _h-45vh  banner-">
                            <div class="banner-bg"
                                 style="background-image:url(template/fontend/img/lights_350x260.jpg);"></div>
                            <div class="banner-caption banner-caption-bottom banner-caption-">
                                <p class="theme-blog-item-time">2 weeks ago</p>
                                <h5 class="theme-blog-item-title">Lights of Venice</h5>
                                <p class="theme-blog-item-desc">Habitasse blandit fermentum eu magna massa magna non
                                    vulputate duis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-inline-slider-item">
                    <div class="theme-blog-item theme-blog-item-white">
                        <a class="theme-blog-item-link" href="blog-post.html"></a>
                        <div class="banner _h-45vh  banner-">
                            <div class="banner-bg"
                                 style="background-image:url(template/fontend/img/man_back_350x260.jpg);"></div>
                            <div class="banner-caption banner-caption-bottom banner-caption-">
                                <p class="theme-blog-item-time">2 weeks ago</p>
                                <h5 class="theme-blog-item-title">Alaska days</h5>
                                <p class="theme-blog-item-desc">Fusce nec sem sollicitudin sit eu dictum cubilia taciti
                                    lacus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-inline-slider-item">
                    <div class="theme-blog-item theme-blog-item-full">
                        <a class="theme-blog-item-link" href="blog-post.html"></a>
                        <div class="banner _h-45vh  banner-">
                            <div class="banner-bg"
                                 style="background-image:url(template/fontend/img/plate-flight-sky-sunset_350x435.jpg);"></div>
                            <div class="banner-caption banner-caption-bottom banner-caption-grad">
                                <p class="theme-blog-item-time">mounth ago</p>
                                <h5 class="theme-blog-item-title">Mix up your cabin classes</h5>
                                <p class="theme-blog-item-desc">Nullam nulla arcu rhoncus lacus ornare senectus id odio
                                    rhoncus</p>
                            </div>
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
</body>

<!-- Mirrored from remtsoy.com/tf_templates/tf-bookify-demo/hotel-index-4.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Jan 2019 08:09:13 GMT -->
</html>