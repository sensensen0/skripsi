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
    $idSesiKelas = $_POST['idSesiKelas'];
    $statusVerifikasi = 0;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
        $fileNameImage = "";
        
        if(isset($_FILES['lampirSuratBaptis']) && !empty($_FILES['lampirSuratBaptis'])){

            // Get the uploaded file details
            $file = $_FILES['lampirSuratBaptis'];
            $originalFileName = $file['name'];
            $tmpFilePath = $file['tmp_name'];
            

            // Generate a random string for the filename
            $randomString = uniqid();
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileNameImage = $randomString . '.' . $extension;

            // Move the uploaded file to a desired location
            $uploadDirectory = '../backend/uploads/suratbaptis/'; // Specify the directory where you want to save the uploaded image
            $destinationPath = $uploadDirectory . $fileNameImage;
            if (!move_uploaded_file($tmpFilePath, $destinationPath)) {
                $response = array('error' => 'Error moving the uploaded image.');
                echo json_encode($response);
            }
        }
        $query1 = "SELECT * FROM tbdaftarpranikah WHERE username = '$username'";
        $result1 = mysqli_query($con, $query1);
        if (mysqli_num_rows($result1) >= 1) {
            echo '###usernameada';
        }else {
            $sql = "insert into tbdaftarpranikah (tanggalDaftar, username, namaPasangan, tanggalLahirPasangan, noHpPasangan, lampirSuratBaptis, idSesiKelas, statusVerifikasi) 
            values ('$tanggalDaftar', '$username', '$namaPasangan', '$tanggalLahirPasangan', '$noHpPasangan', '$fileNameImage', '$idSesiKelas', '$statusVerifikasi')";

            mysqli_query($con, $sql);
            echo "###daftar";
        }      
    }
    mysqli_query($con, "UPDATE tbdaftarpranikah SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>