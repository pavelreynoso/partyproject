<!DOCTYPE html>
<html lang=en>

<head>
    <!--Meta-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=11">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP">
    <meta name="Description" content="Feval main page">
    <link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-32x32.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--Meta-->
    <title>Feval</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Owl Slider -->
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="../vendors/OwlCarousel2-2.2.1/owl.theme.default.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <link href="../vendors/colorbox/colorbox.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <!-- header -->
        <div id="header" class="my-container">
            <div class="container">
                <div class="pull-left">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a class="logo" href="#">
                            <img src="./img/logo.png" style="width:250px; max-height:150px" alt="">
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Search -->
                    <div class="header-search">
                        <form>
                            <input class="input search-input" type="text" placeholder="Enter your keyword">
                            <select class="input search-categories">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- /Search -->
                </div>
                <div class="pull-right">
                    <ul class="header-btns">
                        <!-- Account -->
                        <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                            </div>
                            <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                            <ul class="custom-menu">
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><strong class="text-uppercase">Ayuda</strong></a></li>
                        <li><a href="#"><strong class="text-uppercase">Vender</strong></a></li>
                        <li><a href="#"><strong class="text-uppercase">Wishlist</strong></a></li>
                        <!-- Cart -->
                        <li class="header-cart dropdown default-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="qty">3</span>
                                </div>
                                <strong class="text-uppercase">My Cart:</strong>
                                <br>
                                <span>35.20$</span>
                            </a>
                            <div class="custom-menu">
                                <div id="shopping-cart">
                                    <div class="shopping-cart-list">
                                        <div class="product product-widget">
                                            <div class="product-thumb">
                                                <img src="./img/thumb-product01.jpg" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                            </div>
                                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="shopping-cart-btns">
                                            <button class="main-btn">View Cart</button>
                                            <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <!-- /Cart -->
                    </ul>
                </div>
            </div>
            <!-- Mobile nav toggle-->
            <li class="nav-toggle">
                <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
            </li>
            <!-- / Mobile nav toggle -->
        <div id="navBarTop">
            <ul>
                <li><a href="#">Cumpleaños</a></li>
                <li><a href="#">Reuniones</a></li>
                <li><a href="#">Fiestas Infantiles</a></li>
                <li><a href="#">XV años</a></li>
                <li><a href="#">Religiosas</a></li>
                <li><a href="#">Baby Shower</a></li>
                <li><a href="#">Despedida de Soltera</a></li>
                <li><a href="#">Bodas</a></li>
                <li><a href="#">Graduaciones</a></li>
                <li><a href="#">Eventos Empresariales</a></li>
            </ul>
        </div>
        <br>
        </div>
    </header>
    <div class="nav-search">
        <form>
            <button class="nav-btn"><i class="fa fa-search"></i></button>
            <input class="input nav-input" type="text" placeholder="Lugar del evento">
            <input class="input nav-date-input" type="date" name="trip" min="2018-01-01" max="2018-12-31" />
        </form>
    </div>
    <!--
    <div id="home">
        <div class="container">
            <div class="home-wrap">
                <div id="home-slick">
                    <div class="banner banner_cover banner-1">
                        <img src="./img/home_slider1.jpg" alt="">
                        <div class="banner-caption text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our_latest_product">
        <div class="ccontainer">
            <div class="s_m_title">
                <h2>Our Latest Product</h2>
            </div>
            <div class="l_product_slider owl-carousel">
                <div class="item">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner01.PNG" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Womens Libero</h4>
                            <h5><del>$45.50</del> $40</h5>
                        </div>
                    </div>
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner02.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Oxford Shirt</h4>
                            <h5>$85.50</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner03.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Travel Bags</h4>
                            <h5><del>$45.50</del> $40</h5>
                        </div>
                    </div>
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner04.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>High Heel</h4>
                            <h5><del>$130.50</del> $110</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner05.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Summer Dress</h4>
                            <h5>$45.05</h5>
                        </div>
                    </div>
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner06.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Fossil Watch</h4>
                            <h5>$250.00</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner07.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Nike Shoes</h4>
                            <h5><del>$130</del> $110</h5>
                        </div>
                    </div>
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="img/banner08.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Ricky Shirt</h4>
                            <h5>$45.05</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Latest Product Area =================-->

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
                        <img src="./img/banner01.png" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Música</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner02.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Lugares Para Fiesta</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner03.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Comida, banquete y bebidas</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner04.jpg" alt="" height="150">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Fotografía y vídeo</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner05.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">Mobiliario, carpas y mesero</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner06.jpg" alt="" height="170">
                        <div class="banner-caption text-center">
                            <h2 class="white-color">NEW COLLECTION</h2>
                        </div>
                    </a>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="col-md-2">
                    <a class="banner banner-1" href="#">
                        <img src="./img/banner07.jpg" alt="" height="170">
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

</html>
