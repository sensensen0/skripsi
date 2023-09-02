<?php
    include "koneksi.php";
    $idDaftarPemberkatan = $_POST['idDaftarPemberkatan'];
    $statusVerifikasi = $_POST['statusVerifikasi'];
    $accept = $_POST['accept'];
    $decline = $_POST['decline'];

    if ($accept == "Terima") {
        mysqli_query($con, "UPDATE tbdaftarpemberkatan SET statusVerifikasi = '1' WHERE statusVerifikasi = '0'");
        echo "###terima";
    } else if ($decline == "Tolak") {
        mysqli_query($con, "DELETE FROM tbdaftarpemberkatan where idDaftarPemberkatan = '$idDaftarPemberkatan'");
        echo "###tolak";
    } else echo "###";
    echo "###";

?>
