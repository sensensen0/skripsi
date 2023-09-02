<!DOCTYPE html>
<html>
    <?php 
        if(!isset($_SESSION['username'])){
            header("location:form-login.php");
        }
    ?>
    <body>
            <!--Navbar-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                <div class="container">
                  <a class="navbar-brand me-5" href="halamanUser.php">
                    <img src="../assets/img/logo.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav p-2 fs-5">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#visiMisi">Visi dan Misi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#informasi">Informasi</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Pendaftaran
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="form-daftarkb.php">Kelas Pembaptisan</a></li>
                          <li><a class="dropdown-item" href="form-daftarbaptis.php">Pembaptisan</a></li>
                          <li><a class="dropdown-item" href="form-daftarpranikah.php">Kelas Bimbingan Pranikah</a></li>
                          <li><a class="dropdown-item" href="form-daftarpemberkatan.php">Pemberkatan Pernikahan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#hubungiKami" class="nav-link">Hubungi Kami</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="bi bi-person-fill me-2">
                            </i>
                            <?php
                                echo $_SESSION['namaLengkap'];
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropstart">
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Kelola Akun</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="kelolaAkun.php">Ubah Data</a></li>
                                    <li><a class="dropdown-item" href="ubahPassword.php">Ubah Password</a></li>
                                </ul>
                            </li>
                            <li><a id="logOut" class="dropdown-item" href="proses-logout.php">Log Out</a></li>
                        </ul>
                    </div>
                    </ul>
                  </div>
                </div>
              </nav>
              <!--Akhir Navbar-->
        </body>
        