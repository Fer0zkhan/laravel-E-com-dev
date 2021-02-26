@extends('user.layout.layout')

@section('content')
    {{-- <div class="container mt-5">
        @if (session('status'))
            <h5>{{ session('status') }}</h5>

        @endif
        <form action="{{ route('user_login') }}" method="post">
            @csrf
            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password">
                @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label>Remember Me: </label>
                <input type="checkbox" name="remember">
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
        @if (session('status'))
            <span>{{ session('status') }}</span>
        @endif
    </div> --}}
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" style="background-image: url({{ asset('client_assets/images/login-bg.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
                <h4>LOGIN YOURSELF HERE</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-7">
                                <h6>LOGIN YOUR ACCOUNT</h6>
                                <form action="{{ route('user_login') }}" method="post">
                                    @csrf
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-12">
                                            <label> Email :
                                                <input type="email" name="email" value="{{ old('email') }}"
                                                    placeholder="">
                                                @error('email')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>

                                        </li>
                                        <!-- LAST NAME -->
                                        <li class="col-md-12">
                                            <label> PASSWORD :
                                                <input name="password" type="password" value="" placeholder="">
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>

                                        <!-- LOGIN -->
                                        <li class="col-md-4">
                                            <button type="submit" class="btn">LOGIN</button>
                                        </li>

                                        <!-- CREATE AN ACCOUNT -->
                                        <li class="col-md-4">
                                            <div class="checkbox margin-0 margin-top-20">
                                                <input id="checkbox1" name="remember" class="styled" type="checkbox">
                                                <label for="checkbox1"> Stay me Login</label>
                                            </div>
                                        </li>

                                    </ul>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
