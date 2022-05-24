<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header"> Change Password
                    <a href="{{ url('user/dashboard') }}" class="btn btn-danger float-end">Back</a>
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
                    <form method="POST" action="{{ url('user/update-password') }}">
                        @csrf
                        <div class="form-group">
                            <label for="oldPassword">Old Password</label>
                            <input type="password" id="oldPassword" class="form-control p_input" name="old_password" placeholder="Enter your old password" required autocomplete="old-password">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="newPassword" class="form-control p_input" name="new_password" placeholder="Enter your password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" id="confirmNewPassword" class="form-control p_input" name="new_password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Reset Password</button>
                        <a class="btn btn-dark" href="{{ url('user/dashboard') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
