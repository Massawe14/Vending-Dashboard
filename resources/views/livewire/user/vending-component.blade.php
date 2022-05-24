<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header"> Vending
                    <a href="{{ url('user/vendingList') }}" class="btn btn-danger float-end">Back</a>
                </h6>
                <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ session('status') }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @elseif(session('failed'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <p>{{ session('failed') }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    {{-- <h4 class="card-title">Products</h4> --}}
                    {{-- <p class="card-description"> Add new product to the system </p> --}}
                    <form class="forms-sample" method="POST" action="{{ url('user/vending') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="productID">Vending ID</label>
                            <input type="text" name="vending_id" class="form-control" id="vendingID" placeholder="Vending ID">
                        </div>
                        <div class="form-group">
                            <label for="productName">Vending Name</label>
                            <input type="text" name="name" class="form-control" id="vendingName" placeholder="Vending Name">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Vending Location</label>
                            <input type="text" name="location" class="form-control" id="vendingLocation" placeholder="Vending Location">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <a class="btn btn-dark" href="{{ url('user/dashboard') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
