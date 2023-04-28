<?php
    include "koneksi.php";
    session_start();
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($con,"select * from tbadmin where username='$username' and password='$password'");
    $num = mysqli_num_rows($sql);

    if($num > 0 ) {
        echo "login";

        $data = mysqli_fetch_array($sql);
        $idAdmin = $data['idAdmin'];
        $namaLengkap = $data['namaLengkap'];

        $_SESSION['idAdmin'] = $idAdmin;
        $_SESSION['namaLengkap'] = $namaLengkap;
    }    
?>