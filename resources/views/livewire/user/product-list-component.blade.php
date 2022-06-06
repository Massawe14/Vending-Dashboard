<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <h6 class="card-header">Product Details
                    <a href="{{ url('user/product') }}" class="btn btn-primary float-end">Add</a>
                </h6>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ session('status') }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @elseif(session('failed'))
                        <div class="alert alert-danger" role="alert">
                            <p>{{ session('failed') }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered mb-5">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col"> # </th>
                                    <th scope="col"> Product ID </th>
                                    <th scope="col"> Product Name </th>
                                    <th scope="col"> Product Image </th>
                                    <th scope="col"> Product Price </th>
                                    <th scope="col"> Quantity </th>
                                    <th scope="col"> Slot Number </th>
                                    <th scope="col"> Product Category </th>
                                    <th scope="col"> Vending ID </th>
                                    <th scope="col"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $row)
                                    <tr>
                                        <td scope="row"> {{$row->id}} </td>
                                        <td> {{$row->product_id}} </td>
                                        <td> {{$row->name}} </td>
                                        <td> <img src="{{ asset('/storage/'.$row->image) }}" width="100px;" height="100px;" alt="Image"> </td>
                                        <td> {{$row->price}} </td>
                                        <td> {{$row->quantity}} </td>
                                        <td> {{$row->slot_number}} </td>
                                        <td> {{$row->category}} </td>
                                        <td> {{$row->vending_id}} </td>
                                        <td>
                                            <a href="{{ url('user/editProduct/'.$row->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ url('user/deleteProduct/'.$row->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $product->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
