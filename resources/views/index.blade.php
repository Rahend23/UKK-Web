<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>HiBook</title>
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
            @csrf
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text" id="myInput">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script>
          $(document).ready(function(){
          $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myCard div").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });
          });
          </script>
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
          
                  <div class="media-body  ml-  d-none d-lg-block">
                  <img src={{ asset ('img/brand/kecil.png') }}>
                  
                </div>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Bima Saputra</span>
                  </div>&emsp;
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src={{ asset ('img/theme/profile1.jpg') }}>
                  </span>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
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
                  <h3 class="text-light text-uppercase ls-1 mb-1">Daftar Buku</h3>
                </div>
                <a href="/buku-create" class="btn btn-sm btn-warning">Tambahkan Buku</a>&emsp;

              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <div class="col-xl-12 col-md-6">
              
                <!-- Card body -->
                <div class="container">
                        <div class="row" id="myCard">
                          <!-- awal -->
                          @foreach($data_buku as $buku)
                          <div class="col-3 com-md-3">
                          <div class="card card-stats">
                          <div class="card-body" >
                              <div class="row justify-content-center">
                              <img src="images/{{$buku->gambar}}" height="275px" width="200px" >
                                <div class="col"mr-0 ml-0>&emsp;&emsp;&emsp;&emsp;  
                                  <span class="h2 font-weight-bold mb-5">{{$buku->judul}}</span>
                                  <table>
                                    <div class="col mr-0 ml-0">

                                   
                                        <td>&emsp;&emsp;{{$buku->pengarang}}|{{$buku->penerbit}}

                                        </td>
                                    </div>  
                                  </table>
                                  <p class="mt-3 mb-0 ">
                                    <a href="/buku-edit/{{$buku->id}}" class="row justify-content-center ml-0 mr-0 btn-sm btn-primary" >Edit</a>
                                    <a href="/buku-delete/{{$buku->id}}" class="row justify-content-center ml-0 mr-0 btn-sm btn-warning" onclick="return confirm('Yakin Menghapus data ini?')">Delete</a>
                                  </p>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          
                        </div>
                        <!-- akhir -->
                        @endforeach
                        
                </div>
                <div class="copyright text-center  text-lg-left  text-muted">
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
