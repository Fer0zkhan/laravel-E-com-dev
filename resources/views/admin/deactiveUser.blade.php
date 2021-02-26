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
                            <h2>Deactive User</h2>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <div class="table-responsive">
                                <table class="table card-table table-responsive" id="table_id" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th class="d-none d-md-table-cell">Email</th>
                                            <th class="d-none d-md-table-cell">Phone</th>
                                            <th class="d-none d-md-table-cell">City</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count())
                                            @foreach ($users as $user)
                                                @if ($user->status == 'deactive')
                                                    <tr>
                                                        <td>{{ $user->id }}</td>
                                                        <td>
                                                            <a class="text-dark">{{ $user->name }}</a>
                                                        </td>
                                                        <td class="d-none d-md-table-cell">{{ $user->email }}</td>
                                                        <td class="d-none d-md-table-cell">{{ $user->phone }}</td>
                                                        <td class="d-none d-md-table-cell">{{ $user->city }}</td>
                                                        <td>
                                                            @if ($user->hasRole('user'))
                                                                <span class="badge badge-warning">
                                                                    user
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-secondary">
                                                                {{ $user->status }}
                                                            </span>
                                                        </td>
                                                        <td class="text-right">
                                                            @if ($user->hasRole('user'))
                                                                <div class="dropdown show d-inline-block widget-dropdown">
                                                                    <a class="dropdown-toggle icon-burger-mini" href="#"
                                                                        role="button" id="dropdown-recent-order4"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false" data-display="static"></a>
                                                                    <ul class="dropdown-menu dropdown-menu-right"
                                                                        aria-labelledby="dropdown-recent-order4">
                                                                        <li class="dropdown-item">
                                                                            <a href="{{ route('admin_user_active_user', ['id' => $user->id]) }}">active</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @else
                                            no
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
