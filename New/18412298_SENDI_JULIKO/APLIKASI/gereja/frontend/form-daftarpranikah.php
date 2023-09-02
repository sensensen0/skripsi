<?php session_start(); 
    include "koneksi.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM tbuser where username = '$username'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['Daftar'])) {
        $email = $_POST['email'];
        $namaLengkap = $_POST['namaLengkap'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $tempatLahir = $_POST['tempatLahir'];
        $tanggalLahir = $_POST['tanggalLahir'];
        $noHp = $_POST['noHp'];
        $alamatLengkap = $_POST['alamatLengkap'];
        $provinsi = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kecamatan = $_POST['kecamatan'];
        $kelurahan = $_POST['kelurahan'];
        $kodePos = $_POST['kodePos'];
        $pekerjaan = $_POST['pekerjaan'];

        // $sql = "UPDATE tbuser SET email = '$email', namaLengkap = '$namaLengkap', jenisKelamin = '$jenisKelamin', tempatLahir = '$tempatLahir', tanggalLahir = '$tanggalLahir', noHp = '$noHp', 
        // alamatLengkap = '$alamatLengkap', provinsi = '$provinsi', kota = '$kota', kecamatan = '$kecamatan', kelurahan = '$kelurahan', kodePos = '$kodePos', pekerjaan = '$pekerjaan' where username = '$username'";

        // mysqli_query($con, $sql);
        // header("Location: kelolaAkun.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Kelas Bimbingan Pranikah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
      body{
        overflow-x: hidden;
      }
        .warnabg {
            background-color: rgb(77, 77, 77);
        }
    </style>
</head>
<body onload="loading()">
    <div class="container-fluid vh-100 vw-100 ">
        <div class="warnabg row text-center mb-3">
            <a href="halamanUser.php"><img src="../assets/img/logo.png" alt="Logo gkkb serdam" width="120px" height="120px"></a>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <h3 class="text-center mt-3 mb-4">Pendaftaran Kelas Bimbingan Pranikah</h3>
            <div class="col-md-6">
                <form action="" id="form-regisKelasBaptis" class="border border-dark px-5 py-3 border-opacity-25 rounded-3">
                    <div class="border border-dark px-4 py-3 mb-3 border-opacity-25 rounded-3">
                        <div class="mb-3">
                            <div class="mb-3 align-items-center">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                                placeholder="Masukkan username" required readonly value="<?php echo $data['username'];?>">
                            </div>
                                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" id="namaLengkap" class="form-control form-input" placeholder="" readonly value="<?php echo $data['namaLengkap'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="tanggalLahir" class="form-control form-input" readonly value="<?php echo $data['tanggalLahir'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="noHp" class="form-label">Nomor Handphone</label>
                                <input type="number" id="noHp" class="form-control form-input" placeholder="Masukkan nomor handphone" readonly value="<?php echo $data['noHp'];?>">
                            </div>
                        </div>
                    <div class="border border-dark px-4 py-3 mb-3 border-opacity-25 rounded-3">
                        <h3 class="mb-3">Pihak Pria/Wanita</h3>
                        <div class="mb-3">
                            <label for="namaPasangan" class="form-label">Nama Pasangan</label>
                            <input type="text" id="namaPasangan" class="form-control form-input" placeholder="Masukkan nama pasangan" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalLahirPasangan" class="form-label">Tanggal Lahir Pasangan</label>
                            <input type="date" id="tanggalLahirPasangan" class="form-control form-input" required>
                        </div>
                        <div class="mb-3">
                            <label for="noHpPasangan" class="form-label">Nomor Handphone Pasangan</label>
                            <input type="number" id="noHpPasangan" class="form-control form-input" placeholder="Masukkan nomor handphone" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lampirSuratBaptis" class="form-label">Lampiran Surat Baptis</label>
                        <input type="file" accept=".jpg, .jpeg, .pdf, .png" id="lampirSuratBaptis" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="idSesiKelas" class="form-label">Sesi Kelas</label>
                        <div class="">
                            <select name="idSesiKelas" id="idSesiKelas" class="form-select">
                              <option disabled>-- Pilih Sesi Kelas --</option>
                              <?php
                                include "koneksi.php";
                                $sql = mysqli_query($con, "select * from tbsesikelas inner join tbkelas on tbsesikelas.idKelas = tbkelas.idKelas where tbkelas.namaKelas = 'Kelas Bimbingan Pranikah'");
                                while($data = mysqli_fetch_array($sql)){
                                $idSesiKelas = $data['idSesiKelas'];
                                $namaKelas = $data['namaKelas'];
                                $namaSesi = $data['namaSesi'];
                                $hariSesi = $data['hariSesi'];
                                $waktuMulai = $data['waktuMulai'];
                                $waktuAkhir = $data['waktuAkhir'];
                                ?>
                                    <option value="<?php echo $idSesiKelas; ?>"><?php echo $namaSesi, " (", $hariSesi,": ", $waktuMulai,"-",$waktuAkhir, ")"?></option>
                                <?php
                              } 
                          ?>
                            </select>
                        </div>
                    </div>        
                    <div class="text-center">
                        <input id="cmd" type="button" class="btn btn-primary" value="Daftar" onclick="daftar()">
                        <input type="button" id="batal" class="btn btn-danger" value="Batal">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        var idDaftarPranikahSkrg = "";

        function ajaxku(url, data){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var dataku = this.responseText;

            var bagi = dataku.split("###");

                if(bagi[1] == "daftar"){
                    alert("Anda telah terdaftar!");
                    setTimeout(() => {
                    location.reload();
                    }, 2000);
                    window.location.href="halamanUser.php"
                }else if (bagi[1] == "ubah") {
                    alert("Data telah berubah");
                }else if (bagi[1] == "hapus") {
                    alert("Data telah terhapus");
                }
            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
        ajaxku("proses-pranikah.php");
        }

        function daftar(){
            let username = document.getElementById("username").value;
            let namaLengkap = document.getElementById("namaLengkap").value;
            let tanggalLahir = document.getElementById("tanggalLahir").value;
            let noHp = document.getElementById("noHp").value;
            let namaPasangan = document.getElementById("namaPasangan").value;
            let tanggalLahirPasangan = document.getElementById("tanggalLahirPasangan").value;
            let noHpPasangan = document.getElementById("noHpPasangan").value;
            let lampirSuratBaptis = document.getElementById("lampirSuratBaptis").files[0];
            let idSesiKelas = document.getElementById("idSesiKelas").value;
            let cmd = document.getElementById("cmd").value;


            let data = new FormData();
                
            data.append("username", username)
            data.append("namaLengkap", namaLengkap);
            data.append("tanggalLahir", tanggalLahir);
            data.append("noHp", noHp);
            data.append("namaPasangan", namaPasangan);
            data.append("tanggalLahirPasangan",tanggalLahirPasangan);
            data.append("noHpPasangan",noHpPasangan);
            data.append("lampirSuratBaptis",lampirSuratBaptis);
            data.append("idSesiKelas", idSesiKelas);
            data.append("cmd", cmd);

            // ajaxku("proses-pranikah.php", data);
            $.ajax({
                url: 'proses-pranikah.php',
                type: 'POST',
                data: data,
                contentType: false,
                processData: false,
                success: function(response) {
                var dataku = response;

                var bagi = dataku.split("###");

                if(bagi[1] == "daftar"){
                    alert("Anda telah terdaftar!");
                    setTimeout(() => {
                        location.reload();
                    }, 2000);
                    window.location.href="halamanUser.php"
                }else if (bagi[1] == "ubah") {
                    alert("Data telah berubah");
                }else if (bagi[1] == "hapus") {
                    alert("Data telah terhapus");
                }else if(bagi[1] == "usernameada") {
                    alert("AKUN SUDAH TERDAFTAR");
                    location.href="halamanUser.php"
                }
                },
                error: function(xhr, status, error) {
                console.log(xhr.responseText);
                // Handle error
                }
            });
        }       
        
        document.getElementById('lampirSuratBaptis').addEventListener('change', function(event) {
            var file = event.target.files[0];
            var maxSize = 5048 * 5048; // Contoh: batasan ukuran file 5MB
            if (file.size > maxSize) {
            alert('Ukuran file terlalu besar, maksimum 5MB.');
            event.target.value = ''; // Mengosongkan nilai input file
            }
        });
    </script>
</body>
</html>