<!DOCTYPE html>
<html lang="en">
    <?php session_start(); 
    include "koneksi.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM tbuser where username = '$username'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['Ubah'])) {
        $username = $_POST['username'];
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

        // header("Location: kelolaAkun.php");
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        body {
                overflow-x: hidden;
                /* background-image: url(../assets/img/bg1.jpg);
                background-size: cover;
                background-repeat: no-repeat;        
                background-attachment: fixed;    */
            }
        .warnabg {
              background-color: rgb(77, 77, 77);

            }
        .link {
                text-decoration: none;
                color: black;
                
            }
        .link:hover{
                color: rgb(0, 68, 255);
            }
    </style>
    <title>Kelola Akun</title>
</head>
<body onload="loading()">
    <div class="container-fluid vh-100 vw-100">
        <div class="row">
          <!-- <div class="vh-100 vw-100" style="background-color: rgba(0, 0, 0, 0.4);"> -->
            <div class="warnabg row text-center mb-3">
              <a href="halamanUser.php"><img src="../assets/img/logo.png" alt="Logo gkkb serdam" width="120px" height="120px"></a>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-md-5">
                <form id="form-registrasi" method="$_POST" action="proses-kelolaAkun.php">
                  <h2 class="text-center mb-4">Kelola Akun</h2>
                  <div class="col-md-12 border border-dark px-5 pt-3 pb-3">
                      <div class="mb-3 align-items-center">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                          placeholder="Masukkan username" required readonly value="<?php echo $data['username'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email" value="<?php echo $data['email'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required
                        value="<?php echo $data['namaLengkap'];?>">
                      </div>
                      <div class="mb-3">
                        <div>
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="border border-secondary rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="Laki-Laki" <?php if ($data['jenisKelamin']=='Laki-Laki'){ echo 'checked';}?>>
                                <label class="form-check-label" for="laki">
                                  Laki-Laki
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan"<?php if ($data['jenisKelamin']=='Perempuan'){ echo 'checked';}?>>
                                <label class="form-check-label" for="perempuan">
                                  Perempuan
                                </label>
                            </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir" value="<?php echo $data['tempatLahir'];?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">tanggalLahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="dd-mm-yyyy" value="<?php echo $data['tanggalLahir'];?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="noHp" class="form-label">Nomor Handphone</label>
                        <input type="number" class="form-control" id="noHp" name="noHp" placeholder="Masukkan nomor handphone" oninput="validasiNoHp()"value="<?php echo $data['noHp'];?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamatLengkap" name="alamatLengkap" placeholder="Masukkan alamat lengkap" value="<?php echo $data['alamatLengkap'];?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan provinsi" value="<?php echo $data['provinsi'];?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota" value="<?php echo $data['kota'];?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" value="<?php echo $data['kecamatan'];?>"required>
                      </div>
                      <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan kelurahan"value="<?php echo $data['kelurahan'];?>" required>
                      </div>
                      <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="kodePos" name="kodePos" placeholder="Masukan kode pos" oninput="validasiKodePos()" value="<?php echo $data['kodePos'];?>" required>
                        <span id="errorMsg" style="color: red;"></span>
                      </div>
                      <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <div class="">
                            <select name="pekerjaan" id="pekerjaan" class="form-select" >
                              <option disabled>-- Pilih pekerjaan --</option>
                              <option value="Tidak bekerja" <?php if ($data['pekerjaan']=='Tidak Bekerja'){ echo'selected';}?>>Tidak bekerja</option>
                              <option value="Pelajar/Mahasiswa" <?php if ($data['pekerjaan']=='Pelajar/Mahasiswa'){ echo'selected';}?>>Pelajar/Mahasiswa</option>
                              <option value="Karyawan" <?php if ($data['pekerjaan']=='Karyawan'){ echo'selected';}?>>Karyawan</option>
                              <option value="Pengusaha" <?php if ($data['pekerjaan']=='Pengusaha'){ echo'selected';}?>>Pengusaha</option>
                              <option value="Self-employed" <?php if ($data['pekerjaan']=='Self-employed'){ echo'selected';}?>>Self-Employed</option>
                            </select>
                        </div>
                      </div>
                      <div class="mt-3 mb-3 text-center">
                        <input id="cmd" type="button" class="btn btn-primary" value="Ubah" onclick="ubah()">
                        <input type="button" class="btn btn-danger" value="Batal" onclick="konfirmasiBatal()">
                      </div>
                      <div id="alert" class="alert d-none"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      // function validateForm() {
      //   var password = document.getElementById("password").value;
      //   var confirmPassword = document.getElementById("confirmPassword").value;
      //   var passwordError = document.getElementById("passwordError");
      //   var passwordLengthError = document.getElementById("passwordLengthError");
      //   var cmd = document.getElementById("cmd");
      //   // Reset pesan error sebelumnya
      //   passwordError.textContent = "";
      //   passwordLengthError.textContent = "";

      //   // Cek apakah password dan confirm password sama
      //   if (password !== confirmPassword) {
      //     passwordError.textContent = "Password dan Confirm Password tidak sama!";
      //     cmd.disabled = true;
      //     return false;
      //   }

      //   // Cek panjang password minimal 6 karakter
      //   if (password.length < 6) {
      //     passwordLengthError.textContent = "Password harus memiliki minimal 6 karakter!";
      //     cmd.disabled = true;
      //     return false;
      //   }
      //   cmd.disabled=false;
      //   return true;
      // }

        function validasiKodePos() {
            var input = document.getElementById("kodePos").value;
            var number = parseInt(input);

            if (isNaN(number) || input.length > 5) {
                document.getElementById("errorMsg").innerText = "Harap masukkan angka hingga 5 digit!";
                return false;
            } else {
                document.getElementById("errorMsg").innerText = "";
                return true;
            }
        }
        function validasiNoHp() {
            var input = document.getElementById("noHp").value;
            var number = parseInt(input);

            if (isNaN(number) || input.length > 14) {
                document.getElementById("errorMsg").innerText = "Harap masukkan angka hingga 12 atau 14 digit!";
                return false;
            } else {
                document.getElementById("errorMsg").innerText = "";
                return true;
            }
        }
        
        //function konfirmasi batal
        function konfirmasiBatal(){
            if(confirm("Apakah anda yakin ingin membatalkan pendaftaran?")) {
                location.href="halamanUser.php"
            } else {
                document.getElementById("username").focus();
                document.getElementById("username").scrollIntoView();
            }
        }
        var usernameSkrg = "";

        function ajaxku(url, data){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            var dataku = this.responseText;

            var bagi = dataku.split("###");

            if(bagi[1] == "daftar"){
                alert("Anda telah terdaftar!");
                window.location.href="form-login.php";
            }else if (bagi[1] == "usernameada") {
                alert("Username Telah Ada! Mohon menggunakan username lain.");
                resetForm();
            }else if (bagi[1] == "penggunaada") {
                alert("Pengguna Telah Ada! Mohon mendaftar pengguna lain.");
                resetForm();
            }else if(bagi[1] == "ubah") {
                alert("Data telah diubah!");
                
            }

            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
            ajaxku("proses-kelolaAkun.php");
        }

        function resetForm(){
          document.getElementById("email").value = "";
          document.getElementById("namaLengkap").value = "";
          document.getElementById("jenisKelamin").value = -1;
          document.getElementById("tempatLahir").value = "";
          document.getElementById("tanggalLahir").value = "";
          document.getElementById("noHp").value = "";
          document.getElementById("alamatLengkap").value = "";
          document.getElementById("provinsi").value = "";
          document.getElementById("kota").value = "";
          document.getElementById("kecamatan").value = "";
          document.getElementById("kelurahan").value = "";
          document.getElementById("kodePos").value = "";
          document.getElementById("pekerjaan").value = -1;
          document.getElementById("username").focus();
          document.getElementById("username").scrollIntoView();
        }

        function ubah(){

            let email = document.getElementById("email").value;
            let namaLengkap = document.getElementById("namaLengkap").value;
            let jenisKelamin = document.querySelector('input[name="jenisKelamin"]:checked').value;
            let tempatLahir = document.getElementById("tempatLahir").value;
            let tanggalLahir = document.getElementById("tanggalLahir").value;
            let noHp = document.getElementById("noHp").value;
            let alamatLengkap = document.getElementById("alamatLengkap").value;
            let provinsi = document.getElementById("provinsi").value;
            let kota = document.getElementById("kota").value;
            let kecamatan = document.getElementById("kecamatan").value;
            let kelurahan = document.getElementById("kelurahan").value;
            let kodePos = document.getElementById("kodePos").value;
            let pekerjaan = document.getElementById("pekerjaan").value;
            let cmd = document.getElementById("cmd").value;


            let data = new FormData();
            data.append("email", email);
            data.append("namaLengkap", namaLengkap);
            data.append("jenisKelamin", jenisKelamin);
            data.append("tempatLahir", tempatLahir);
            data.append("tanggalLahir", tanggalLahir);
            data.append("noHp", noHp);
            data.append("alamatLengkap", alamatLengkap);
            data.append("provinsi", provinsi);
            data.append("kota", kota);
            data.append("kecamatan", kecamatan);
            data.append("kelurahan", kelurahan);
            data.append("kodePos", kodePos);
            data.append("pekerjaan", pekerjaan);
            data.append("cmd", cmd);

            if(cmd == "Ubah"){
              if(confirm("Apakah anda ingin mengubah data ini?")){
                data.append("username", usernameSkrg);
                ajaxku("proses-kelolaAkun.php", data);
                setTimeout(() => {
                  location.reload();
                }, 2000);
                window.location.href="halamanUser.php";
              }
            }
        }
    </script>
</body>
</html>