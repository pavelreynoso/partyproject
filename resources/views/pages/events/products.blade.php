@extends('layouts.dashboard')

@section('content')
<section class="no_sidebar_3column_area">
    <div class="container">

        <div class="three_column_product">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="/assets/img/product1.jpg" alt="">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul><br>
                            <h4>Salón El Vizconde</h4>
                            <h5 style="color:black; font-size:12pt">50 a 200 personas</h5>
                            <h5 style="color:black; font-size:12pt">Desde $400 MXN por persona</h5>
                            <h5 style="color:black; font-size:12pt">Alquiler disponible desde $70,000 MXN</h5>
                            <h5 style="color:black; font-size:12pt">
                                <span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span> 125
                                </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="/assets/img/product2.jpg" alt="" style="width:auto height:170px">
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul><br>
                            <h4>Hacienda La Coqueta</h4>
                            <h5 style="color:black; font-size:12pt">250 a 600 personas</h5>
                            <h5 style="color:black; font-size:12pt">Desde $550 MXN por persona</h5>
                            <h5 style="color:black; font-size:12pt">Alquiler no disponible</h5>
                            <h5 style="color:black; font-size:12pt">
                                <span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span> 30
                                </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="/assets/img/product3.jpg" alt="" style="width:auto height:170px">
                            <h5 class="new"></h5>
                        </div>
                        <div class="l_p_text">
                           <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul><br>
                            <h4>Terraza La Alegría</h4>
                            <h5 style="color:black; font-size:12pt">20 a 200 personas</h5>
                            <h5 style="color:black; font-size:12pt">Alquiler disponible desde $20,000 MXN</h5>
                            <h5 style="color:black; font-size:12pt">
                                <span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span><span style="font-size:120%;color:#1BCCC3;">&bigstar;</span> 30
                                </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
