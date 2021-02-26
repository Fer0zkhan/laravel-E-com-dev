@extends('user.layout.layout');

@section('content')
    <div id="content">
        <!--======= PAGES INNER =========-->

        <section class="padding-top-100 padding-bottom-100">
            <div class="container">
                <!-- SHOP DETAIL -->
                <div class="shop-detail">
                    @if ($products)
                    <div class="row">
                        <!-- Popular Images Slider -->
                        <div class="col-md-7">
                            <!-- Images Slider -->
                            <div class="images-slider">
                                <ul class="slides">
                                    <li style="height: 750px; width: 600px;" data-thumb="{{ asset($products->product_img) }}">
                                        <img style="height: 100%; width: 100%" class="img-responsive" src="{{ asset($products->product_img) }}" alt="" />
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- COntent -->
                        <div class="col-md-5">
                            <h4>{{$products->product_name}}</h4>
                            <span class="price"><small>$</small>{{$products->product_price}}</span>

                            <!-- Sale Tags -->
                            <ul class="item-owner">
                                <li>Catogery :<span> {{$products->product_catogery}}</span></li>
                                <li>Sub Catogery :<span> {{$products->product_sub_catogery}}</span></li>
                            </ul>

                            <!-- Item Detail -->
                            <p>
                                {{$products->product_discription}}
                            </p>

                            <!-- Short By -->
                            <div class="some-info">
                                <ul class="row margin-top-30">
                                    {{-- <li class="col-xs-4">
                                        <div class="quinty">
                                            <!-- QTY -->
                                            <select class="selectpicker">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </li> --}}

                                    <!-- ADD TO CART -->
                                    <li class="col-xs-6">
                                        <a href="{{ route('user_str_cart', ['id' => $products->id]) }}" class="btn">ADD TO CART</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!--======= PRODUCT DESCRIPTION =========-->

        </section>

        
    </div>
@endsection
