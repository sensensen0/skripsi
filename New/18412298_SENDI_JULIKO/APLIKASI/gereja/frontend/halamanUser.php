<!DOCTYPE html>
<html>
    <head>
        <?php session_start(); 
            include "koneksi.php";

            $sql = "SELECT * FROM tbberita LIMIT 3";
            $result = mysqli_query($con, $sql);
            
        ?>
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
            <?php include "header.php" ?>
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
                                    Gereja Kristen Kalimantan Barat (GKKB) Jemaat Sungai Raya Dalam merupakan salah satu gereja yang tergabung dalam
                                    sinode GKKB. GKKB Jemaat Sungai Raya Dalam beralamatkan di Kabupaten Kubu Raya, Jalan Sungai Raya Dalam, Komplek Taman Bougenville No. 59.                                    </p>
                                    <div class="mt-5">
                                        <button type="button" class="btn btn-light p-3"><a class="text-decoration-none text-dark" href="informasiGereja.htm" target="_blank">Lihat selengkapnya</a></button>
                                    </div> 
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
                                    <p style="font-size: large;">
                                        Gereja misioner yang melipatgandakan murid-murid Kristus untuk menggenapkan amanat agung Tuhan Yesus.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Misi</h3>
                                    <p style="font-size: large;">
                                        Melakukan pemuridan yang otentik untuk menghasilkan murid-murid Kristus yang siap untuk memenangkan dunia dan hidup memuliakan Kristus
                                    </p>
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
                                <?php while($data = mysqli_fetch_assoc($result)) { ?>
                                    <div class="col">
                                        <div class="card h-100">
                                            <div class="card-body">
                                            <img src="../backend/uploads/coverberita/<?php echo $data['gambarCover']; ?>" class="card-img-top mb-3" alt="...">
                                                <h5 class="card-title"><?php echo $data['judulBerita'];?></h5>
                                                <p class="card-text"><?php echo $data['isiBerita']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="mt-5">
                                <button type="button" class="btn btn-dark p-3"><a class="text-decoration-none text-light" href="listinformasi.php">Lihat selengkapnya</a></button>
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
                    <div class="col-md-6 text-center row d-flex justify-content-center align-items-center mx-auto">
                        <h1 class="mt-1 mb-5" style="font-size: 4rem;">Jadwal Ibadah</h1>
                        <div class="row d-flex justify-content-center align-items-center mx-auto">
                            <table class="ms-4">
                                <tr>
                                    <th>IBADAH</th>
                                    <th>JAM IBADAH</th>
                                </tr>
                                <tr>
                                    <td>Ibadah Raya 1</td>
                                    <td>09.00</td>
                                </tr>
                                <tr>
                                    <td>Ibadah Raya 2</td>
                                    <td>17.00</td>
                                </tr>
                                <tr>
                                    <td>Sekolah Minggu</td>
                                    <td>09.00</td>
                                </tr>
                                <tr>
                                    <td>Tunas dan Remaja</td>
                                    <td>11.00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
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