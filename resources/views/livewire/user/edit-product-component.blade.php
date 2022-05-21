<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header"> Edit Products
                    <a href="{{ url('user/productList') }}" class="btn btn-danger float-end">BACK</a>
                </h6>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <p>{{ session('status') }}</p>
                        </div>
                    @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            <p>{{ session('failed') }}</p>
                        </div>
                    @endif
                    {{-- <h4 class="card-title">Products</h4> --}}
                    {{-- <p class="card-description"> Add new product to the system </p> --}}
                    <form class="forms-sample" method="POST" action="{{ url('update-data/'.$product->product_id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PUT')
                        <div class="form-group">
                            <label for="productID">Product ID</label>
                            <input type="text" name="product_id" value="{{$product->product_id}}" class="form-control" id="productID" placeholder="Product ID">
                        </div>
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="productName" placeholder="Product Name">
                        </div>
                        <div class="form-group">
                            <label for="productImage">Product Image</label>
                            <input type="file" name="image" value="{{$product->image}}" class="form-control" id="productImage" placeholder="Product Image">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Product Price</label>
                            <input type="text" name="price" value="{{$product->price}}" class="form-control" id="productPrice" placeholder="Product Price">
                        </div>
                        <div class="form-group">
                            <label for="vendingID">Vending ID</label>
                            <select name="vending_id" value="{{$product->vending_id}}" class="form-control" style="width:100%">
                                <option value="{{$product->vending_id}}">{{$product->vending_id}}</option>
                                <option value="{{$product->vending_id}}">{{$product->vending_id}}</option>
                                <option value="{{$product->vending_id}}">{{$product->vending_id}}</option>
                                <option value="{{$product->vending_id}}">{{$product->vending_id}}</option>
                                <option value="{{$product->vending_id}}">{{$product->vending_id}}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

