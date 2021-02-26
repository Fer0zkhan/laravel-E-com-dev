@extends('admin.layout.layout')

@section('main_content')

    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-primary border">
                        <div class="card-block">
                            <i class="mdi mdi-account-outline mr-4 text-white"></i>
                            @if ($users->count())
                                <h4 class="text-white my-2">{{$users->count()}}</h4>
                            @endif
                            <p>Total No Of Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-warning border">
                        <div class="card-block">
                            <i class="mdi mdi-cart-outline mr-4 text-white"></i>
                            @if ($orders)
                            <h4 class="text-white my-2">{{$orders->count()}}</h4>
                            @endif
                            <p>Total Order Placed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-danger border">
                        <div class="card-block">
                            <i class="mdi mdi-book  mr-4 text-white"></i>
                            @if ($products)
                            <h4 class="text-white my-2">{{$products->count()}}</h4>
                            @endif
                            
                            <p>Total Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card widget-block p-4 rounded bg-success border">
                        <div class="card-block">
                            <i class="mdi mdi-diamond t mr-4 text-white"></i>
                            @if ($orders)
                            @php
                                $res = 0;
                            @endphp
                            @foreach ($orders as $order)
                                @if ($order->status == 'complete')
                                    @php
                                        $res += 1;
                                    @endphp
                                @endif
                            @endforeach
                            @endif       
                            <h4 class="text-white my-2">{{$res}}</h4>                     
                            <p>Complete Orders</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle mr-4 bg-primary">
                            <i class="mdi mdi-account-outline text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            @if ($users)
                            @php
                                $res = 0;
                            @endphp
                            @foreach ($users as $user)
                                @if ($user->status == 'deactive')
                                    @php
                                        $res += 1;
                                    @endphp
                                @endif
                            @endforeach
                            @endif       
                            <h4 class="text-primary mb-2">{{$res}}</h4>
                            <p>Deactive Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle bg-warning mr-4">
                            <i class="mdi mdi-cart-outline text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            @if ($orders)
                            @php
                                $res = 0;
                            @endphp
                            @foreach ($orders as $order)
                                @if ($order->status == 'pending')
                                    @php
                                        $res += 1;
                                    @endphp
                                @endif
                            @endforeach
                            @endif       
                            <h4 class="text-primary mb-2">{{$res}}</h4>
                            <p>Order Pending</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon rounded-circle mr-4 bg-danger">
                            <i class="mdi mdi-book text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            @if ($products)
                            @php
                                $res = 0;
                            @endphp
                            @foreach ($products as $product)
                                @if ($product->product_action == 'deactive')
                                    @php
                                        $res += 1;
                                    @endphp
                                @endif
                            @endforeach
                            @endif       
                            <h4 class="text-primary mb-2">{{$res}}</h4>
                            <p>Deactive Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="media widget-media p-4 bg-white border">
                        <div class="icon bg-success rounded-circle mr-4">
                            <i class="mdi mdi-delete text-white "></i>
                        </div>
                        <div class="media-body align-self-center">
                            @if ($orders)
                            @php
                                $res = 0;
                            @endphp
                            @foreach ($orders as $order)
                                @if ($order->status == 'remove')
                                    @php
                                        $res += 1;
                                    @endphp
                                @endif
                            @endforeach
                            @endif  
                            <h4 class="text-primary mb-2">{{$res}}</h4>
                            <p>Remove Orders</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                &copy; <span id="copy-year">2019</span> Copyright Admin Dashboard
            </p>
        </div>
        <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;

        </script>
    </footer>

@endsection
