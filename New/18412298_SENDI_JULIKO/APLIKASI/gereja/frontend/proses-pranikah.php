<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarPranikah = $_POST['idDaftarPranikah'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $noHp = $_POST['noHp'];
    $namaPasangan = $_POST['namaPasangan'];
    $tanggalLahirPasangan = $_POST['tanggalLahirPasangan'];
    $noHpPasangan = $_POST['noHpPasangan'];
    $lampirSuratBaptis = $_POST['lampirSuratBaptis'];
    $idSesiKelas = $_POST['idSesiKelas'];
    $statusVerifikasi = 1;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
        $sql = "insert into tbdaftarpranikah (tanggalDaftar, username, namaPasangan, tanggalLahirPasangan, noHpPasangan, lampirSuratBaptis, idSesiKelas, statusVerifikasi) 
        values ('$tanggalDaftar', '$username', '$namaPasangan', '$tanggalLahirPasangan', '$noHpPasangan', '$lampirSuratBaptis', '$idSesiKelas', '$statusVerifikasi')";

        mysqli_query($con, $sql);
        echo "###daftar";
    }
    mysqli_query($con, "UPDATE tbdaftarpranikah SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>