<?php 
    include "koneksi.php";

    session_start();
    
    $idDaftarPemberkatan = $_POST['idDaftarPemberkatan'];
    $tanggalDaftar = date("d-m-Y");
    $username = $_SESSION['username'];
    $namaPasangan = $_POST['namaPasangan'];
    $tanggalPemberkatan = $_POST['tanggalPemberkatan'];
    $idSesiKelas = $_POST['waktuPemberkatan'];
    $namaOrtuPria = $_POST['namaOrtuPria'];
    $namaOrtuWanita = $_POST['namaOrtuWanita'];
    $statusVerifikasi = 0;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {

        $fileNameImage1 = "";
        $fileNameImage2 = "";

        if (isset($_FILES['lampirSuratBaptis']) && !empty($_FILES['lampirSuratBaptis']) && isset($_FILES['lampirSertifikatPranikah']) && !empty($_FILES['lampirSertifikatPranikah'])) {

        // Get the uploaded file details for lampirSuratBaptis
        $file1 = $_FILES['lampirSuratBaptis'];
        $originalFileName1 = $file1['name'];
        $tmpFilePath1 = $file1['tmp_name'];

        // Generate a random string for the filename
        $randomString1 = uniqid();
        $extension1 = pathinfo($originalFileName1, PATHINFO_EXTENSION);
        $fileNameImage1 = $randomString1 . '.' . $extension1;

        // Move the uploaded file to the desired location for lampirSuratBaptis
        $uploadDirectory = '../backend/uploads/suratbaptis/';
        $destinationPath1 = $uploadDirectory . $fileNameImage1;
        if (!move_uploaded_file($tmpFilePath1, $destinationPath1)) {
            $response = array('error' => 'Error moving the uploaded image for lampirSuratBaptis.');
            echo json_encode($response);
            exit;
        }

        // Get the uploaded file details for lampirSertifikatPranikah
        $file2 = $_FILES['lampirSertifikatPranikah'];
        $originalFileName2 = $file2['name'];
        $tmpFilePath2 = $file2['tmp_name'];

        // Generate a random string for the filename
        $randomString2 = uniqid();
        $extension2 = pathinfo($originalFileName2, PATHINFO_EXTENSION);
        $fileNameImage2 = $randomString2 . '.' . $extension2;

        // Move the uploaded file to the desired location for lampirSertifikatLainnya
        $uploadDirectory = '../backend/uploads/sertifikatpranikah/';
        $destinationPath2 = $uploadDirectory . $fileNameImage2;
        if (!move_uploaded_file($tmpFilePath2, $destinationPath2)) {
            $response = array('error' => 'Error moving the uploaded image for lampirSertifikatLainnya.');
            echo json_encode($response);
            exit;
        }

        // Files uploaded successfully
        $response = array('success' => 'Files uploaded successfully.');
        echo json_encode($response);
        }

        $query1 = "SELECT * FROM tbdaftarpemberkatan WHERE username = '$username'";
        $result1 = mysqli_query($con, $query1);
        if (mysqli_num_rows($result1) >= 1) {
            echo '###usernameada';
        }else {
            $sql = "insert into tbdaftarpemberkatan (tanggalDaftar, username, namaPasangan, lampirSuratBaptis, lampirSertifikatPranikah, tanggalPemberkatan, idSesiKelas, namaOrtuPria, namaOrtuWanita, statusVerifikasi) 
            values('$tanggalDaftar', '$username', '$namaPasangan', '$fileNameImage1', '$fileNameImage2', '$tanggalPemberkatan', '$idSesiKelas', '$namaOrtuPria', '$namaOrtuWanita', '$statusVerifikasi')";

            mysqli_query($con, $sql);
            echo "###daftar";   
        }      
        
    }
    mysqli_query($con, "UPDATE tbdaftarpemberkatan SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>