<?php 
    include "koneksi.php";

    session_start();
    
    $username = $_SESSION['username'];
    $passwordLama = $_POST['passwordLama'];
    $passwordBaru = $_POST['passwordBaru'];
    $confirmPasswordBaru = $_POST['confirmPasswordBaru'];
    $cmd = $_POST['cmd'];

    if($cmd == "Ubah") {
        $query1 = "SELECT * FROM tbuser where username = '$username' AND password= '$passwordLama'";
        $result1 = mysqli_query($con, $query1);

        if (mysqli_num_rows($result1) != 1) {
            echo '###pwtidaksesuai';
        }
        $sql = "UPDATE tbuser SET password ='$passwordBaru' where username = '$username'";

        mysqli_query($con, $sql);
        echo $sql;
        echo "###ubah";
    }
    mysqli_query($con, "UPDATE tbuser SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>