@extends('admin.layout.layout')

@section('main_content')
    {{-- @extends('admin.admin_views.header') --}}
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
                            <h2>Add New Product</h2>
                        </div>
                        <div class="card-body">
                            <form accept="{{ route('admin_add_product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Product Name</label>
                                        <input type="text" value="{{ old('product_name') }}" class="form-control"
                                            name="product_name" id="validationServer01" placeholder="Product Name" required>
                                        @error('product_name')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Product Price</label>
                                        <input type="number" value="{{ old('product_price') }}" name="product_price"
                                            class="form-control" id="validationServer02" placeholder="Product Price"
                                            required>
                                        @error('product_price')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer02">Sale Price If:</label>
                                        <input type="number" value="0" name="product_sale_price" class="form-control"
                                            id="validationServer02" placeholder="Product Price">
                                        @error('product_sale_price')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlSelect12">Product Categeries</label>
                                        <select class="form-control" name="product_catogery"
                                            id="exampleFormControlSelect12">
                                            <option value="">Select Option</option>
                                            <option value="Mens">Mens</option>
                                            <option value="Womens">Womens</option>
                                            <option value="Children">Children</option>
                                        </select>
                                        @error('product_catogery')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlSelect12">Product Sub Categeries</label>
                                        <select class="form-control" name="product_sub_catogery"
                                            id="exampleFormControlSelect12">
                                            <option value="">Select Option</option>
                                            <option value="Shirt">Shirt</option>
                                            <option value="Pant">Pant</option>
                                            <option value="Watch">Watch</option>
                                            <option value="Jacket">Jacket</option>
                                            <option value="tshirt">T-Shirt</option>
                                            <option value="Watch">Watch</option>
                                        </select>
                                        @error('product_sub_catogery')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlTextarea1">Product Discription</label>
                                        <textarea class="form-control" value="{{ old('product_discription') }}"
                                            name="product_discription" id="exampleFormControlTextarea1" rows="3"
                                            required></textarea>
                                        @error('product_discription')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="exampleFormControlFile1">Product Image One</label>
                                        <input type="file" name="product_img" value="{{ old('product_img') }}"
                                            class="form-control-file" required id="exampleFormControlFile1">
                                        @error('product_img')
                                            <div class="sm">
                                                <span style="color: red">{{ $message }}</span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Add Product</button>
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
