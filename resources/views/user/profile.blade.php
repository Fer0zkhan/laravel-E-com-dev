@extends('user.layout.layout')

@section('content')
    <!--======= SUB BANNER =========-->
    <section class="sub-bnr" style="background-image: url({{asset('client_assets/images/profile-bg.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="position-center-center">
            <div class="container"
                style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
                <h4>HI HERE IS MINE PROFILE</h4>
                <p style="color: #fff; font-family: sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Donec faucibus maximus vehicula.
                    Sed feugiat, tellus vel tristique posuere, diam</p>
            </div>
        </div>
    </section>
    <div id="content">

        <!--======= PAGES INNER =========-->
        <section class="chart-page padding-top-100 padding-bottom-100">
            <div class="container">

                <!-- Payments Steps -->
                <div class="shopping-cart">

                    <!-- SHOPPING INFORMATION -->
                    <div class="cart-ship-info register">
                        <div class="row">

                            <!-- ESTIMATE SHIPPING & TAX -->
                            <div class="col-sm-12">
                                <h6>Profile Details</h6>
                                <form action="{{ route('edit_user', ['id' => Auth::user()->id]) }}" method="post">
                                    @csrf
                                    <ul class="row">

                                        <!-- Name -->
                                        <li class="col-md-6">
                                            <label> *NAME :
                                                <input required name="name" type="text" value="{{ Auth::user()->name }}"
                                                    placeholder="">
                                                @error('name')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <!-- EMAIL ADDRESS -->
                                        <li class="col-md-6">
                                            <label> *EMAIL ADDRESS :
                                                <input required name="email" type="text" value="{{ Auth::user()->email }}"
                                                    placeholder="">
                                                @error('email')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>


                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *PASSWORD :
                                                <input required name="password" type="password" value="" placeholder="">
                                                @error('password')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>

                                        <!-- LAST NAME -->
                                        <li class="col-md-6">
                                            <label> *Confirm Password
                                                <input required name="password_confirmation" type="password" value=""
                                                    placeholder="">
                                            </label>
                                        </li>
                                        <!-- PHONE -->

                                        <li class="col-md-6">
                                            <label> *PHONE :
                                                <input required name="phone" type="text" value="{{ Auth::user()->phone }}"
                                                    placeholder="">
                                                @error('phone')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <li class="col-md-6">
                                            <label> *CITY :
                                                <input required name="city" type="text" value="{{ Auth::user()->city }}"
                                                    placeholder="">
                                                @error('city')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </li>
                                        <!-- PHONE -->
                                        <li class="col-md-6">
                                            <button type="submit" class="btn">EDIT NOW</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
