<?php session_start();
    include "koneksi.php";

    $sql = "SELECT * FROM tbberita";
    $result = mysqli_query($con, $sql);
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Informasi dan Berita</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
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
    </style>
<body>
    <div class="container-fluid">
        <!--Navbar-->
        <?php include "header copy.php"?>
        <!-- Akhir Navbar -->
        <!-- Jumbotron -->
        <section>
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
                            <div class="col-md-12">
                                <div class="row text-md-center text-white">
                                    <h1 class="" style="font-size: 4rem;">Informasi dan Berita Gereja</h1>
                                </div>
                                <div class="row text-warp text-md-center text-white fs-5">
                                    <p class="fw-light">Berisi mengenai informasi dan berita pada Gereja Kristen Kalimantan Barat Jemaat Sungai Raya Dalam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Akhir Jumbotron -->
        <!-- Isi List Informasi dan Berita -->
        <section>
            <div class="row">
                <?php while($data = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4">
                        <div class="row mt-5 d-flex justify-content-center align-items-center mx-3">
                            <div class="card w-100 mb-4 shadow p-3 bg-body">
                                <div class="card-body text-center">
                                <img src="../backend/uploads/coverberita/<?php echo $data['gambarCover']; ?>" style="width:50%" class="mb-3 card-img-top" alt="...">
                                    <h5 class="card-title"><?php echo $data['judulBerita'];?></h5>
                                    <p class="card-text"><?php echo nl2br($data['isiBerita']); ?></p>
                                </div>
                            </div>  
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- Akhir dari Isi List Informasi dan Berita -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        let nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 800) {
                nav.classList.add('bg-dark', 'shadow');
            } else{
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>
</html>