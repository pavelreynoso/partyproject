<!DOCTYPE html>
<html lang=en>

<head>
    <!--Meta-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP">
    <meta name="Description" content="Feval main page">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-32x32.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--Meta-->
    <title>Feval</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="assets/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/owl.theme.default.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <link href="../vendors/colorbox/colorbox.css" rel="stylesheet" type="text/css">
</head>

<body>
    @include('dashboard.navbar')
    <br>
    <div id="home" style="z-index:2 top-margin:-10">
        <div class="container">
            <div class="home-wrap">
                <div id="home-slick">
                    <div class="banner banner_cover banner-1">
                        <img src="../assets/img/home_slider1.jpg" alt="">
                        <div class="banner-caption text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <h2>Categorías</h2>
            <!-- row -->
            <div class="row">
                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner01.png" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Música</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner02.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Lugares Para Fiesta</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner03.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Comida, banquete y bebidas</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner04.jpg" alt="" height="150">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Fotografía y vídeo</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner05.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Mobiliario, carpas y mesero</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner06.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="../assets/img/banner07.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

</body>
@include('dashboard.footer')

</html>
