@extends('admin.layout.layout')

@section('main_content')
    @if (session('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="content-wrapper">
        <div class="content">
            <!-- Top Statistics -->
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <!-- Recent Order Table -->
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Add New Admin</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin_register') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Name</label>
                                        <input type="text" name="name" class="form-control" id="validationServer01"
                                            placeholder="Name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Email</label>
                                        <input type="email" name="email" class="form-control" id="validationServer02"
                                            placeholder="Email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Password</label>
                                        <input type="password" name="password" class="form-control" id="validationServer02"
                                            placeholder="Password" required>
                                        @error('password')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer02">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                            id="validationServer02" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Phone</label>
                                        <input type="text" name="phone" class="form-control" id="validationServer02"
                                            placeholder="Enter Phone">
                                        @error('phone')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">City</label>
                                        <input type="text" name="city" class="form-control" id="validationServer02"
                                            placeholder="Enter City">
                                        @error('city')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Add Admin</button>
                            </form>
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
