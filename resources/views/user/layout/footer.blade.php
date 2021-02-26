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
