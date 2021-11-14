<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>HiBook </title>
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
    
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-5 text-right">
              
            </div>
          </div>
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header border-0 bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="text-light text-uppercase ls-1 mb-1">Form Tambah Buku</h3>
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
              <form  action="{{url('buku-save')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label ">Judul</label>
                    <input name="judul" class="form-control" type="text" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Gambar</label>
                    <input name="gambar" class="form-control" type="file" placeholder="Gambar" >
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Pengarang</label>
                    <input name="pengarang" class="form-control" type="text" placeholder="Pengarang">
                </div>
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Penerbit</label>
                    <input name="penerbit" class="form-control" type="text" placeholder="Penerbit" >
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
