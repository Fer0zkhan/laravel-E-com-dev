@extends('user.layout.layout')

@section('content')
    {{-- <div class="container mt-5">
        Welcome to Checkout Page
        @if ($carts->count())
            <form action="{{ route('user_checkout') }}" method="post" class="mt-4">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ auth()->user()->name }}">
                        @error('name')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ auth()->user()->email }}">
                        @error('email')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Phone</label>
                        <input type="text" name="phone" value="{{ auth()->user()->phone }}">
                        @error('phone')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Address</label>
                        <textarea name="address" cols="30" rows="10">{{ old('address') }}</textarea>
                        @error('address')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">State</label>
                        <input type="text" name="state" value="{{ old('state') }}">
                        @error('state')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">City</label>
                        <input type="text" name="city" value="{{ old('city') }}">
                        @error('city')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="">Zip Code</label>
                        <input type="number" name="zip_code" value="{{ old('zip_code') }}">
                        @error('zip_code')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mt-2">
                        <Button type="submit" class="btn btn-primary">Checkout</Button>
                    </div>
                </div>
            </form>
        @else
            <br>
            <a href="{{ route('user_mystore') }}">Buy Some product to Checkout</a>
        @endif
    </div> --}}
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" style="background-image: url({{ asset('client_assets/images/checkout-bg.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
                <h4>CHECKOUT</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        @if ($carts->count())
            <section class="chart-page padding-top-100 padding-bottom-100">
                <div class="container">

                    <!-- Payments Steps -->
                    <div class="shopping-cart">

                        <!-- SHOPPING INFORMATION -->
                        <div class="cart-ship-info">
                            <div class="row">

                                <!-- ESTIMATE SHIPPING & TAX -->
                                <div class="col-sm-7">

                                    <!-- SHIPPING info -->
                                    <h6 class="margin-top-50">SHIPPING info</h6>
                                    <form action="{{ route('user_checkout') }}" method="post">
                                        @csrf
                                        <ul class="row">

                                            <!-- Name -->
                                            <li class="col-md-6">
                                                <label> *NAME :
                                                    <input required type="text" name="name"
                                                        value="{{ auth()->user()->name }}" placeholder="">
                                                    @error('name')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>
                                            <!-- LAST NAME -->
                                            <li class="col-md-6">
                                                <label> *Email :
                                                    <input required type="text" name="email"
                                                        value="{{ auth()->user()->email }}" placeholder="">
                                                    @error('email')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>
                                            <li class="col-md-6">
                                                <!-- COMPANY NAME -->
                                                <label>Phone :
                                                    <input required type="text" name="phone"
                                                        value="{{ auth()->user()->phone }}" placeholder="">
                                                    @error('phone')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>
                                            <li class="col-md-6">
                                                <!-- ADDRESS -->
                                                <label>*ADDRESS :
                                                    <input required type="text" name="address"
                                                        value="{{ old('address') }}" placeholder="">
                                                    @error('address')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>
                                            <!-- COUNTRY -->
                                            <li class="col-md-6">
                                                <label> *STATE :
                                                    <input required type="text" name="state" value="{{ old('state') }}"
                                                        placeholder="">
                                                    @error('state')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>
                                            <!-- TOWN/CITY -->
                                            <li class="col-md-6">
                                                <label>*CITY :
                                                    <input required type="text" name="city" value="{{ old('city') }}"
                                                        placeholder="">
                                                    @error('city')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>

                                            <!-- COUNTRY -->
                                            <li class="col-md-6">
                                                <label> *ZIP CODE :
                                                    <input required type="text" name="zip_code"
                                                        value="{{ old('zip_code') }}" placeholder="">
                                                    @error('zip_code')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </label>
                                            </li>


                                            <!-- PHONE -->
                                            <li class="col-md-6">
                                                <button type="submit" class="btn">Place Order</button>
                                            </li>
                                            <li class="col-md-6">
                                                <br>
                                                <a style="color: white;" href="{{ route('user_mystore') }}"
                                                    class="btn">Back To Shopping</a>
                                            </li>
                                        </ul>
                                    </form>
                                </div>

                                <!-- SUB TOTAL -->
                                <div class="col-sm-5">
                                    <h6>YOUR ORDER</h6>
                                    <div class="order-place">
                                        <div class="order-detail">
                                            @if ($carts)
                                                @foreach ($carts as $cart)
                                                    <p>{{ $cart->product_name }} <span>${{ $cart->product_price }}
                                                        </span>
                                                    </p>

                                                @endforeach
                                            @endif

                                            <!-- SUB TOTAL -->
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
                                                <p class="all-total">TOTAL COST <span> ${{ $result }}</span></p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        @else
            <section class="chart-page padding-top-100 padding-bottom-100">
                <div class="container">

                    <!-- Payments Steps -->
                    <div class="shopping-cart">

                        <!-- SHOPPING INFORMATION -->
                        <div class="cart-ship-info">
                            <div class="row">

                                <!-- ESTIMATE SHIPPING & TAX -->
                                <div class="col-sm-7">

                                    <!-- SHIPPING info -->
                                    <h6 class="margin-top-50">SHIPPING info</h6>
                                    <a href="{{ route('user_mystore') }}" class="btn">Buy Some Product For Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection
