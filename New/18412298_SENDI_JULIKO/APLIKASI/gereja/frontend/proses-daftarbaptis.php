<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarBaptis = $_POST['idDaftarBaptis'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
    $jenisKelamin = $_POST['jenisKelamin'];
    $tempatLahir = $_POST['tempatLahir'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $noHp = $_POST['noHp'];
    $alamatLengkap = $_POST['alamatLengkap'];
    $opsiBaptis = $_POST['opsiBaptis'];
    $ukuranJubah = $_POST['ukuranJubah'];
    $uploadFoto = $_POST['uploadFoto'];
    $statusVerifikasi = 1;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
        $sql = "insert into tbdaftarbaptis (tanggalDaftar, username, opsiBaptis, ukuranJubah, uploadFoto, statusVerifikasi) 
        values ('$tanggalDaftar', '$username', '$opsiBaptis', '$ukuranJubah', '$uploadFoto', '$statusVerifikasi')";

        mysqli_query($con, $sql);
        echo "###daftar";
    }
    mysqli_query($con, "UPDATE tbdaftarbaptis SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>