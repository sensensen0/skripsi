<?php session_start(); 
    include "koneksi.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM tbuser inner join tbdaftarpranikah on tbuser.username=tbdaftarpranikah.username where tbuser.username = '$username'";
    $result= mysqli_query($con, $sql);
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
        $namaPasangan = $_POST['namaPasangan'];

        // $sql = "UPDATE tbuser SET email = '$email', namaLengkap = '$namaLengkap', jenisKelamin = '$jenisKelamin', tempatLahir = '$tempatLahir', tanggalLahir = '$tanggalLahir', noHp = '$noHp', 
        // alamatLengkap = '$alamatLengkap', provinsi = '$provinsi', kota = '$kota', kecamatan = '$kecamatan', kelurahan = '$kelurahan', kodePos = '$kodePos', pekerjaan = '$pekerjaan' where username = '$username'";

        // mysqli_query($con, $sql);
        // header("Location: kelolaAkun.php");
    } else if ($data !== null && isset($data[0])) {
            echo "Anda belum mendaftar bimbingan pranikah!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pemberkatan Pernikahan</title>
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
            <h3 class="text-center mt-3 mb-4">Pendaftaran Pemberkatan Pernikahan</h3>
            <div class="col-md-6">
                <form action="" id="form-regisKelasBaptis" class="border border-dark px-5 py-3 border-opacity-25 rounded-3">
                    <div class="mb-3 align-items-center">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                            placeholder="Masukkan username" required readonly value="<?php echo $data['username'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" class="form-control form-input" placeholder="" readonly value="<?php echo $data['namaLengkap'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="namaPasangan" class="form-label">Nama Pasangan</label>
                        <input type="text" id="namaPasangan" class="form-control form-input" placeholder="Masukkan nama pasangan" value = "<?php echo $data['namaPasangan'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="lampirSuratBaptis" class="form-label">Lampir Surat Baptis</label>
                        <input type="file" accept=".jpg, .jpeg, .pdf" id="lampirSuratBaptis" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="lampirSertifikatPranikah" class="form-label">Lampir Sertifikat Pranikah</label>
                        <input type="file" accept=".jpg, .jpeg, .pdf" id="lampirSertifikatPranikah" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="tanggalPemberkatan" class="form-label">Tanggal Pemberkatan</label>
                        <input type="date" id="tanggalPemberkatan" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="waktuPemberkatan" class="form-label">Waktu Pemberkatan</label>
                        <div class="">
                            <select name="waktuPemberkatan" id="waktuPemberkatan" class="form-select">
                              <option disabled selected>-- Pilih Waktu Pemberkatan --</option>
                              <option value="10.00 WIB">10.30 WIB</option>
                              <option value="12.00 WIB">12.00 WIB</option>
                              <option value="14.00 WIB">14.00 WIB</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="namaOrtuPria" class="form-label">Nama Ayah/Ibu Pihak Pria</label>
                        <input type="text" id="namaOrtuPria" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label for="namaOrtuWanita" class="form-label">Nama Ayah/Ibu Pihak Wanita</label>
                        <input type="text" id="namaOrtuWanita" class="form-control form-input">
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

            // document.getElementById("tableku").innerHTML = bagi[2]
            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
        // document.getElementById("pasangan").style.display = "none";
        ajaxku("proses-pemberkatan.php");
        }

        function daftar(){
            let username = document.getElementById("username").value;
            let namaLengkap = document.getElementById("namaLengkap").value;
            let namaPasangan = document.getElementById("namaPasangan").value;
            let lampirSuratBaptis = document.getElementById("lampirSuratBaptis").value;
            let lampirSertifikatPranikah = document.getElementById("lampirSertifikatPranikah").value;
            let tanggalPemberkatan = document.getElementById("tanggalPemberkatan").value;
            let waktuPemberkatan = document.getElementById("waktuPemberkatan").value;
            let namaOrtuPria = document.getElementById("namaOrtuPria").value;
            let namaOrtuWanita = document.getElementById("namaOrtuWanita").value;
            let cmd = document.getElementById("cmd").value;


            let data = new FormData();
                
            data.append("username", username)
            data.append("namaLengkap", namaLengkap);
            data.append("namaPasangan", namaPasangan);
            data.append("lampirSuratBaptis", lampirSuratBaptis);
            data.append("lampirSertifikatPranikah", lampirSertifikatPranikah);
            data.append("tanggalPemberkatan", tanggalPemberkatan);
            data.append("waktuPemberkatan",waktuPemberkatan);
            data.append("namaOrtuPria",namaOrtuPria);
            data.append("namaOrtuWanita",namaOrtuWanita);
            data.append("cmd", cmd);

            ajaxku("proses-pemberkatan.php", data);
        }       
      document.getElementById('lampirSuratBaptis').addEventListener('change', function(event) {
        var file = event.target.files[0];
        var maxSize = 5048 * 5048; // Contoh: batasan ukuran file 5MB
        if (file.size > maxSize) {
          alert('Ukuran file terlalu besar, maksimum 1MB.');
          event.target.value = ''; // Mengosongkan nilai input file
        }
      });
    </script>
</body>
</html>