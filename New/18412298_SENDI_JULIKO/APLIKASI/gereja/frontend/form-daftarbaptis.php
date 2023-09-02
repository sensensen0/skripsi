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
    <title>Pendaftaran Pembaptisan</title>
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
            <h3 class="text-center mt-3 mb-4">Pendaftaran Pembaptisan</h3>
            <div class="col-md-6">
                <form action="" id="form-regisKelasBaptis" class="border border-dark px-5 py-3 border-opacity-25 rounded-3">
                    <div class="mb-3 align-items-center">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                      placeholder="Masukkan username" required readonly value="<?php echo $data['username'];?>">
                    </div>
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" id="namaLengkap" class="form-control form-input" placeholder="" value="<?php echo $data['namaLengkap'] ?>">
                    </div>
                    <div class="mb-3">
                        <div>
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="border border-secondary rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="Laki-Laki" disabled <?php if ($data['jenisKelamin']=='Laki-Laki'){ echo 'checked disabled';}?>>
                                <label class="form-check-label" for="laki">
                                  Laki-Laki
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan" disabled <?php if ($data['jenisKelamin']=='Perempuan'){ echo 'checked disabled';}?>>
                                <label class="form-check-label" for="perempuan">
                                  Perempuan
                                </label>
                            </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $data['tempatLahir'];?>"required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">tanggalLahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="dd-mm-yyyy" value="<?php echo $data['tanggalLahir'];?>" required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="noHp" class="form-label">Nomor Handphone</label>
                        <input type="number" class="form-control" id="noHp" name="noHp" placeholder="Masukkan nomor handphone" oninput="validasiNoHp()"value="<?php echo $data['noHp'];?>" required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamatLengkap" name="alamatLengkap" placeholder="Masukkan alamat lengkap" value="<?php echo $data['alamatLengkap'];?>"required readonly>
                      </div>
                    <div class="mb-3">
                      <label for="opsiBaptis" class="form-label">Opsi Baptis</label>
                      <div class="border border-opacity-25 rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="opsiBaptis" id="sidi" value="Sidi">
                          <label class="form-check-label" for="sidi">
                            Sidi
                          </label>
                        </div>
                        <div class="form-check form-check-inline col-auto mt-2">
                            <input class="form-check-input" type="radio" name="opsiBaptis" id="selam" value="Selam">
                            <label class="form-check-label" for="selam">
                              Selam
                            </label>
                        </div>
                        <div class="form-check form-check-inline col-auto mt-2">
                          <input class="form-check-input" type="radio" name="opsiBaptis" id="percik" value="Percik">
                          <label class="form-check-label" for="percik">
                            Percik
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="ukuranJubah" class="form-label">Ukuran Jubah</label>
                        <div class="border border-opacity-25 rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                          <div class="form-check form-check-inline col-auto mt-2">
                              <input class="form-check-input" type="radio" name="ukuranJubah" id="small" value="S">
                              <label class="form-check-label" for="small">
                                S
                              </label>
                          </div>
                          <div class="form-check form-check-inline col-auto mt-2">
                              <input class="form-check-input" type="radio" name="ukuranJubah" id="medium" value="M">
                              <label class="form-check-label" for="medium">
                                M
                              </label>
                          </div>
                          <div class="form-check form-check-inline col-auto mt-2">
                            <input class="form-check-input" type="radio" name="ukuranJubah" id="large" value="L">
                            <label class="form-check-label" for="large">
                              L
                            </label>
                          </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="uploadFoto" class="form-label">Upload Pas Foto</label>
                        <input type="file" accept=".jpg, .jpeg, .png" id="uploadFoto" class="form-control form-input">
                    </div>
                    <div class="text-center">
                        <input id = "cmd" type="button" class="btn btn-primary" value="Daftar" onclick="daftar()">
                        <input id="cmd" type="button" class="btn btn-danger" value="Batal">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      var idDaftarBaptisSkrg = "";

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
              // window.location.href="halamanUser.php"
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
        ajaxku("proses-daftarbaptis.php");
    }
    function daftar(){
      let username = document.getElementById("username").value;
      let namaLengkap = document.getElementById("namaLengkap").value;
      let jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
      let tempatLahir = document.getElementById("tempatLahir").value;
      let tanggalLahir = document.getElementById("tanggalLahir").value;
      let noHp = document.getElementById("noHp").value;
      let alamatLengkap = document.getElementById("alamatLengkap").value;
      let opsiBaptis = document.querySelector('input[name="opsiBaptis"]:checked').value;
      let ukuranJubah = document.querySelector('input[name="ukuranJubah"]:checked').value;
      let uploadFoto = document.getElementById("uploadFoto").files[0];
      let cmd = document.getElementById("cmd").value;


      let data = new FormData();
          
      data.append("username", username)
      data.append("namaLengkap", namaLengkap);
      data.append("jenisKelamin", jenisKelamin);
      data.append("tempatLahir", tempatLahir);
      data.append("tanggalLahir", tanggalLahir);
      data.append("noHp", noHp);
      data.append("alamatLengkap", alamatLengkap);
      data.append("opsiBaptis",opsiBaptis);
      data.append("ukuranJubah",ukuranJubah);
      data.append("uploadFoto",uploadFoto);
      data.append("cmd", cmd);

      // ajaxku("proses-daftarbaptis.php", data);
      $.ajax({
        url: 'proses-daftarbaptis.php',
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

     

      document.getElementById('uploadFoto').addEventListener('change', function(event) {
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