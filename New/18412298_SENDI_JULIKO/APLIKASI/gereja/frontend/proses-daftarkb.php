<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarKelasBaptis = $_POST['idDaftarKelasBaptis'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
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
    $konfirmasi = $_POST['konfirmasi'];
    $idSesiKelas = $_POST['idSesiKelas'];
    $statusVerifikasi = 1;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
        $sql = "insert into tbdaftarkelasbaptis (tanggalDaftar, username, konfirmasi, idSesiKelas, statusVerifikasi) 
        values ('$tanggalDaftar', '$username', '$konfirmasi', '$idSesiKelas', '$statusVerifikasi')";

        mysqli_query($con, $sql);
        echo "###daftar";
    }
    mysqli_query($con, "UPDATE tbdaftarkelasbaptis SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>