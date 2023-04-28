<!DOCTYPE html>
<html>
    <?php 
    session_start();
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <title>
            Gereja Kristen Kalimantan Barat Jemaat Sui Raya Dalam
        </title>
        <style>
            body {
                overflow-x: hidden;
            }
            .link {
                text-decoration: none;
                color: black;
                
            }
            .link:hover{
                color: white;
            }

            #daftarUser {
                background-color: #88a8ff;
                color: black;
            }
            #daftarUser:hover{
                color: white;
                background-color: black;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!--Navbar-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
                <div class="container">
                  <a class="navbar-brand me-5" href="index.htm">
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
            <section id="home">
                <!--Jumbotron-->
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                    style="
                        background-image: url(../assets/img/bg1.jpg);
                        background-size: cover;
                        max-width: 100vw;
                        height: 100vh;
                        overflow-x: hidden;    
                    ">
                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.4);">
                            <div class="d-flex justify-content-center align-items-center vh-100 vw-100">
                                <h1 class="text-center text-light" style="font-size: 4rem; ">
                                    GKKB JEMAAT SUNGAI RAYA DALAM
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Akhir Jumbotron-->
            </section>
            <!--Tentang Gereja-->
            <section id="about">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                    style="
                        background-image: url(../assets/img/bg2.jpg);
                        background-size: cover;
                        max-width: 100vw;
                        height: 100vh;
                        overflow-x: hidden;
                        position: relative;    
                    ">
                        <div class="row d-flex justify-content-center align-items-center text-center mt-5 text-light" style="position: absolute;">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h1 style="font-size: 4rem;">
                                        Tentang Kami
                                    </h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <p style="font-size: 1.2rem;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ipsam voluptatem dicta tenetur mollitia magnam et? In beatae architecto sequi deleniti, corporis iusto quo illo neque animi similique laborum vitae?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Akhir tentang gereja-->
            <section id="visiMisi">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                    style="
                        background-image: url(../assets/img/bg3.jpg);
                        background-size: cover;
                        max-width: 100vw;
                        height: 100vh;
                        overflow-x: hidden;
                        position: relative;
                        ">
                        <div class="row d-flex justify-content-center align-items-center mx-auto text-center" style="position: absolute;">
                            <div class="col-md-12 mb-3">
                                <h1 style="font-size: 4rem;">Visi Misi</h1>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Visi</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, officiis error! Harum distinctio cupiditate nulla commodi tempora nemo id quidem sit? Perspiciatis, sapiente. Necessitatibus, enim velit cumque non incidunt nihil?</p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Misi</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam quos repudiandae earum molestiae quo repellendus neque reprehenderit possimus voluptatibus dolorum sint sed iure, doloremque doloribus maxime. Dolorum ut a repellendus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="informasi">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                    style="
                        background-image: url(../assets/img/bg5.jpg);
                        background-size: cover;
                        max-width: 100vw;
                        height: 100vh;
                        overflow-x: hidden;
                        position: relative;
                    ">
                        <div class="row d-flex justify-content-center align-items-center text-center" style="position: absolute;">
                            <div class="col-md-12 mt-4 text-light">
                                <h1 style="font-size: 4rem;">Informasi Gereja</h1>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        </div>
                                            <div class="card-footer">
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <button type="button" class="btn btn-outline-light p-3">Lihat selengkapnya</button>
                            </div>   
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <section id="hubungiKami">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center"
                    style="
                        background-color: #ff9797;
                        background-size: cover;
                        max-width: 100vw;
                        height: 70vh;
                        overflow-x: hidden;
                        position: relative;
                    ">
                    <div class="col-md-12 text-center">
                        <h1 class = "mt-1 mb-5" style="font-size: 4rem;">Hubungi Kami</h1>
                        <div class="row d-flex justify-content-center align-items-center mx-auto">
                            <a href="https://goo.gl/maps/T23XPUitTsGqZf7u5" target="_blank" class="link"><p><span><i class="bi bi-geo-alt-fill me-2"></i></span>Jalan Sungai Raya Dalam, Komplek Taman Bougenville No. 59</p>
                            </a>
                            <p><span><i class="bi bi-telephone-fill me-2"></i></span>000-0000000/00-0000-0000</p>
                            
                        </div>
                    </div>
                </div>
            </section>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
            let nav = document.querySelector('nav');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 1500) {
                    nav.classList.add('bg-dark', 'shadow');
                } else{
                    nav.classList.remove('bg-dark', 'shadow');
                }
            });
        
            function logOut(){
                let logout = document.getElementById("logOut");

                if (confirm("Apakah anda ingin keluar ?")) {
                    location.href("proses-logout.php");
                } else {
                    alert("Gagal Logout!");
                } 
            }
        </script>
    </body>
</html>