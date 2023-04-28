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
    $tanggalDaftar = $_POST['tanggalDaftar'];

    if ($cmd == "Simpan"){
        mysqli_query($con, "insert into tbjemaat (tanggalmasuk, namajemaat, tanggallahir, jk, alamat, nohp, status, pekerjaan) values('$tanggalmasuk', '$namajemaat', '$tanggallahir', '$jk', '$alamat', '$nohp', '$status', '$pekerjaan')");
        echo "###simpan";
    }else if($cmd == "Ubah") {
        mysqli_query($con, "update tbjemaat set tanggalmasuk='$tanggalmasuk', namajemaat='$namajemaat', tanggallahir='$tanggallahir', jk='$jk', alamat='$alamat', nohp='$nohp', status='$status', pekerjaan='$pekerjaan' where idjemaat='$idjemaat'");
        echo "###ubah";
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbjemaat where idjemaat='$idjemaat'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <style>
            .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:inline-block;
            }
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
                                        <td>Username</td>
                                        <td>Password</td>
                                        <td>Email</td>
                                        <td>Nama Lengkap</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Tempat Lahir</td>
                                        <td>Tanggal Lahir</td>
                                        <td>No. HP</td>
                                        <td>Alamat</td>
                                        <td>Provinsi</td>
                                        <td>Kota</td>
                                        <td>Kecamatan</td>
                                        <td>Kelurahan</td>
                                        <td>Kode Pos</td>
                                        <td>Pekerjaan</td>
                                        <td>Tanggal Daftar</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbuser");
                                while($data = mysqli_fetch_array($sql)){
                                    $username = $data[0];
                                    $password = $data[1];
                                    $email = $data[2];
                                    $namaLengkap = $data[3];
                                    $jenisKelamin = $data[4];
                                    $tempatLahir = $data[5];
                                    $tanggalLahir = $data[6];
                                    $noHp = $data[7];
                                    $alamatLengkap = $data[8];
                                    $provinsi = $data[9];
                                    $kota = $data[10];
                                    $kecamatan = $data[11];
                                    $kelurahan = $data[12];
                                    $kodePos = $data[13];
                                    $pekerjaan = $data[14];
                                    $tanggalDaftar = $data[15];
                                    ?>
                                        <tbody>
                                            <td><?php echo $username; ?></td>
                                            <td><?php echo $password; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $namaLengkap; ?></td>
                                            <td><?php echo $jenisKelamin; ?></td>
                                            <td><?php echo $tempatLahir; ?></td>
                                            <td><?php echo $tanggalLahir; ?></td>
                                            <td><?php echo $noHp; ?></td>
                                            <td><?php echo $alamatLengkap; ?></td>
                                            <td><?php echo $provinsi; ?></td>
                                            <td><?php echo $kota; ?></td>
                                            <td><?php echo $kecamatan; ?></td>
                                            <td><?php echo $kelurahan; ?></td>
                                            <td><?php echo $kodePos; ?></td>
                                            <td><?php echo $pekerjaan; ?></td>
                                            <td><?php echo $tanggalDaftar; ?></td>
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