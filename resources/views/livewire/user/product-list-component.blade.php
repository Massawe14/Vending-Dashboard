<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <h6 class="card-header">Product Details
                    <a href="{{ url('user/product') }}" class="btn btn-primary float-end">ADD</a>
                </h6>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
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
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td> {{$row['id']}} </td>
                                        <td> {{$row['product_id']}} </td>
                                        <td> {{$row['name']}} </td>
                                        <td> {{$row['image']}} </td>
                                        <td> {{$row['price']}} </td>
                                        <td> {{$row['vending_id']}} </td>
                                        <td>
                                            <a href="" class="btn btn-success">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
