<?php 
    include "koneksi.php";
    $no = 1;
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
                <td>Nama Lengkap</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = ($result);
                while($data = mysqli_fetch_array($sql)) {
                    $idDaftarKelasBaptis = $data[0];
                    $tanggalDaftar = $data[1];
                    $username = $data[2];
                    $namaLengkap = $data['namaLengkap'];
            ?>
                <tbody>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $namaLengkap; ?></td>         
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>          
                </tbody>
            <?php 
                }
            ?>
        </tbody>
    </table>
    <a href="cetakPresensiBaptis.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
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
                    <td>Nama Lengkap</td>
                    <td>Nama Pasangan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    $sql = ($result);
                    while($data = mysqli_fetch_array($sql)) {
                        $namaLengkap = $data['namaLengkap'];
                        $namaPasangan = $data[3];
                ?>
                    <tbody>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $namaLengkap; ?></td> 
                        <td><?php echo $namaPasangan; ?></td>    
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>                               
                    </tbody>
                <?php 
                    }
                ?>
            </tbody>   
        </table> 
        <a href="cetakPresensiPranikah.php" class="btn btn-primary float-end fs-5 mt-3" target="_blank">Cetak</a>
        <?php
    }
?>