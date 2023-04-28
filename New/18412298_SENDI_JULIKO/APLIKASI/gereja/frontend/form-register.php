<!DOCTYPE html>
<html lang="en">
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
    <title>Registrasi Akun</title>
</head>
<body onload="loading()">
    <div class="container-fluid vh-100 vw-100">
        <div class="row">
          <!-- <div class="vh-100 vw-100" style="background-color: rgba(0, 0, 0, 0.4);"> -->
            <div class="warnabg row text-center mb-3">
              <a href="index.htm"><img src="../assets/img/logo.png" alt="Logo gkkb serdam" width="120px" height="120px"></a>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <div class="col-md-5">
                <form id="form-registrasi">
                  <h2 class="text-center mb-4">Registrasi Akun</h2>
                  <div class="col-md-12 border border-dark px-5 pt-3 pb-3">
                      <div class="mb-3 align-items-center">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                          placeholder="Masukkan username" required>
                      </div>
                      <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                      </div>
                      <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confrimPassword" placeholder="Masukkan ulang password" required>
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Masukkan email">
                      </div>
                      <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                      </div>
                      <div class="mb-3">
                        <div>
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="border border-secondary rounded-2 ps-3 pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="laki" value="Laki-Laki">
                                <label class="form-check-label" for="laki">
                                  Laki-Laki
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="Perempuan">
                                <label class="form-check-label" for="perempuan">
                                  Perempuan
                                </label>
                            </div>
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir" required>
                      </div>
                      <div class="mb-3">
                        <label for="tanggalLahir" class="form-label">tanggalLahir</label>
                        <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="dd-mm-yyyy" required>
                      </div>
                      <div class="mb-3">
                        <label for="noHp" class="form-label">Nomor Handphone</label>
                        <input type="number" class="form-control" id="noHp" name="noHp" placeholder="Masukkan nomor handphone" oninput="validasiNoHp()" required>
                      </div>
                      <div class="mb-3">
                        <label for="alamatLengkap" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="alamatLengkap" name="alamatLengkap" placeholder="Masukkan alamat" required>
                      </div>
                      <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan provinsi" required>
                      </div>
                      <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota" required>
                      </div>
                      <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" required>
                      </div>
                      <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan kelurahan" required>
                      </div>
                      <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="kodePos" name="kodePos" placeholder="Masukan kode pos" oninput="validasiKodePos()" required>
                        <span id="errorMsg" style="color: red;"></span>
                      </div>
                      <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <div class="">
                            <select name="pekerjaan" id="pekerjaan" class="form-select">
                              <option disabled selected>-- Pilih pekerjaan --</option>
                              <option value="Tidak bekerja">Tidak bekerja</option>
                              <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                              <option value="Karyawan">Karyawan</option>
                              <option value="Pengusaha">Pengusaha</option>
                              <option value="Self-employed">Self-Employed</option>
                            </select>
                        </div>
                      </div>
                      <div class="mb-3 text-center">
                        <input id="cmd" type="button" class="btn btn-primary" value="Daftar" onclick="daftar()">
                        <input type="button" class="btn btn-danger" value="Batal" onclick="konfirmasiBatal()">
                      </div>
                      <div>
                        <a class ="text-decoration-none" href="form-login.htm"><p class="link fw-light">Sudah punya akun? Login di sini</p></a>
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
                location.href="halamanUtama.php"
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
            }

            // document.getElementById("tableku").innerHTML = bagi[2]
            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
        // document.getElementById("pasangan").style.display = "none";
            ajaxku("proses-regis.php");
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

        function daftar(){
          let username = document.getElementById("username").value;
          let password = document.getElementById("password").value;
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
          data.append("username", username);
          data.append("password", password);
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

          ajaxku("proses-regis.php", data);
        }

        // function ubah(iddaftarkelas, idkelas, username, namapasangan, idsesikelas){
        // iddaftarkelasskrg = iddaftarkelas;
        // document.getElementById("idkelas").value = idkelas;
        // document.getElementById("username").value = username;
        // document.getElementById("namapasangan").value = namapasangan;
        // document.getElementById("idsesikelas").value = idsesikelas;
        // document.getElementById("cmd").value = "Ubah";
        // }

        // function hapus(iddaftarkelas){
        // if (confirm("Apakah anda yakin ingin menghapus data ini ?")) {
        //     let data = new FormData();
        //     data.append("cmd", "Hapus");
        //     data.append("iddaftarkelas", iddaftarkelas);

        //     ajaxku("proses-regis.php", data);
        // }
        // }
    </script>
</body>
</html>