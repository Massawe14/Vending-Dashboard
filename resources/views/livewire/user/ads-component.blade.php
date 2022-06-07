<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header"> Vending Ads
                    <a href="{{ url('user/adsList') }}" class="btn btn-danger float-end">Back</a>
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
                    <form class="forms-sample" method="POST" action="{{ url('user/ads') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="adsName">Ads Name</label>
                            <input type="text" name="ads_name" class="form-control" id="adsName" placeholder="Ads Name">
                        </div>
                        <div class="form-group">
                            <label for="adsImage">Ads Image</label>
                            <input type="file" name="image" class="form-control" id="adsImage" placeholder="Ads Image">
                        </div>
                        <div class="form-group">
                            <label for="vendingID">Vending ID</label>
                            <select name="vending_id" class="form-control" style="width:100%">
                                @foreach ($vending as $data)
                                    <option value="{{$data->vending_id}}">{{$data->vending_id}}</option>
                                @endforeach
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
