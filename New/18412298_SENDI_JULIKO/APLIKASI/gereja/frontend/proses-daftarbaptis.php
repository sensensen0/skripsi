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
    $statusVerifikasi = 0;
    $cmd = $_POST['cmd'];

    if($cmd == "Daftar") {
        
       $fileNameImage = "";
        
        if(isset($_FILES['uploadFoto']) && !empty($_FILES['uploadFoto'])){

            // Get the uploaded file details
            $file = $_FILES['uploadFoto'];
            $originalFileName = $file['name'];
            $tmpFilePath = $file['tmp_name'];
            

            // Generate a random string for the filename
            $randomString = uniqid();
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileNameImage = $randomString . '.' . $extension;

            // Move the uploaded file to a desired location
            $uploadDirectory = '..backend/uploads/fotoprofile/'; // Specify the directory where you want to save the uploaded image
            $destinationPath = $uploadDirectory . $fileNameImage;
            if (!move_uploaded_file($tmpFilePath, $destinationPath)) {
                $response = array('error' => 'Error moving the uploaded image.');
                echo json_encode($response);
            }
        }
        $query1 = "SELECT * FROM tbdaftarbaptis WHERE username = '$username'";
        $result1 = mysqli_query($con, $query1);
        if (mysqli_num_rows($result1) >= 1) {
            echo '###usernameada';
        }else {
            $sql = "insert into tbdaftarbaptis (tanggalDaftar, username, opsiBaptis, ukuranJubah, uploadFoto, statusVerifikasi) 
            values ('$tanggalDaftar', '$username', '$opsiBaptis', '$ukuranJubah', '$fileNameImage', '$statusVerifikasi')";

            mysqli_query($con, $sql);
            echo "###daftar";
        }      
    }
    mysqli_query($con, "UPDATE tbdaftarbaptis SET tanggalDaftar = CURDATE() WHERE tanggalDaftar = '0000-00-00'");
?>