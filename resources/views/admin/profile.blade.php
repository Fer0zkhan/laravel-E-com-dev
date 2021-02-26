@extends('admin.layout.layout')

@section('main_content')

    <div class="content-wrapper">
        <div class="content">
            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0">
                                {{-- <div class="card-img mx-auto rounded-circle">
                                    <img src="{{ asset('admin_assets/assets/img/user/u6.jpg') }}" alt="user image">
                                </div> --}}
                                <div class="card-body">
                                    <h4 class="py-2 text-dark">{{Auth::user()->name}}</h4>
                                    <p>{{Auth::user()->email}}</p>
                                </div>
                            </div>

                            <hr class="w-100">
                            <div class="contact-info pt-4">
                                <h5 class="text-dark mb-1">Contact Information</h5>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                                <p>{{Auth::user()->email}}</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                                <p>{{Auth::user()->phone}}</p>
                                <p class="text-dark font-weight-medium pt-4 mb-2">City</p>
                                <p>{{Auth::user()->city}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline"
                                        role="tab" aria-controls="timeline" aria-selected="true">Edit Profile</a>
                                </li>
                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12">
                                        <!-- Recent Order Table -->
                                        <div class="card card-default">
                                            <div class="card-header card-header-border-bottom">
                                                <h2>Edit Profile</h2>
                                            </div>
                                            <div class="card-body">
                                            <form action="{{ route('update_admin', ['id'=> Auth::user()->id]) }}" method="post">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer01">Name</label>
                                                            <input type="text" name="name" class="form-control" id="validationServer01"
                                                                placeholder="Name" value="{{Auth::user()->name}}" required>
                                                            @error('name')
                                                                <div class="sm">
                                                                    <span style="color: red">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">Email</label>
                                                            <input type="email" name="email" class="form-control" id="validationServer02"
                                                                placeholder="Email" value="{{Auth::user()->email}}" required>
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
                                                            <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control" id="validationServer02"
                                                                placeholder="Enter Phone">
                                                            @error('phone')
                                                                <div class="sm">
                                                                    <span style="color: red">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label for="validationServer02">City</label>
                                                            <input type="text" name="city" value="{{Auth::user()->city}}" class="form-control" id="validationServer02"
                                                                placeholder="Enter City">
                                                            @error('city')
                                                                <div class="sm">
                                                                    <span style="color: red">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                    
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update Admin</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
