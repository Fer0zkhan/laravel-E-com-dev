@extends('user.layout.layout')

@section('content')
    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
        <!-- SLIDE Start -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('client_assets/images/slide-bg-2-1.jpg') }}" alt="slider"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                       
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- New Arrival -->
        <section class="padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>new arrival</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</span>
                </div>
            </div>

            <!-- New Arrival -->
            <div class="arrival-block">

                <!-- Item -->
                <div class="item" style="height:315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-1.jpg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-1.jpg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-1.jpg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">Display Images</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height:315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-2.jpg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-2.jpg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-2.jpg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">MINIMALIST WOO TOYS</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height: 315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-3.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-3.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-3.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">Concrete Shirt Kit</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height: 315px; width: 315px; overflow: hidden;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-4.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-4.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-4.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">PARAGON JACKET</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height: 315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-5.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-5.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"><a href="{{ asset('client_assets/images/item-5.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">Womens Jacket</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height:315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-7.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-7.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-7.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">ECO FRIENDLY Jackets</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height: 315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-6.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-6.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-6.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">GEOMETRY PANTS AND DESIGN</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>

                <!-- Item -->
                <div class="item" style="height: 315px; width: 315px;">
                    <!-- Images -->
                    <img class="img-1" src="{{ asset('client_assets/images/item-8.jpeg') }}" alt=""> <img class="img-2"
                        src="{{ asset('client_assets/images/item-8.jpeg') }}" alt="">
                    <!-- Overlay  -->
                    <div class="overlay">
                        <!-- Price -->
                        <span class="price"><small>$</small>299</span>
                        <div class="position-center-center"> <a href="{{ asset('client_assets/images/item-8.jpeg') }}"
                                data-lighter><i class="icon-magnifier"></i></a> </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"> <a href="#.">CERAMIC WATCHS VASE</a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Products -->
        <section class="padding-top-50 padding-bottom-150">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>popular products</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</span>
                </div>

                <!-- Popular Item Slide -->
                <div class="papular-block block-slide">

                    <!-- Item -->
                    @if ($products->count())
                        @foreach ($products as $product)
                            @if ($product->product_action == 'active')
                                <div class="item">
                                    <!-- Item img -->
                                    <div class="item-img" style="height: 352px; width:270px"> <img style="height:100%"  class="img-1" src="{{ asset($product->product_img) }}" alt=""> <img
                                            class="img-2" style="height:100%" src="{{ asset($product->product_img) }}" alt="">
                                        <!-- Overlay -->
                                        <div class="overlay">
                                            <div class="position-center-center">
                                                <div class="inn"><a href="{{ asset($product->product_img) }}" data-lighter><i
                                                            class="icon-magnifier"></i></a> <a href="{{ route('user_pro_detail', ['id' => $product->id]) }}"
                                                        data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
                                                            class="icon-eye"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item Name -->
                                    <div class="item-name"> <a href="#.">{{$product->product_name}}</a>
                                        <p>{{$product->product_catogery}}</p>
                                    </div>
                                    <!-- Price -->
                                    <span class="price"><small>$</small>{{ $product->product_price }}</span>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!-- Knowledge Share -->
        <section class="light-gray-bg padding-top-150 padding-bottom-150">
            <div class="container">

                <!-- Main Heading -->
                <div class="heading text-center">
                    <h4>knowledge share</h4>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                        Sed feugiat, tellus vel tristique posuere, diam</span>
                </div>
                <div class="knowledge-share">
                    <ul class="row">

                        <!-- Post 1 -->
                        <li class="col-md-6">
                            <div class="date"> <span>December</span> <span class="huge">27</span> </div>
                            <a href="#.">Donec commo is vulputate</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed
                                feugiat, tellus vel tristique posuere, diam</p>
                            <span>By <strong>Admin</strong></span>
                        </li>

                        <!-- Post 2 -->
                        <li class="col-md-6">
                            <div class="date"> <span>December</span> <span class="huge">09</span> </div>
                            <a href="#.">Donec commo is vulputate</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. Sed
                                feugiat, tellus vel tristique posuere, diam</p>
                            <span>By <strong>Admin</strong></span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="testimonial padding-top-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">

                        <!-- SLide -->
                        <div class="single-slide">

                            <!-- Slide -->
                            <div class="testi-in"> <i class="fa fa-quote-left"></i>
                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros
                                    vel fermentum consectetur, risus p</p>
                                <h5>Feroz Khan</h5>
                            </div>

                            <!-- Slide -->
                            <div class="testi-in"> <i class="fa fa-quote-left"></i>
                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros
                                    vel fermentum consectetur, risus p</p>
                                <h5>Feroz Khan</h5>
                            </div>

                            <!-- Slide -->
                            <div class="testi-in"> <i class="fa fa-quote-left"></i>
                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Sed ullamcorper sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros
                                    vel fermentum consectetur, risus p</p>
                                <h5>Feroz Khan</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Img -->
                    <div class="col-sm-6" style="height: 362px; width: 290px;"> <img class="img-responsive"
                            style="height: 90%;" src="{{ asset('client_assets/images/avat-2.jpg') }}" alt=""> </div>
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
