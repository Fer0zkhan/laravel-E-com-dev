@extends('admin.layout.layout')

@section('main_content')

    <div class="content-wrapper" id="printableArea">


        <div class="content">
            <div class="invoice-wrapper rounded border bg-white py-5 px-3 px-md-4 px-lg-5">
                <div class="d-flex justify-content-between">

                    <h2 class="text-dark font-weight-medium">Generate Invoice</h2>
                </div>
                <div class="row pt-5">
                    <div class="col-md-6">
                        <form action="{{ route('admin_gen_invoice') }}" method="post">
                            @csrf
                            <div class="form-row">
                                @if (session('status'))
                                    <div class="col-md-12 alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session('status') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="col-md-12">
                                    <label class="text-dark font-weight-medium" for="">Enter Your Order ID</label>
                                    <div class="input-group mb-2">
                                        <input type="text" name="order_id" class="form-control" placeholder="Enter Order Id"
                                            aria-label="" required>
                                        @error('order_id')
                                            <div><span style="color: red">{{ $message }}</span></div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Genarate Invoice</button>
                                </div>
                            </div>
                        </form>
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
