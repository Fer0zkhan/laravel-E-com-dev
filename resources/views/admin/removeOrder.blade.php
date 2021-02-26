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
                            <h2>Remove Orders</h2>
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($orders->count())
                                            @foreach ($orders as $order)
                                                @if ($order->status == 'remove')
                                                    <tr>
                                                        <td class="d-none d-md-table-cell">{{ $order->id }}</td>
                                                        <td>
                                                            <a class="text-dark" href=""> {{ $order->name }}</a>
                                                        </td>
                                                        <td class="d-none d-md-table-cell">{{ $order->user_id }}</td>
                                                        {{-- <td class="d-none d-md-table-cell">{{ $order->product_id }}</td> --}}
                                                        <td class="d-none d-md-table-cell">{{ $order->email }}</td>
                                                        <td class="d-none d-md-table-cell">{{ $order->created_at }}</td>
                                                        <td>
                                                            <span class="badge badge-danger">{{ $order->status }}</span>
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
