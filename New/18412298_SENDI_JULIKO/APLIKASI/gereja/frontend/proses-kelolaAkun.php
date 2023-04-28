<?php 
    include "koneksi.php";

    session_start();
    
    $username = $_SESSION['username'];
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
    $tanggalDaftar= date("d-m-Y");
    $cmd = $_POST['cmd'];

    if($cmd == "Ubah") {
        
        $sql = "UPDATE tbuser SET email = '$email', namaLengkap = '$namaLengkap', jenisKelamin = '$jenisKelamin', tempatLahir = '$tempatLahir', tanggalLahir = '$tanggalLahir', noHp = '$noHp', 
        alamatLengkap = '$alamatLengkap', provinsi = '$provinsi', kota = '$kota', kecamatan = '$kecamatan', kelurahan = '$kelurahan', kodePos = '$kodePos', pekerjaan = '$pekerjaan', tanggalDaftar = '$tanggalDaftar' where username = '$username'";

        mysqli_query($con, $sql);
        echo $sql;
        echo "###ubah";
    }
    mysqli_query($con, "UPDATE tbuser SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>