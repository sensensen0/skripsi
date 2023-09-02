<!DOCTYPE html>
<html lang="en">
    <?php session_start(); 
    include "koneksi.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM tbuser where username = '$username'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['Ubah'])) {
        $password = $_POST['password'];
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
    <title>Ubah Password</title>
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
                <form id="form-registrasi">
                  <h2 class="text-center mb-4">Ubah Password</h2>
                  <div class="col-md-12 border border-dark px-5 pt-3 pb-3">
                      <div class="mb-3 align-items-center">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                          placeholder="" required disabled value=<?php echo $data['username']; ?>>
                      </div>
                      <div class="mb-3">
                        <label for="passwordLama" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" id="passwordLama" name="passwordLama" placeholder="Masukkan password lama" oninput="validateForm()" required>
                      </div>
                      <form onsubmit="return validateForm();">
                        <div class="mb-3">
                          <label for="passwordBaru" class="form-label">Password Baru</label>
                          <input type="password" class="form-control" id="passwordBaru" name="passwordBaru" placeholder="Masukkan password baru" required>
                          <span id="passwordLengthError" class="error col-md-5"></span><br> <!-- Menampilkan pesan error -->
                        </div>
                        <div class="mb-3">
                          <label for="confirmPasswordBaru" class="form-label">Confirm Password Baru</label>
                          <input type="password" class="form-control" id="confirmPasswordBaru" name="confrimPasswordBaru" placeholder="Masukkan ulang password" oninput="validateForm()" required>
                          <span id="passwordError" class="error col-md-4"></span><br> <!-- Menampilkan pesan error -->
                        </div>
                      </form>
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

      function validateForm() {
        var password = document.getElementById("passwordBaru").value;
        var confirmPassword = document.getElementById("confirmPasswordBaru").value;
        var passwordError = document.getElementById("passwordError");
        var passwordLengthError = document.getElementById("passwordLengthError");
        var cmd = document.getElementById("cmd");
        // Reset pesan error sebelumnya
        passwordError.textContent = "";
        passwordLengthError.textContent = "";

        // Cek apakah password dan confirm password sama
        if (password !== confirmPassword) {
          passwordError.textContent = "Password dan Confirm Password tidak sama!";
          cmd.disabled = true;
          return false;
        }

        // Cek panjang password minimal 6 karakter
        if (password.length < 6) {
          passwordLengthError.textContent = "Password harus memiliki minimal 6 karakter!";
          cmd.disabled = true;
          return false;
        }
        cmd.disabled=false;
        return true;
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
            }else if (bagi[1] == "pwtidaksesuai") {
                alert("Error: Password Lama Tidak Sesuai!");
                resetForm();
            }else if(bagi[1] == "ubah") {
                alert("Password telah diubah!");
                
            }

            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
            ajaxku("proses-ubahPassword.php");
        }

        function resetForm(){
          document.getElementById("username").value = "";
          document.getElementById("password").value = "";
          document.getElementById("confirmPassword").value = "";
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
            let passwordBaru = document.getElementById("passwordBaru").value;
            let cmd = document.getElementById("cmd").value;

            let data = new FormData();
            data.append("passwordBaru", passwordBaru);
            data.append("cmd", cmd);

            if(cmd == "Ubah"){
              if(confirm("Apakah anda ingin mengubah password ini?")){
                data.append("username", usernameSkrg);
                ajaxku("proses-ubahPassword.php", data);
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