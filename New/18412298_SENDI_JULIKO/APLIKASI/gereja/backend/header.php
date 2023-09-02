<!DOCTYPE html>
<html>
    <?php 
      if(!isset($_SESSION['idAdmin'])){
        header("location:login.php");
      }
    ?>
    <head>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    </head>
    <body>
    <header class="topbar" data-navbarbg="skin5">
      
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header justify-content-center align-items-center mt-4" data-logobg="skin5">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
              <!-- Logo icon -->
              <b class="logo-icon ps-2 ">
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <h3>GKKB SERDAM</h3>
              </b>
              <!--End Logo icon -->
              <!-- Logo text -->

              <!-- Logo icon -->
              <!-- <b class="logo-icon"> -->
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon -->
              <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

              <!-- </b> -->
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
              <li class="nav-item d-none d-lg-block">
                <a
                  class="nav-link sidebartoggler waves-effect waves-light"
                  href="javascript:void(0)"
                  data-sidebartype="mini-sidebar"
                  ><i class="mdi mdi-menu font-24"></i
                ></a>
              </li>
              <!-- ============================================================== -->
              <!-- create new -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- End Messages -->
              <!-- ============================================================== -->

              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  "
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <img
                    src="../assets/images/users/1.jpg"
                    alt="user"
                    class="rounded-circle"
                    width="31"
                  />
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end user-dd animated"
                  aria-labelledby="navbarDropdown"
                >
                
                  <a id="logOut" class="dropdown-item mt-2" onclick="logout()">
                    <i class="fa fa-power-off me-1 ms-1"></i>
                    Logout
                  </a> 
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="index.php"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-dashboard"></i
                  ><span class="hide-menu">Dashboard</span></a
                >
              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link has-arrow waves-effect waves-dark"
                  href="javascript:void(0)"
                  aria-expanded="false"
                  ><i class="mdi mdi-receipt"></i
                  ><span class="hide-menu">Form Data</span></a
                >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-regisadmin.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Data Admin </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-jemaat.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Data Akun Jemaat </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-sesikelas.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Data Sesi Kelas </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-berita.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu"> Data Berita </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                    class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)"
                    aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                    ><span class="hide-menu">Verifikasi Data</span></a
                  >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="form-daftarkelasbaptis.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline me-2"></i
                      ><span class="hide-menu text-wrap lh-1"> Data Pendaftaran Kelas Pembaptisan </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-daftarbaptis.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline"></i
                      ><span class="hide-menu lh-1 "> Data Pendaftaran Pembaptisan </span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-daftarpranikah.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline me-1"></i
                      ><span class="hide-menu text-wrap lh-1"> Data Pendaftaran Kelas Bimbingan Pranikah</span></a
                    >
                  </li>
                  <li class="sidebar-item">
                    <a href="form-daftarpemberkatan.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline me-2"></i
                      ><span class="hide-menu text-wrap lh-1"> Data Pendaftaran Pemberkatan Pernikahan </span></a
                    >
                  </li>
                </ul>
              </li>
              <li class="sidebar-item">
                <a
                    class="sidebar-link has-arrow waves-effect waves-dark"
                    href="javascript:void(0)"
                    aria-expanded="false"
                    ><i class="mdi mdi-receipt"></i
                    ><span class="hide-menu">Transaksi Data</span></a
                  >
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                      <a href="cetakPresensi.php" class="sidebar-link"
                        ><i class="mdi mdi-note-outline me-2"></i
                        ><span class="hide-menu lh-1">Cetak Data Presensi</span></a
                      >
                  </li>
                  <li class="sidebar-item">
                    <a href="laporan.php" class="sidebar-link"
                      ><i class="mdi mdi-note-outline me-2"></i
                      ><span class="hide-menu lh-1">Laporan Pendaftaran</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
      <script type="text/javascript">
      function logout(){
        var logout = document.getElementById("logOut");
        if (confirm("Apakah anda ingin keluar ?")) {
          location.href = "proses-logout.php";
        } else {
          alert("Gagal Logout!");
        } 
      }
    </script>
    </body>
</html>