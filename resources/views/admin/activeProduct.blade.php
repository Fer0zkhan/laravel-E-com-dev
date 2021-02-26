@extends('admin.layout.layout')

@section('main_content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row">
                <div class="col-12">
                    <!-- Recent Order Table -->
                    <div class="card card-table-border-none" id="recent-orders">
                        <div class="card-header justify-content-between">
                            <h2>Active Products</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                <table class="table card-table table-responsive" id="table_id" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th class="d-none d-md-table-cell">Product Price</th>
                                            <th class="d-none d-md-table-cell">Category</th>
                                            <th class="d-none d-md-table-cell">Image</th>
                                            <th class="d-none d-md-table-cell">Image Url</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($products->count())
                                            @foreach ($products as $product)
                                                @if ($product->product_action == 'active')
                                                    <tr>
                                                        <td>{{ $product->id }}</td>
                                                        <td>
                                                            <a class="text-dark">{{ $product->product_name }}</a>
                                                        </td>
                                                        <td class="d-none d-md-table-cell">{{ $product->product_price }}
                                                        </td>
                                                        <td class="d-none d-md-table-cell">
                                                            {{ $product->product_catogery }}
                                                        </td>
                                                        <td class="d-none d-md-table-cell">
                                                            <img height="40px" width="40px"
                                                                src="{{ asset($product->product_img) }}"
                                                                class="user-image" alt="Product image" />
                                                        </td>
                                                        <td class="d-none d-md-table-cell">
                                                            {{ $product->product_img }}
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge badge-warning">{{ $product->product_action }}</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                                <a class="dropdown-toggle icon-burger-mini" href="#"
                                                                    role="button" id="dropdown-recent-order4"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-display="static"></a>
                                                                <ul class="dropdown-menu dropdown-menu-right"
                                                                    aria-labelledby="dropdown-recent-order4">
                                                                    <li class="dropdown-item">
                                                                        <a href={{ route('admin_edit_product', ['id' => $product->id]) }}>Edit</a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="{{ route('admin_e_deactive_product', ['id' => $product->id]) }}">Deactive</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif

                                            @endforeach
                                        @else
                                            No data Here
                                        @endif

                                    </tbody>
                                </table>
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

    </div>
@endsection
