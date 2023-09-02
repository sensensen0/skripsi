<?php
    include "koneksi.php";
    
    $idBerita = $_POST['idBerita'];
    $judulBerita = $_POST['judulBerita'];
    $isiBerita = $_POST['isiBerita'];
    $fileBerita = $_POST['fileBerita'];
    $statusPublish = 0;
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        $fileNameImage = "";
        
        if(isset($_FILES['gambarCover']) && !empty($_FILES['gambarCover'])){

            // Get the uploaded file details
            $file = $_FILES['gambarCover'];
            $originalFileName = $file['name'];
            $tmpFilePath = $file['tmp_name'];
            

            // Generate a random string for the filename
            $randomString = uniqid();
            $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $fileNameImage = $randomString . '.' . $extension;

            // Move the uploaded file to a desired location
            $uploadDirectory = '../backend/uploads/coverberita/'; // Specify the directory where you want to save the uploaded image
            $destinationPath = $uploadDirectory . $fileNameImage;
            if (!move_uploaded_file($tmpFilePath, $destinationPath)) {
                $response = array('error' => 'Error moving the uploaded image.');
                echo json_encode($response);
            }
        }
        mysqli_query($con, "insert into tbberita (judulBerita, isiBerita, gambarCover, fileBerita, statusPublish) values('$judulBerita', '$isiBerita', '$fileNameImage', '$fileBerita', '$statusPublish')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbberita set judulBerita='$judulBerita', isiBerita='$isiBerita', gambarCover='$fileNameImage', fileBerita='$fileBerita' where idBerita='$idBerita'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbberita where idBerita='$idBerita'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <style>
            /* .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:inline-block;
            } */
        </style>          
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Data</h4>
                            <table class="table table-responsive table-bordered table-wrapper">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Berita</td>
                                        <td>Judul Berita</td>
                                        <td>Isi Berita</td>
                                        <td>Gambar Cover</td>
                                        <td>File Berita</td>
                                        <td>Status Publish</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbberita");
                                while($data = mysqli_fetch_array($sql)){
                                    $idBerita = $data[0];
                                    $judulBerita = $data[1];
                                    $isiBerita = $data[2];
                                    $gambarCover = $data[3];
                                    $fileBerita = $data[4];
                                    $statusPublish = $data[5];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idBerita; ?></td>
                                            <td><?php echo $judulBerita; ?></td>
                                            <td><?php echo $isiBerita; ?></td>
                                            <td>
                                                <img src="uploads/coverberita/<?php echo $gambarCover;?>" style="width: 200px;" alt="">
                                            </td>
                                            <td><?php echo $fileBerita; ?></td>
                                            <td><?php echo $statusPublish; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary col-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$idBerita', '$judulBerita','$isiBerita','$gambarCover','$fileBerita'"; ?>)">
                                                <input type="button" class="btn btn-danger col-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$idBerita'"; ?>)">
                                                <input type="button" class="btn btn-success col-auto mb-1" value="Publish" onclick="publish()">
                                            </td>
                                        </tbody>
                                    <?php
                                }
                            ?>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </body>
</html>