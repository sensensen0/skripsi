<?php
    include "koneksi.php";

    $username = $_POST['username'];
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
    $tanggalDaftar = date("d-m-Y");
    $cmd = $_POST['cmd'];

    if ($cmd == "Daftar"){
        $query1 = "SELECT * FROM tbuser WHERE username = '$username'";
        $query2 = "SELECT * FROM tbuser where namaLengkap = '$namaLengkap'";
        $result1 = mysqli_query($con, $query1);
        $result2 = mysqli_query($con, $query2);
        if (mysqli_num_rows($result1) > 1) {
            echo '###usernameada';
        }else if (mysqli_num_rows($result2) > 1) {
            echo '###penggunaada';
        }
        else {
            mysqli_query($con, "insert into tbuser (username, password, email, namaLengkap, jenisKelamin, tempatLahir, tanggalLahir, noHp, alamatLengkap, 
            provinsi, kota, kecamatan, kelurahan, kodePos, pekerjaan, tanggalDaftar) values('$username', '$password', '$email', '$namaLengkap', '$jenisKelamin', 
            '$tempatLahir', '$tanggalLahir', '$noHp', '$alamatLengkap', '$provinsi', '$kota', '$kecamatan', '$kelurahan', '$kodePos', '$pekerjaan', '$tanggalDaftar')");
            echo "###daftar";
        }
    }
    mysqli_query($con, "UPDATE tbuser SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
    // }else if($cmd == "Ubah") {
    //     mysqli_query($con, "update tbdaftarkelas set idkelas='$idkelas', idjemaat='$idjemaat', namapasangan='$namapasangan', idsesikelas='$idsesikelas'");
    //     echo "###ubah";
    // }else if ($cmd == "Hapus") {
    //     mysqli_query($con, "delete from tbdaftarkelas where iddaftarkelas='$iddaftarkelas'");
    //     echo "###hapus";
    // }else {
    //     echo "###";
    // }

    echo "###";
