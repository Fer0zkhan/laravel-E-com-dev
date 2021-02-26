@extends('user.layout.layout')

@section('content')
    {{-- <div>
        <div class="container mt-5">
            <h1>Welcome to Store</h1>
            <table class="table">
                <thead>
                <tbody>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Sale Price</th>
                        <th scope="col">Product Discription</th>
                        <th scope="col">Product image</th>
                        <th scope="col">Add to cart</th>
                    </tr>
                    </thead>
                    @if ($products->count())
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->product_name }}</th>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_sale_price }}</td>
                                <td>{{ $product->product_discription }}</td>
                                <td><img height="30px" width="30px" src="{{ asset($product->product_img) }}" alt=""></td>
                                <td><a class="btn btn-info" href="{{ route('user_str_cart', ['id' => $product->id]) }}"
                                        role="button">Add To Cart</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div> --}}
    <section class="sub-bnr" style="background-image: url({{ asset('client_assets/images/store-bg-2.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
                <h4>MY STORE</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
                <p>
                    @if (session('status'))
                        <h4 style="color: white; font-weight: 300">{{ session('status') }}</h4>
                    @endif
                </p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!-- Products -->
        <section class="shop-page padding-top-100 padding-bottom-100">
            <div class="container">
                <div class="row">

                    <!-- Shop SideBar -->
                    <div class="col-sm-3">
                        <div class="shop-sidebar">

                            <!-- Category -->
                            <h5 class="shop-tittle margin-bottom-30">category</h5>
                            <ul class="shop-cate">
                                <li><a href="{{ route('product_catogery', ['id' => 'all']) }}"> All Catogeries</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Mens']) }}"> Mens</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Womens']) }}"> Womens</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Children']) }}"> Childrens</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Shirt']) }}"> Shirt</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'tshirt']) }}"> T Shirt</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Pant']) }}"> Pants</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Jacket']) }}"> Jackets</a></li>
                                <li><a href="{{ route('product_catogery', ['id' => 'Watch']) }}"> Watches</a></li>
                            </ul>




                            <!-- SIDE BACR BANER -->
                            <div class="side-bnr margin-top-50"> <img class="img-responsive"
                                    src="{{ asset('client_assets/images/bnr.jpg') }}" alt="">
                                <div class="position-center-center"> <span class="price"
                                        style="color: #fff;"><small>$</small>299</span>
                                    <div class="bnr-text">look
                                        hot
                                        with
                                        style</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Content -->
                    <div class="col-sm-9">

                    </div>

                    <!-- Popular Item Slide -->
                    <div class="papular-block row">

                        @if ($products->count())
                            @foreach ($products as $product)
                                @if ($product->product_action == 'active')
                                    <!-- Item -->
                                    <div class="col-md-4">
                                        <div class="item">
                                            <!-- Item img -->
                                            <div class="item-img" style="height: 452px; width:380px"> <img
                                                    style="height: 100%" class="img-1"
                                                    src="{{ asset($product->product_img) }}" alt="">
                                                <img class="img-2" style="height: 100%; width:100%"
                                                    src="{{ asset($product->product_img) }}" alt="">
                                                <!-- Overlay -->
                                                <div class="overlay">
                                                    <div class="position-center-center">
                                                        <div class="inn"><a href="{{ asset($product->product_img) }}"
                                                                data-lighter><i class="icon-magnifier"></i></a> <a
                                                                href="{{ route('user_pro_detail', ['id' => $product->id]) }}"><i
                                                                    class="icon-eye"></i></a> <a
                                                                href="{{ route('user_str_cart', ['id' => $product->id]) }}"><i
                                                                    class="icon-basket"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Item Name -->
                                            <div class="item-name"> <a href="#.">{{ $product->product_name }}</a>
                                                <p>Catogery : {{ $product->product_catogery }}</p>
                                            </div>
                                            <!-- Price -->
                                            <span class="price"><small>$</small>{{ $product->product_price }}</span>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <h3>Not Found</h3>
                        @endif
                    </div>

                    <!-- Pagination -->
                    {{-- <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul> --}}
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
