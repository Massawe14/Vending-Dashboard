<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vending | Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    @livewireStyles
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{ url('user/dashboard') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{ url('user/dashboard') }}"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/profile.png') }}" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">{{Auth::user()->name}}</h5>
                  <span>{{Auth::user()->userType}}</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url(/user/change-password) }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ url('user/dashboard') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ads" aria-expanded="false" aria-controls="ads">
              <span class="menu-icon">
                <i class="mdi mdi-shopping"></i>
              </span>
              <span class="menu-title">Vending Ads</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ads">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('/user/ads') }}"> New Ads </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/user/adsList') }}"> List of Ads </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#vend" aria-expanded="false" aria-controls="vend">
              <span class="menu-icon">
                <i class="mdi mdi-fridge"></i>
              </span>
              <span class="menu-title">Vending machines</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="vend">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url(/user/vending) }}"> New Vending </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url(/user/vendingList) }}"> List of Vending </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#prod" aria-expanded="false" aria-controls="prod">
              <span class="menu-icon">
                <i class="mdi mdi-basket"></i>
              </span>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="prod">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url(/user/category) }}"> Product category </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url(/user/product) }}"> New Product </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url(/user/productList) }}"> List of Product </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#repo" aria-expanded="false" aria-controls="repo">
              <span class="menu-icon">
                <i class="mdi mdi-content-paste"></i>
              </span>
              <span class="menu-title">Reports</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="repo">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#"> Stock Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Tax Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Profit/Loss Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Trending Products </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Product Sell Report </a></li>
                <li class="nav-item"> <a class="nav-link" href="#"> Sell Payment Report </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="#"><img src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="{{ url('user/dashboard') }}">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Sales</p>
                      <p class="text-muted ellipsis mb-0"> Sales notifications </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                      <p class="text-muted ellipsis mb-0"> Update sales parameter level </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="{{ asset('assets/images/faces/profile.png') }}" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->name}}</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <form id="logout-form" method="POST" action="{{route('logout')}}">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <h6 class="card-header"> Edit Vending Ads
                                <a href="{{ url('user/adsList') }}" class="btn btn-danger float-end">Back</a>
                            </h6>
                            <div class="card-body">
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
                                <form class="forms-sample" method="POST" action="{{ url('update-data/'.$ads->id) }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="adsName">Ads Name</label>
                                        <input type="text" name="ads_name" value="{{$ads->ads_name}}" class="form-control" id="adsName" placeholder="Ads Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="adsImage">Ads Image</label>
                                      <input type="file" name="image" value="{{$ads->image}}" class="form-control" id="adsImage" placeholder="Ads Image">
                                    </div>
                                    <div class="form-group">
                                      <label for="vendingID">Vending ID</label>
                                      <select name="vending_id" class="form-control" style="width:100%">
                                        @foreach ($vending as $data)
                                          <option value="{{$data->vending_id}}">{{$data->vending_id}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary me-2">Update</button>
                                    <a class="btn btn-dark" href="{{ url('user/adsList') }}">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © imperialinnovations.co.tz 2022</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://imperialinnovations.co.tz/projects/vending-machine.html" target="_blank">Vending machine</a> from imperialinnovations.co.tz</span>
                </div>
            </footer>
            <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="a{{ asset('ssets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/js/misc.js') }}"></script>
        <script src="{{ asset('assets/js/settings.js') }}"></script>
        <script src="{{ asset('assets/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
        <!-- End custom js for this page -->
        @livewireScripts
  </body>
</html>
