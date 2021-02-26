@extends('user.layout.layout')

@section('content')
<section class="sub-bnr" style="background-image: url({{ asset('client_assets/images/checkout-bg.jpg') }});"
data-stellar-background-ratio="0.5">
<div class="position-center-center">
    <div class="container"
        style="background-color: rgba(0,0,0,.6) !important; padding: 10px;border-radius: 40px; border: none;">
        <h4>HI! {{ Auth::user()->name }} your order is successfully placed</h4>
        <p style="color: #fff; font-family: sans-serif;"><a class="btn" href="{{ route('user_mystore') }}">Go back to store</a></p>
    </div>
</div>
</section>
@endsection
