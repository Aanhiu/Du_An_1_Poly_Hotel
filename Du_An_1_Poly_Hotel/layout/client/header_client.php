<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ Khách Sạn AYBITI</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Bootstrao Icons-->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="public/css/swiper-bundle.min.css">
    <!--Link CSS-->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- file moi -->
    <!-- nhúng các file -->
    <!-- Favicon Icon -->
    
    <link rel="shortcut icon" href="/Du_An_1_Poly_Hotel/assets2/images/favicon.png" type="image/x-icon">
    <!-- Flaticon -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/flaticon.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/fontawesome-5.14.0.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/bootstrap.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/magnific-popup.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/nice-select.min.css">
    <!-- Type Writer -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/jquery.animatedheadline.css">
    <!-- Animate -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/animate.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/slick.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="/Du_An_1_Poly_Hotel/assets2/css/style.css">
</head>

<body class="home-one">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- herder vs nav trang chủ -->
        <header class="main-header header-white">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container container-1720 clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href=""><img src="/Du_An_1_Poly_Hotel/assets2/images/logos/logo.png" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer clearfix me-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo my-15">
                                        <a href="index.html">
                                            <img src="/Du_An_1_Poly_Hotel/assets2/images/logos/logo.png" alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
 
                               <!-- nav trang chủ -->
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">

                                        <li class=""> <a class="nav-link" href="/du_an_1_poly_hotel/?role=client">Trang chủ<span class="sr-only">(current)</span></a> </li>

                                        <!-- <li class=""><a href="">Phòng</a> -->

                                        </li>

                                      
                                           
                                        </li>

                                        <li class="dropdown"> <a  href="/du_an_1_poly_hotel/?role=client&mod=Privacy_Policy&action=index">Chính sách bảo mật</a>
                                           
                                        </li>

                                        <li class="dropdown"><a href="/du_an_1_poly_hotel/?role=client&mod=return_Policy&action=index">Chính sách đổi trả</a>
                                           
                                        </li>

                                        <li><a href="/du_an_1_poly_hotel/?role=client&mod=service_Policy&action=index">Chính sách dịch vụ</a></li>

                                        <li><a href="/du_an_1_poly_hotel/?role=client&mod=news&action=index">Tin tức</a></li>

                                        <li><a href="/du_an_1_poly_hotel/?role=client&mod=contact&action=index">Liên hệ</a> </li>

                                        <li><a href="/du_an_1_poly_hotel/?role=client&mod=introduce&action=index">Giới thiệu</a> </li>

                                        

                                      
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Language Switcher -->

                        <!-- Menu Button -->
                        <div class="menu-btns">
                        <?php if(isset($_SESSION['auth'])){ ?>
                    <ul class="navbar-nav ml-auto">

                       <!-- <a href="" style="margin-right:10px;"><span class="rounded-circle"> <i class="fa-solid fa-heart" style="color:white; margin:7px 0px 0px 5px ; font-size:22px;"></i></span></a>  -->

                        <a href="/du_an_1_poly_hotel/?role=client&mod=auth&action=infomation"><span class="rounded-circle pl-1"> <i style="color:white; font-size:22px; margin:5px 0px 0px 3px ;" class="fa-regular fa-user"></i></span></a>
                        
                    </ul>
                    <?php }else{ ?>
                        <ul class="navbar-nav ml-auto" style="font-size: 20px;">
                    <li class="nav-item" >
                        <a class="nav-link" href="/du_an_1_poly_hotel/?role=client&mod=auth&action=sign_up">Đăng ký</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="/du_an_1_poly_hotel/?role=client&mod=auth">Đăng nhập</a>
                    </li>
                </ul>
                        <?php } ?>
                      </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>

        <!-- slider chạy banner trang chủ -->
        <!-- Slider Section Start -->
        <section class="main-slider-area bgc-black-with-lighting rel z-1">
            <div class="main-slider-active">
                <div class="slider-item">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col-xl-3">
                                <div class="slider-content">
                                    <span class="sub-title"><i class="fal fa-arrow-right"></i> Chào mừng đến với </span>
                                    <h1><span>Trải nhiệm không gian sang trong ngay !</span></h1>
                                    <a href="room-grid.html" class="theme-btn">Xem các phong ngay bây giờ<i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="slider-image">
                                    <img src="/Du_An_1_Poly_Hotel/assets2/images/slider/slide-1.jpg" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col-xl-3">
                                <div class="slider-content">
                                    <span class="sub-title"><i class="fal fa-arrow-right"></i> Chào mừng đến với </span>
                                    <h1><span>Trải nhiệm không gian sang trong ngay !</span></h1>
                                    <a href="room-grid.html" class="theme-btn">Xem các phong ngay bây giờ<i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="slider-image">
                                    <img src="/Du_An_1_Poly_Hotel/assets2/images/slider/slide-2.jpg" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col-xl-3">
                                <div class="slider-content">
                                    <span class="sub-title"><i class="fal fa-arrow-right"></i> Chào mừng đến với </span>
                                    <h1><span>Trải nhiệm không gian sang trong ngay !</span></h1>
                                    <a href="room-grid.html" class="theme-btn">Xem các phong ngay bây giờ<i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="slider-image">
                                    <img src="/Du_An_1_Poly_Hotel/assets2/images/slider/slide-3.jpg" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="container">
                        <div class="row justify-content-end align-items-center">
                            <div class="col-xl-3">
                                <div class="slider-content">
                                    <span class="sub-title"><i class="fal fa-arrow-right"></i> Chào mừng đến Hotel</span>
                                    <h1><span>Trải nhiệm không gian sang trong ngay !</span></h1>
                                    <a href="room-grid.html" class="theme-btn">Xem các phong ngay bây giờ<i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="slider-image">
                                    <img src="/Du_An_1_Poly_Hotel/assets2/images/slider/slide-4.jpg" alt="Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="main-slider-dots"></div>
                    </div>
                </div>
            </div>
            <div class="slider-shapes">
                <img class="shape circle-half" src="/Du_An_1_Poly_Hotel/assets2/images/shapes/slider-circle-half.png" alt="Shape">
                <img class="shape circle" src="/Du_An_1_Poly_Hotel/assets2/images/shapes/slider-circle.png" alt="Shape">
            </div>
            <div class="bg-lines">
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
                <span></span><span></span>
            </div>
        </section>
        <!-- Slider Section End -->
</body>

   


<!-- liên kết các frameword -->

<script src="/Du_An_1_Poly_Hotel/assets2/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/bootstrap.min.js"></script>
<!-- Appear Js -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/appear.min.js"></script>
<!-- Slick -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/slick.min.js"></script>
<!-- Magnific Popup -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/jquery.nice-select.min.js"></script>
<!-- Image Loader -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/imagesloaded.pkgd.min.js"></script>
<!-- Calendar -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/calendar.global.min.js"></script>
<!-- Circle Progress -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/circle-progress.min.js"></script>
<!-- Isotope -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/isotope.pkgd.min.js"></script>
<!--  WOW Animation -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/wow.min.js"></script>
<!-- Custom script -->
<script src="/Du_An_1_Poly_Hotel/assets2/js/script.js"></script>

    <!--End Menu--> 


</html>