@extends('user.layout.layout')

@section('content')
    {{-- <div class="container mt-5">
        Welcome to Cart Page

        <table class="table">
            <thead>
            <tbody>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product image</th>
                    <th scope="col">Add to cart</th>
                </tr>
                </thead>
                @if ($carts->count())
                    @foreach ($carts as $cart)
                        <tr>
                            <th scope="row">{{ $cart->product_name }}</th>
                            <td>{{ $cart->product_price }}</td>
                            <td><img height="30px" width="30px" src="{{ asset($cart->product_img) }}" alt=""></td>
                            <td><a class="btn btn-info" href="{{ route('user_remove_cart', ['id' => $cart->id]) }}"
                                    role="button">Remove</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @if ($carts)
            Total Price:
            @php
                $result = 0;
            @endphp
            @foreach ($carts as $cart)
                @php
                    $res = (int) $cart->product_price;
                    $result = $result + $res;
                @endphp
            @endforeach
            <h5><strong>{{ $result }}</strong> Rs</h5>
            @auth
                <a href="{{ route('user_checkout') }}">Go To Checkout</a>
            @endauth
            @guest
                <a href="{{ route('user_login') }}">Before Goto Checkout page login your self</a>
            @endguest
        @endif
    </div> --}}
    <section class="sub-bnr" style="background-image: url({{ asset('client_assets/images/cart-bg.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
                <h4>SHOPPING CART</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="padding-top-100 padding-bottom-100 pages-in chart-page">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart text-center">
                    <div class="cart-head">
                        <ul class="row">
                            <!-- PRODUCTS -->
                            <li class="col-sm-2 text-left">
                                <h6>PRODUCTS</h6>
                            </li>
                            <!-- NAME -->
                            <li class="col-sm-4 text-left">
                                <h6>NAME</h6>
                            </li>

                            <!-- PRICE -->
                            <li class="col-sm-2">
                                <h6>PRICE</h6>
                            </li>
                            <li class="col-sm-1"> </li>
                        </ul>
                    </div>
                    @if ($carts->count())
                        @foreach ($carts as $cart)
                            <!-- Cart Details -->
                            <ul class="row cart-details">
                                <li class="col-sm-6">
                                    <div class="media">
                                        <!-- Media Image -->
                                        <div class="media-left media-middle"> <a class="item-img"> <img class="media-object"
                                                    style="height: 150px; width:150px"
                                                    src="{{ asset($cart->product_img) }}" alt=""> </a> </div>

                                        <!-- Item Name -->
                                        <div class="media-body">
                                            <div class="position-center-center">
                                                <h5>{{ $cart->product_name }}</h5>
                                                <p>{{ $cart->product_catogery }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- PRICE -->
                                <li class="col-sm-2">
                                    <div class="position-center-center"> <span
                                            class="price"><small>$</small>{{ $cart->product_price }}</span>
                                    </div>
                                </li>


                                <!-- REMOVE -->
                                <li class="col-sm-1">
                                    <div class="position-center-center"> <a
                                            href="{{ route('user_remove_cart', ['id' => $cart->id]) }}"><i
                                                class="icon-close"></i></a> </div>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!--======= PAGES INNER =========-->
        <section class="padding-top-100 padding-bottom-100 light-gray-bg shopping-cart small-cart">
            <div class="container">

                <!-- SHOPPING INFORMATION -->
                <div class="cart-ship-info margin-top-0">
                    <div class="row">

                        <!-- DISCOUNT CODE -->
                        <div class="col-sm-7">
                            @if ($carts)
                                {{-- Total Price: --}}
                                @php
                                    $result = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                    @php
                                        $res = (int) $cart->product_price;
                                        $result = $result + $res;
                                    @endphp
                                @endforeach
                                {{-- <h5><strong>{{ $result }}</strong> Rs</h5> --}}
                            
                            <h6>Product Info</h6>
                            <div class="coupn-btn">
                                <a href="{{ route('user_mystore') }}" class="btn">continue
                                    shopping</a>
                                <a href="{{ route('user_checkout') }}" class="btn">Checkout</a>
                            </div>
                        </div>

                        <!-- SUB TOTAL -->
                        <div class="col-sm-5">
                            <h6>grand total</h6>
                            <div class="grand-total">
                                <div class="order-detail">
                                    @foreach ($carts as $item)
                                    <p>{{$item->product_name}} <span>${{$item->product_price}} </span></p>
                                    @endforeach
                                    
                                    
                                    <!-- SUB TOTAL -->
                                    <p class="all-total">TOTAL COST <span> ${{ $result }}</span></p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endsection
