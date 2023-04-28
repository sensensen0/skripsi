<?php
    include "koneksi.php";
    
    $iddaftarkelas = $_POST['iddaftarkelas'];
    $idkelas = $_POST['idkelas'];
    $idjemaat = $_POST['idjemaat'];
    $namapasangan = $_POST['namapasangan'];
    $idsesikelas = $_POST['idsesikelas'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbdaftarkelas (idkelas, idjemaat, namapasangan, idsesikelas) values('$idkelas', '$idjemaat', '$namapasangan', '$idsesikelas')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbdaftarkelas set idkelas='$idkelas', idjemaat='$idjemaat', namapasangan='$namapasangan', idsesikelas='$idsesikelas'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbdaftarkelas where iddaftarkelas='$iddaftarkelas'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
    header("Content-type: image/png");
?>
<!DOCTYPE html>
    <head>
        <!-- <style>
            .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:flex;
            }
        </style>           -->
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Data</h4>
                            <table class="table table-responsive table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Daftar</td>
                                        <td>Tanggal Daftar</td>
                                        <td>Username</td>
                                        <td>Nama Lengkap</td>
                                        <td>Opsi Baptis</td>
                                        <td>Ukuran Jubah</td>
                                        <td>Upload Foto</td>
                                        <td>Status Verifikasi</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username");
                                while($data = mysqli_fetch_array($sql)){    
                                    $idDaftarBaptis = $data[0];
                                    $tanggalDaftar = $data[1];
                                    $username = $data[2];
                                    $namaLengkap = $data['namaLengkap'];
                                    $opsiBaptis = $data[3];
                                    $ukuranJubah = $data[4];
                                    $uploadFoto = $data[5];
                                    $statusVerifikasi = $data[6];

                                    ?>
                                        <tbody>
                                            <td><?php echo $idDaftarBaptis; ?></td>
                                            <td><?php echo $tanggalDaftar; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $namaLengkap; ?></td>
                                            <td><?php echo $opsiBaptis; ?></td>
                                            <td><?php echo $ukuranJubah; ?></td>
                                            <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($uploadFoto).'" width="300" height="600"/>'; ?></td>
                                            <td><?php if($statusVerifikasi="0"){echo $statusVerifikasi="Belum terverifikasi";}else{echo $statusVerifikasi="Telah terverifikasi";}?></td>
                                            <td class="text-center">
                                                <input type="button" class="btn btn-primary btn-success center col-md-auto mb-1" value="Terima">
                                                <input type="button" class="btn btn-danger col-md-auto mb-1" value="Tolak">
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