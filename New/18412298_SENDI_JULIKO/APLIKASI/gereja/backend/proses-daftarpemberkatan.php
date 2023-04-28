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
        <style>
            /* .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:flex;
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
                            <table class="table table-responsive-sm table-bordered text-warp text-break">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Daftar</td>
                                        <td>Tanggal Daftar</td>
                                        <td>Username</td>
                                        <td>Nama Lengkap</td>
                                        <td>Nama Pasangan</td>
                                        <td>Lampiran Surat Baptis</td>
                                        <td>Lampiran Sertifikat Pranikah</td>
                                        <td>Tanggal Pemberkatan</td>
                                        <td>Waktu Pemberkatan</td>
                                        <td>Nama Ortu Pria</td>
                                        <td>Nama Ortu Wanita</td>
                                        <td>Status Verifikasi</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username");
                                while($data = mysqli_fetch_array($sql)){    
                                    $idDaftarPemberkatan = $data[0];
                                    $tanggalDaftar = $data[1];
                                    $username = $data[2];
                                    $namaPasangan = $data[3];
                                    $lampirSuratBaptis = $data[4];
                                    $lampirSertifikatPranikah = $data[5];
                                    $tanggalPemberkatan = $data[6];
                                    $waktuPemberkatan = $data[7];
                                    $namaOrtuPria = $data[8];
                                    $namaOrtuWanita = $data[9];
                                    $statusVerifikasi = $data[10];
                                    $namaLengkap = $data['namaLengkap'];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idDaftarPemberkatan; ?></td>
                                            <td><?php echo $tanggalDaftar; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $namaLengkap; ?></td>
                                            <td><?php echo $namaPasangan; ?></td>
                                            <td><?php echo $lampirSuratBaptis; ?></td>
                                            <td><?php echo $lampirSertifikatPranikah;?></td>
                                            <td><?php echo $tanggalPemberkatan;?><td>
                                            <td><?php echo $waktuPemberkatan;?></td>
                                            <td><?php echo $namaOrtuPria; ?></td>
                                            <td><?php echo $namaOrtuWanita; ?></td>
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