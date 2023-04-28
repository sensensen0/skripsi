<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarPemberkatan = $_POST['idDaftarPemberkatan'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
    $namaPasangan = $_POST['namaPasangan'];
    $lampirSuratBaptis = $_POST['lampirSuratBaptis'];
    $lampirSertifikatPranikah = $_POST['lampirSertifikatPranikah'];
    $tanggalPemberkatan = $_POST['tanggalPemberkatan'];
    $waktuPemberkatan = $_POST['waktuPemberkatan'];
    $namaOrtuPria = $_POST['namaOrtuPria'];
    $namaOrtuWanita = $_POST['namaOrtuWanita'];
    $statusVerifikasi = 1;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
        $sql = "insert into tbdaftarpemberkatan (tanggalDaftar, username, namaPasangan, lampirSuratBaptis, lampirSertifikatPranikah, tanggalPemberkatan, waktuPemberkatan, namaOrtuPria, namaOrtuWanita, statusVerifikasi) 
        values('$tanggalDaftar', '$username', '$namaPasangan', '$lampirSuratBaptis', '$lampirSertifikatPranikah', '$tanggalPemberkatan', '$waktuPemberkatan', '$namaOrtuPria', '$namaOrtuWanita', '$statusVerifikasi')";

        mysqli_query($con, $sql);
        echo "###daftar";
    }
    mysqli_query($con, "UPDATE tbdaftarpemberkatan SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>