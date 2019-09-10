<header>
    <!-- header -->
    <div id="header" style="z-index: 1">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="{{url('/')}}">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">Birthdays</option>
                            <option value="2">Get-Togethers</option>
                            <option value="3">Kid's parties</option>
                            <option value="4">Sweet sixteen</option>
                            <option value="5">Religious</option>
                            <option value="6">Baby Showers</option>
                            <option value="7">Bachelorettes</option>
                            <option value="8"}}> Wedding</option>
                            <option value="9">Graduation Parties</option>
                            <option value="10">Business events</option>
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
                        </div>
                    -->
                        @guest
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        <div id="text">/</div>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        @else
                        <a class="text-uppercase">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        </a>
                        @endguest
                        <ul class="custom-menu">
                            <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                            <li><a href="#"><i class="fa fa-money"></i> Sell</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>
                        </ul>
                        <!--
                        <a href="{{ url('/login')}}" class="text-uppercase">Login</a>  <a href="{{ url('/register') }}" class="text-uppercase">Join</a>
                    -->
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
        @include('NavBars.categoriesNavBar')
        <!-- Mobile nav toggle-->
        <li class="nav-toggle">
            <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
        </li>
        <!-- / Mobile nav toggle -->

        <br>
    </div>
</header>
