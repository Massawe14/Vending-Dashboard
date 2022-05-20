<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header">
                    <div class="badge badge-outline-primary float-end">
                        <a href="{{ url('user/product') }}">Add</a>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Product Details</h4>
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
                                    <th> Created At </th>
                                    <th> Updated At </th>
                                    <th> Edit</th>
                                    <th> Delete</th>
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
                                        <td> {{$row['created_at']}} </td>
                                        <td> {{$row['updated_at']}} </td>
                                        <td>
                                            <div class="badge badge-outline-success">Edit</div>
                                        </td>
                                        <td>
                                            <div class="badge badge-outline-danger">Delete</div>
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
