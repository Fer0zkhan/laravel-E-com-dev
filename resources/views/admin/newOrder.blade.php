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
                            <h2>Recent New Orders</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                <table class="table card-table table-responsive" id="table_id" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>User Name</th>
                                            <th class="d-none d-md-table-cell">User ID</th>
                                            {{-- <th class="d-none d-md-table-cell">Products ID</th> --}}
                                            <th class="d-none d-md-table-cell">User Phone</th>
                                            <th class="d-none d-md-table-cell">Order Date</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders->count())
                                            @foreach ($orders as $order)
                                                @if ($order->status == 'new')
                                                    <tr>
                                                        <td class="d-none d-md-table-cell">{{ $order->id }}</td>
                                                        <td>
                                                            <a class="text-dark" href=""> {{ $order->name }}</a>
                                                        </td>
                                                        <td class="d-none d-md-table-cell">{{ $order->user_id }}</td>
                                                        {{-- <td class="d-none d-md-table-cell">{{ $order->name }}</td> --}}
                                                        <td class="d-none d-md-table-cell">{{ $order->email }}</td>
                                                        <td class="d-none d-md-table-cell">{{ $order->created_at }}</td>
                                                        <td>
                                                            <span class="badge badge-warning">{{ $order->status }}</span>
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
                                                                    <a href="{{ route('admin_new_order_pending', ['id' => $order->id]) }}">Add To Pending List</a>
                                                                    </li>
                                                                    <li class="dropdown-item">
                                                                        <a href="{{ route('admin_remove_order_remove', ['id' => $order->id]) }}">Remove</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
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
