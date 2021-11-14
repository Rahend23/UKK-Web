<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Hibook</title>
  <!-- Favicon -->
  <link rel="icon" href={{ asset ('img/brand/Hicon.png') }}>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={{ asset ('vendor/nucleo/css/nucleo.css') }}>
  <link rel="stylesheet" href={{ asset ('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}>
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href={{ asset ('css/argon.css?v=1.2.0') }}>
  
</head>

<body>
  <!-- Sidenav -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              
            </li>
            <li class="nav-item dropdown">

            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                  </div>
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src={{ asset ('img/theme/team-4.jpg') }}>
                  </span>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header border-0 bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="text-light text-uppercase ls-1 mb-1">Form Edit Data</h3>
                </div>
                <div class="col text-right">
                  
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <div class="col-xl-12 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <!-- Page content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 ml-auto mr-auto">
          <div class="card card-upgrade">
            
            <div class="card-body">
              <!-- Form -->

              <form action="{{ url('buku-update/'.$data_buku->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Judul</label>
                    <input name="judul" class="form-control" type="text" placeholder="Judul" value="{{$data_buku->judul}}" >
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Gambar</label>
                    <input name="gambar" class="form-control" type="file" placeholder="Gambar" value="{{$data_buku->gambar}}" >
                    <small>*kosongkan jika tidak ingin mengubah gambar</small>
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pengarang</label>
                    <input name="pengarang" class="form-control" type="text" placeholder="Pengarang" value="{{$data_buku->pengarang}}" >
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                    <input name="penerbit" class="form-control" type="text" placeholder="Penerbit" value="{{$data_buku->penerbit}}" >
                </div>
                <a href="/" class="btn btn-warning">Back to list</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

            </div>
          </div>
        </div>
      </div>
    </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div class="row justify-content-center">
            <div class="col-xl-15 col-lg-15 col-md-15 px-15">
              &copy; 2021 <a href="#" class="font-weight-bold ml-1" target="_blank">Bima Saputra</a>
            </div>
    </div>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src={{ asset ('vendor/jquery/dist/jquery.min.js') }}></script>
  <script src={{ asset ('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset ('vendor/js-cookie/js.cookie.js') }}></script>
  <script src={{ asset ('vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}></script>
  <script src={{ asset ('vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}></script>
  <!-- Optional JS -->
  <script src={{ asset ('vendor/chart.js/dist/Chart.min.js') }}></script>
  <script src={{ asset ('vendor/chart.js/dist/Chart.extension.js') }}></script>
  <!-- Argon JS -->
  <script src={{ asset ('js/argon.js?v=1.2.0') }}></script>
</body>

</html>
