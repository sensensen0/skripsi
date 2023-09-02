<?php session_start(); 
    include "koneksi.php";

    $username = $_SESSION['username'];

    $sql = "SELECT * FROM tbuser where username = '$username'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);

    if(isset($_POST['Ubah'])) {
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
    <title>Pendaftaran Kelas Pembaptisan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
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
            <h3 class="text-center mt-3 mb-4">Pendaftaran Kelas Baptis</h3>
            <div class="col-md-6">
                <form action="" id="form-regisKelasBaptis" class="border border-dark px-5 py-3 border-opacity-25 rounded-3">
                <div class="mb-3 align-items-center">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" minlength="8" maxlength="20"
                          placeholder="Masukkan username" required readonly value="<?php echo $data['username'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required readonly value="<?php echo $data['email'];?>">
                      </div>
                      <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required readonly
                        value="<?php echo $data['namaLengkap'];?>">
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
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Masukan provinsi" value="<?php echo $data['provinsi'];?>"required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Masukan kota" value="<?php echo $data['kota'];?>"required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" value="<?php echo $data['kecamatan'];?>"required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Masukan kelurahan"value="<?php echo $data['kelurahan'];?>" required readonly>
                      </div>
                      <div class="mb-3">
                        <label for="kodePos" class="form-label">Kode Pos</label>
                        <input type="number" class="form-control" id="kodePos" name="kodePos" placeholder="Masukan kode pos" oninput="validasiKodePos()" value="<?php echo $data['kodePos'];?>" required readonly>
                        <span id="errorMsg" style="color: red;"></span>
                      </div>
                      <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <div class="">
                            <select name="pekerjaan" id="pekerjaan" class="form-select">
                              <option disabled>-- Pilih pekerjaan --</option>
                              <option value="Tidak bekerja`" disabled <?php if ($data['pekerjaan']=='Tidak bekerja'){ echo'selected disabled';}?>>Tidak bekerja</option>
                              <option value="Pelajar/Mahasiswa" disabled <?php if ($data['pekerjaan']=='Pelajar/Mahasiswa'){ echo'selected disabled';}?>>Pelajar/Mahasiswa</option>
                              <option value="Karyawan" disabled <?php if ($data['pekerjaan']=='Karyawan'){ echo'selected disabled';}?>>Karyawan</option>
                              <option value="Pengusaha" disabled <?php if ($data['pekerjaan']=='Pengusaha'){ echo'selected disabled';}?>>Pengusaha</option>
                              <option value="Self-employed" disabled <?php if ($data['pekerjaan']=='Self-employed'){ echo'selected disabled';}?>>Self-Employed</option>
                            </select>
                        </div>
                      </div>
                    <div class="mb-2">
                        <label for="konfirmasi" class="form-label">Apakah anda bersedia mengikuti kelas katekisasi?</label>
                        <div class="pb-2 justify-content-center align-items-center">
                            <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="konfirmasi" id="ya" value="Ya">
                                <label class="form-check-label" for="ya">
                                  Ya
                                </label>
                             </div>
                              <div class="form-check form-check-inline col-auto mt-2">
                                <input class="form-check-input" type="radio" name="konfirmasi" id="tidak" value="Tidak">
                                <label class="form-check-label" for="tidak">
                                  Tidak
                                </label>
                            </div>
                        </div>
                    </div>     
                    <div class="mb-3">
                        <label for="idSesiKelas" class="form-label">Sesi Kelas</label>
                        <div class="">
                            <select name="idSesiKelas" id="idSesiKelas" class="form-select">
                              <option disabled>-- Pilih Sesi Kelas --</option>
                              <?php
                                include "koneksi.php";
                                $sql = mysqli_query($con, "select * from tbsesikelas inner join tbkelas on tbsesikelas.idKelas = tbkelas.idKelas where tbkelas.namaKelas = 'Kelas Pembaptisan'");
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
                        <input id="cmd" type="button" class="btn btn-primary btn-block" onclick="daftar()" value="Daftar">
                        <input type="button" id="batal" class="btn btn-danger btn-block" value="Batal" onclick="konfirmasiBatal()">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        var idDaftarKelasBaptisSkrg = "";

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
            }else if(bagi[1] == "usernameada") {
              alert("AKUN SUDAH TERDAFTAR");
              location.href="halamanUser.php"
            }
            }
        };
            xhttp.open("POST", url, true);
            xhttp.send(data);
        }

        function loading(){
        // document.getElementById("pasangan").style.display = "none";
            ajaxku("proses-daftarkb.php");
        }

        // function resetForm(){
        // document.getElementById("idkelas").value = "";
        // document.getElementById("username").value = "";
        // document.getElementById("namapasangan").value = "";
        // document.getElementById("idsesikelas").value = "";
        // document.getElementById("cmd").value = "Daftar";
        // location.href="form-login.htm";
        // }

        function daftar(){

            let username = document.getElementById("username").value;
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
            let konfirmasi = document.querySelector('input[name="konfirmasi"]:checked').value;
            let idSesiKelas = document.getElementById("idSesiKelas").value;
            let cmd = document.getElementById("cmd").value;
            
            
            let data = new FormData();
                
            data.append("username", username)
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
            data.append("konfirmasi",konfirmasi);
            data.append("idSesiKelas",idSesiKelas);
            data.append("cmd", cmd);

            ajaxku("proses-daftarkb.php", data);
        }
        function konfirmasiBatal(){
            if(confirm("Apakah anda yakin ingin membatalkan pendaftaran?")) {
                location.href="halamanUser.php"
            } else {
                document.getElementById("username").focus();
                document.getElementById("username").scrollIntoView();
            }
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

        //     ajaxku("proses-daftarkb.php", data);
        // }
        // }
    </script>
</body>
</html>