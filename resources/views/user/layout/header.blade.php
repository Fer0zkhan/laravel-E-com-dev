<header>
    <div class="sticky">
        <div class="container">

            <!-- Logo -->
            <div class="logo"> <a href="{{ route('user_home') }}"><img class="img-responsive"
                        src="{{ asset('client_assets/images/logo.png') }}" alt=""></a> </div>
            <nav class="navbar ownmenu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle
                            navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
                </div>

                <!-- NAV -->
                <div class="collapse navbar-collapse" id="nav-open-btn">
                    <ul class="nav">
                        <li class="active"> <a href="{{ route('user_home') }}">Home</a>
                        </li>
                        <li> <a href="{{ route('user_mystore') }}">Store</a>
                        </li>
                        @auth
                            <li><a href="{{ route('user_cart') }}">My Cart</a> </li>
                            <li><a href="{{ route('user_checkout') }}">Checkout</a> </li>
                            {{-- <li><a href="{{ route('user_checkout') }}">My Cart</a> </li> --}}
                        @endauth
                        @guest
                            <!-- Two Link Option -->
                            <li> <a href="{{ route('user_register') }}">Register</a>
                            </li>

                            <!-- MEGA MENU -->
                            <li> <a href="{{ route('user_login') }}">Login</a>
                            </li>
                        @endguest
                    </ul>
                </div>

                <!-- Nav Right -->
                <div class="nav-right">
                    <ul class="navbar-right">

                        <!-- USER INFO -->
                        <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                role="button"><i class="icon-user"></i> </a>
                            <ul class="dropdown-menu">
                                @auth
                                    <li>
                                        <h6>HELLO! {{ Auth::user()->name }}</h6>
                                    </li>
                                    <li><a href="{{ route('user_cart') }}">MY CART</a></li>
                                    <li><a href="{{ route('user_profile') }}">ACCOUNT INFO</a></li>
                                    <li><a href="{{ route('user_checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('user_logout') }}">LOG OUT</a></li>
                                @endauth
                                @guest
                                    <li>
                                        <h6>HELLO!</h6>
                                    </li>
                                    <li>
                                        <a href="{{ route('user_login') }}">
                                            Login Your Self First
                                        </a>
                                    </li>
                                @endguest

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
@yield('head_down')
<footer>
    <div class="container">

        <!-- ABOUT Location -->
        <div class="col-md-3">
            <div class="about-footer"> <img class="margin-bottom-30" src="images/logo-foot.png" alt="">
                <p><i class="icon-pointer"></i> Street No. 12, Newyork 12, <br>
                    MD - 123, USA.</p>
                <p><i class="icon-call-end"></i> 1.800.123.456789</p>
                <p><i class="icon-envelope"></i> info@PAVSHOP.com</p>
            </div>
        </div>
        <!-- SHOP -->
        <div class="col-md-3">
            <h6>SHOP</h6>
            <ul class="link">
                @auth
                    <li><a href="{{ route('user_mystore') }}"> Store</a></li>
                @endauth
                @guest
                    <li><a href="{{ route('user_register') }}"> Register Your Self First</a></li>
                @endguest
            </ul>
        </div>

        <!-- MY ACCOUNT -->
        <div class="col-md-3">
            <h6>MY ACCOUNT</h6>
            <ul class="link">
                @guest
                    <li><a href="{{ route('user_login') }}"> Login</a></li>
                    <li><a href="{{ route('user_register') }}"> Register</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('user_profile') }}"> My Account</a></li>
                    <li><a href="{{ route('user_cart') }}"> My Cart</a></li>
                @endauth
            </ul>
        </div>

        <!-- Rights -->

        <div class="rights">
            <p>© 2017 PAVSHOP All right reserved. </p>
            <div class="scroll"> <a href="#wrap" class="go-up"><i class="lnr lnr-arrow-up"></i></a> </div>
        </div>
    </div>
</footer>
