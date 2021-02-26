@extends('user.layout.layout')

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" style="background-image: url({{asset('client_assets/images/register.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px; border-radius: 40px; border: none;">
                <h4>REGISTER YOURSELF HERE</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info register">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-12">
                                <h6>REGISTER</h6>
                                <form action="{{ route('user_register') }}" method="post">
                                    @csrf
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-6">
                                            <label> *NAME :
                                                <input required name="name" type="text" value="{{ old('name') }}"
                                                    placeholder="">
                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <!-- EMAIL ADDRESS -->
                                        <li class="col-md-6">
                                            <label> *EMAIL ADDRESS :
                                                <input required name="email" type="text" value="{{ old('email') }}"
                                                    placeholder="">
                                                @error('email')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>


                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD :
                                                <input required name="password" type="password" value="" placeholder="">
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *Confirm Password
                                                <input required name="password_confirmation" type="password" value=""
                                                    placeholder="">
                                            </label>
                                        </li>
                                        <!-- PHONE -->

                                        <li class="col-md-6">
                                            <label> *PHONE : 
                                                <input required name="phone" type="text" value="{{old('phone')}}" placeholder="">
                                                @error('phone')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label> *CITY : 
                                                <input required name="city" type="text" value="{{old('city')}}" placeholder="">
                                                @error('city')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <button type="submit" class="btn">REGISTER NOW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About -->
        <section class="small-about padding-top-150 padding-bottom-150">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>about PAVSHOP</h4>
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere
                        odio luctus non. Nulla lacinia,
                        eros vel fermentum consectetur, risus purus tempc, et iaculis odio dolor in ex. </p>
                </div>

                <!-- Social Icons -->
                <ul class="social_icons">
                    <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                    <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                    <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                    <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                    <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                </ul>
            </div>
        </section>

        <!-- News Letter -->
        <section class="news-letter padding-top-150 padding-bottom-150">
            <div class="container">
                <div class="heading light-head text-center margin-bottom-30">
                    <h4>NEWSLETTER</h4>
                    <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu
                        posuere odi </span>
                </div>
                <form>
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">SEND ME</button>
                </form>
            </div>
        </section>
    </div>
@endsection
