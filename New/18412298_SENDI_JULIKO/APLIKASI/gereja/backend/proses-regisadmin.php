<?php
    include "koneksi.php";
    
    $idAdmin = $_POST['idAdmin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namaLengkap = $_POST['namaLengkap'];
    $cmd = $_POST['cmd'];

    if ($cmd == "Simpan"){
        $query = "SELECT * FROM tbadmin WHERE username = '$username'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            echo '###usernameada';
        }else {
            mysqli_query($con, "insert into tbadmin (username, password, namaLengkap) values('$username', '$password', '$namaLengkap')");
            echo "###simpan";
        }
    }else if($cmd == "Ubah") {
        $query = "SELECT * FROM tbadmin WHERE username = '$username'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) > 0) {
            echo '###usernameada';
        }else {
            mysqli_query($con, "update tbadmin set username='$username', password='$password', namaLengkap='$namaLengkap' where idAdmin='$idAdmin'");
            echo "###ubah";
        }
    }else if ($cmd == "Hapus") {
        mysqli_query($con, "delete from tbadmin where idAdmin='$idAdmin'");
        echo "###hapus";
    }else {
        echo "###";
    }

    echo "###";
?>
<!DOCTYPE html>
    <head>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <style>
            .table-wrapper {
                max-height: 400px;
                overflow: auto;
                display:inline-block;
            }
            /* Tombol "Lihat Password" */
        </style>          
    </head>
    <body>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal">
                        <div class="card-body">
                            <h4 class="card-title">Tabel Data</h4>
                            <table class="table table-responsive table-bordered table-wrapper align-items-center">
                                <thead class="table-dark">
                                    <tr>
                                        <td>ID Admin</td>
                                        <td>Username</td>
                                        <td>Password</td>
                                        <td>Nama Lengkap</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                            <?php 
                                $sql = mysqli_query($con, "select * from tbadmin");
                                while($data = mysqli_fetch_array($sql)){
                                    $idAdmin = $data[0];
                                    $username = $data[1];
                                    $password = $data[2];
                                    $namaLengkap = $data[3];
                                    ?>
                                        <tbody>
                                            <td><?php echo $idAdmin; ?></td>
                                            <td><?php echo $username; ?></td>
                                            <td><input class="border-0" type='password' id="password<?php echo $idAdmin;?>" value="<?php echo $password;?>" readonly></td>
                                            <td><?php echo $namaLengkap; ?></td>
                                            <td>
                                                <input type="button" class="btn btn-primary btn-success col-auto mb-1" value="Ubah" onclick="ubah(<?php echo "'$idAdmin', '$username','$password','$namaLengkap'"; ?>)">
                                                <input type="button" class="btn btn-danger col-auto mb-1" value="Hapus" onclick="hapus(<?php echo "'$idAdmin'"; ?>)">
                                                <input id="sp" type="button" class="btn btn-outline-dark col-auto mb-1" value="Show Password" onclick="showPassword('<?php echo $idAdmin;?>')" >
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