<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header"> Products
                    <a href="{{ url('user/productList') }}" class="btn btn-danger float-end">BACK</a>
                </h6>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ session('status') }}</p>
                        </div>
                    @elseif(session('failed'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>{{ session('failed') }}</p>
                        </div>
                    @endif
                    {{-- <h4 class="card-title">Products</h4> --}}
                    {{-- <p class="card-description"> Add new product to the system </p> --}}
                    <form class="forms-sample" method="POST" action="{{ url('user/product') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="productID">Product ID</label>
                            <input type="text" name="product_id" class="form-control" id="productID" placeholder="Product ID">
                        </div>
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" name="name" class="form-control" id="productName" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" name="image" class="form-control" id="productImage" placeholder="Product Image">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="text" name="price" class="form-control" id="productPrice" placeholder="Product Price">
                        </div>
                        <div class="form-group">
                            <label for="vendingID">Vending ID</label>
                            <select name="vending_id" class="form-control" style="width:100%">
                                <option value="VD1">Vending 1</option>
                                <option value="VD2">Vending 2</option>
                                <option value="VD3">Vending 3</option>
                                <option value="VD4">Vending 4</option>
                                <option value="VD5">Vending 5</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-dark" href="{{ url('user/dashboard') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
