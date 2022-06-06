<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <h6 class="card-header">Vending Details
                    <a href="{{ url('user/vending') }}" class="btn btn-primary float-end">Add</a>
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
                                    <th scope="col"> Vending ID </th>
                                    <th scope="col"> Vending Name </th>
                                    <th scope="col"> Vending Location </th>
                                    <th scope="col"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vending as $row)
                                    <tr>
                                        <td scope="row"> {{$row->id}} </td>
                                        <td> {{$row->vending_id}} </td>
                                        <td> {{$row->name}} </td>
                                        <td> {{$row->location}} </td>
                                        <td>
                                            <a href="{{ url('user/editVending/'.$row->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ url('user/deleteVending/'.$row->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ url('user/viewVendingProduct/'.$row->vending_id) }}" class="btn btn-warning">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $vending->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
