@extends('layouts.dashboard')
@section('content')

{!! HTML::style('/assets/css/bootstrap.min.css') !!}
{!! HTML::style('/assets/css/slick.css') !!}
{!! HTML::style('/assets/css/slick-theme.css') !!}
{!! HTML::style('/assets/css/nouislider.min.css') !!}
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                        <div class="product-view">
                            <img src="{{asset('/assets/img/product2.jpg')}}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{{asset('/assets/img/Hacienda2.jpg')}}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{{asset('/assets/img/Hacienda3.jpg')}}" alt="">
                        </div>
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="{{asset('/assets/img/product2.jpg')}}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{{asset('/assets/img/Hacienda2.jpg')}}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{{asset('/assets/img/Hacienda3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        <div class="product-label">
                            <span class="sale">-20%</span>
                        </div>
                        <h2 class="product-name">Hacienda La Coqueta</h2>
                        <h3 class="product-price">Zapotlanejo, Jalisco</h3>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                            <a href="#">30 Reseñas</a>
                        </div>
                        <p><strong>Disponibilidad:</strong> Disponible</p>
                        <p><strong>Tipo de Lugar:</strong> Hacienda</p>
                        <p><strong>Capacidad:</strong> 250-600</p>
                        <p>Hermosa hacienda ubicada a las afueras de Zapotlanejo, Jalisco.</p>
                        <p><strong>Cuenta con:</strong>
                            <ol>
                                <li style="color:black">Jardín</li>
                                <li style="color:black">Zona Infantil</li>
                                <li style="color:black">Estacionamiento</li>
                                <li style="color:black">Piscina</li>
                                <li style="color:black">Lago</li>
                                <li style="color:black">Iglesia</li>
                                <li style="color:black">Valet Parking</li>
                                <li style="color:black">Baños</li>
                                <li style="color:black">Cocina</li>
                                <li style="color:black">Refrigerador</li>
                            </ol>
                        </p>
                        <div class="product-btns">
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Añadir a Carrito</button>
                            <div class="pull-right">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li><a data-toggle="tab" href="#tab1">Details</a></li>
                            <li><a data-toggle="tab" href="#tab2">Reviews (3)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div id="tab2" class="tab-pane fade in">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-reviews">
                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>

                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>

                                            <div class="single-review">
                                                <div class="review-heading">
                                                    <div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
                                                    <div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                                    <div class="review-rating pull-right">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o empty"></i>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                </div>
                                            </div>

                                            <ul class="reviews-pages">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-uppercase">Write Your Review</h4>
                                        <p>Your email address will not be published.</p>
                                        <form class="review-form">
                                            <div class="form-group">
                                                <input class="input" type="text" placeholder="Your Name" />
                                            </div>
                                            <div class="form-group">
                                                <input class="input" type="email" placeholder="Email Address" />
                                            </div>
                                            <div class="form-group">
                                                <textarea class="input" placeholder="Your review"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-rating">
                                                    <strong class="text-uppercase">Your Rating: </strong>
                                                    <div class="stars">
                                                        <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                                                        <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                                                        <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                                                        <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                                                        <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
{!! HTML::script('/js/jquery-3.2.1.min.js') !!}
{!! HTML::script('/js/jquery.min.js') !!}
{!! HTML::script('/js/bootstrap.min.js') !!}
{!! HTML::script('/js/slick.min.js') !!}
{!! HTML::script('/js/nouislider.min.js') !!}
{!! HTML::script('/js/jquery.zoom.min.js') !!}
{!! HTML::script('/js/main.js') !!}

@endsection
