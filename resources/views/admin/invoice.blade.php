@extends('admin.layout.layout')

@section('main_content')

    <div class="content-wrapper" >


        <div class="content" id="printableArea">
            <div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5">
                <div class="d-flex justify-content-between">
                    @if ($orders)
                        <h2 class="text-dark font-weight-medium">Order ID #{{ $orders->id }}</h2>
                    @endif

                </div>
                <div class="row pt-5">
                    @if ($users)
                        @foreach ($users as $user)
                            @if ($user->id == $orders->user_id)
                                <div class="col-md-6">
                                    <p class="text-dark mb-2">Buyer Details</p>
                                    <address>
                                        {{ $user->name }}
                                        <br> Address: {{ $orders->address }}
                                        <br> Email: {{ $user->email }}
                                        <br> Phone: {{ $user->phone }}
                                        <br> State: {{ $orders->state }}
                                        <br> City: {{ $orders->city }}
                                        <br> Zip Code: {{ $orders->zip_code }}
                                    </address>
                                </div>
                            @endif
                        @endforeach
                    @endif


                </div>
                <h2 class="mt-4">Products Details</h2>
                <table class="table mt-3 table-striped table-responsive table-responsive-large" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Product Catogery</th>
                            <th>Product Sub Catogery</th>
                            <th>Product Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $result = 0;
                        @endphp
                        @if ($products->count())
                            @foreach ($arr as $key)
                                @foreach ($products as $product)
                                    @if ($key == $product->id)
                                        @php
                                            $res = (int) $product->product_price;
                                            $result = $result + $res;
                                        @endphp
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_catogery }}</td>
                                            <td>{{ $product->product_sub_catogery }}</td>
                                            <td>{{ $product->product_price }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach

                        @endif
                    </tbody>
                </table>
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-xl-4 col-xl-3 ml-sm-auto">
                        <ul class="list-unstyled mt-4">
                            <li class="pb-3 text-dark">Total
                                <span class="d-inline-block float-right">{{ $result }} $</span>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content:center; aline-item:center; margin:10px">
            <button style="width: 20%" onclick="printDiv('printableArea');" class="btn btn-block mt-2 btn-lg btn-primary btn-pill">
                <i class="mdi mdi-content-save"></i> Generate</button>

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

    </div>


@endsection
