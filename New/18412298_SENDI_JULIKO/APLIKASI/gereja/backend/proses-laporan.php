<?php 
    include "koneksi.php";
    
    $kategori = $_GET['kategori'];

    if ($kategori == "pendaftaranKelasBaptis") {
        //data pendaftaran kelas baptis
        $sql = "SELECT * FROM tbdaftarkelasbaptis inner join tbuser on tbdaftarkelasbaptis.username = tbuser.username";
        $result = $con->query($sql);
?>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <td>No</td>
                <td>Tanggal Daftar</td>
                <td>Username</td>
                <td>Nama Lengkap</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1; 
                $sql = ($result);
                while($data = mysqli_fetch_array($sql)) {
                    $idDaftarKelasBaptis = $data[0];
                    $tanggalDaftar = $data[1];
                    $username = $data[2];
                    $namaLengkap = $data['namaLengkap'];
            ?>
                <tbody>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $tanggalDaftar; ?></td>
                    <td><?php echo $username; ?></td>
                    <td><?php echo $namaLengkap; ?></td>                   
                </tbody>
            <?php 
                }
            ?>
        </tbody>
    </table>
    <?php 
            // $sql = "select * from tbdaftarkelasbaptis";
            // $result = mysqli_query($con, $sql);

            // $jumlahData = mysqli_num_rows($result);
    ?>
    <a href="cetakLaporanKb.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
<?php 
    } else if ($kategori == "pendaftaranPembaptisan") {
        //data pendaftaran pembaptisan
        $sql = "SELECT * FROM tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username";
        $result = $con->query($sql);
?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Opsi Baptis</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap'];
                        $opsiBaptis = $data[3];
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $opsiBaptis; ?></td>                   
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <?php 
            // $sql = "select * from tbdaftarbaptis";
            // $result = mysqli_query($con, $sql);

            // $jumlahData = mysqli_num_rows($result);
    ?>
        <a href="cetakLaporanBaptis.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
<?php
    } else if ($kategori == "pendaftaranKelasBimbinganPranikah")  {
        //data pendaftaran kelas bimbingan pranikah
        $sql = "SELECT * FROM tbdaftarpranikah inner join tbuser on tbdaftarpranikah.username = tbuser.username";
        $result = $con->query($sql);
        ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarPranikah = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap']; 
                        $namaPasangan = $data[3];   
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>                                         
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <?php 
    //         $sql = "select * from tbdaftarpranikah";
    //         $result = mysqli_query($con, $sql);

    //         $jumlahData = mysqli_num_rows($result);
    // ?>
        <a href="cetakLaporanPranikah.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
<?php
    } else if ($kategori == "pendaftaranPemberkatanPernikahan") {
        //data pendaftaran pemberkatan pernikahan
        $sql = "SELECT * FROM tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username";
        $result = $con->query($sql);
        ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td>Tanggal Pemberkatan</td>
                    <td>Waktu Pemberkatan</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $idDaftarPemberkatan = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap'];
                        $namaPasangan = $data[3];
                        $tanggalPemberkatan = $data[6];
                        $waktuPemberkatan = $data[7];
                ?>
                    <tbody>
                        <td><?php echo $idDaftarPemberkatan; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>
                        <td><?php echo $tanggalPemberkatan; ?></td>
                        <td><?php echo $waktuPemberkatan; ?></td>                                       
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table> 
        <?php 
            // $sql = "select * from tbdaftarpemberkatan";
            // $result = mysqli_query($con, $sql);

            // $jumlahData = mysqli_num_rows($result);
    ?>        <a href="cetakLaporanPemberkatan.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
        <?php
?>
<?php
    } else if ($kategori == "Total Pendaftaran") {
        //data pendaftaran
        $sql1 = "SELECT * FROM tbdaftarkelasbaptis inner join tbuser on tbdaftarkelasbaptis.username = tbuser.username";
        $sql2 = "SELECT * FROM tbdaftarbaptis inner join tbuser on tbdaftarbaptis.username = tbuser.username";
        $sql3 = "SELECT * FROM tbdaftarpranikah inner join tbuser on tbdaftarpranikah.username = tbuser.username";
        $sql4 = "SELECT * FROM tbdaftarpemberkatan inner join tbuser on tbdaftarpemberkatan.username = tbuser.username";
        $result1 = $con->query($sql1);
        $result2 = $con->query($sql2);
        $result3 = $con->query($sql3);
        $result4 = $con->query($sql4);
        ?>
        <!-- Data Pendaftaran Kelas Baptis -->
        <h5>Data Pendaftaran Kelas Baptis</h5>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1; 
                    $sql1 = ($result1);
                    while($data = mysqli_fetch_array($sql1)) {
                        $idDaftarKelasBaptis = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap'];
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td>                   
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <!-- Data Pendaftaran Pembaptisan -->
        <h5>Data Pendaftaran Pembaptisan</h5>
        <table class="table table-bordered mb-4">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Opsi Baptis</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql2 = ($result2);
                    while($data = mysqli_fetch_array($sql2)) {
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap'];
                        $opsiBaptis = $data[3];
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $opsiBaptis; ?></td>                   
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <!-- Data pendaftaran bimbingan pranikah -->
        <h5>Data Pendaftaran Kelas Bimbingan Pranikah</h5>
        <table class="table table-bordered mb-4">
            <thead class="table-dark">
                <tr>
                    <td>No</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql3 = ($result3);
                    while($data = mysqli_fetch_array($sql3)) {
                        $idDaftarPranikah = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap']; 
                        $namaPasangan = $data[3];   
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>                                         
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <!-- data pendaftaran pemberkatan pernikahan -->
        <h5>Data Pendaftaran Pemberkatan Pernikahan</h5>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <td>ID Daftar</td>
                    <td>Tanggal Daftar</td>
                    <td>Username</td>
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td>Tanggal Pemberkatan</td>
                    <td>Waktu Pemberkatan</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql4 = ($result4);
                    while($data = mysqli_fetch_array($sql4)) {
                        $idDaftarPemberkatan = $data[0];
                        $tanggalDaftar = $data[1];
                        $username = $data[2];
                        $namaLengkap = $data['namaLengkap'];
                        $namaPasangan = $data[3];
                        $tanggalPemberkatan = $data[6];
                        $waktuPemberkatan = $data[7];
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $tanggalDaftar; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $namaLengkap; ?></td>
                        <td><?php echo $namaPasangan; ?></td> 
                        <td><?php echo $tanggalPemberkatan; ?></td>
                        <td><?php echo $waktuPemberkatan; ?></td>                                      
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>
        </table>
        <a href="cetakTotalPendaftaran.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
 <?php
    }
?>