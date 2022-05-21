<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <h6 class="card-header">Product Details
                    <a href="{{ url('user/product') }}" class="btn btn-primary float-end">ADD</a>
                </h6>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Product ID </th>
                                    <th> Product Name </th>
                                    <th> Product Image </th>
                                    <th> Product Price </th>
                                    <th> Vending ID </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $row)
                                    <tr>
                                        <td> {{$row->id}} </td>
                                        <td> {{$row->product_id}} </td>
                                        <td> {{$row->name}} </td>
                                        <td> {{$row->image}} </td>
                                        <td> {{$row->price}} </td>
                                        <td> {{$row->vending_id}} </td>
                                        <td>
                                            <a href="{{ url('user/editProduct/'.$row->id) }}" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex">
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
