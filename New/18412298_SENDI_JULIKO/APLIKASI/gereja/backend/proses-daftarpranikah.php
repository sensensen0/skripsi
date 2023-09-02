<?php
    include "koneksi.php";
    $idDaftarPranikah = $_POST['idDaftarPranikah'];
    $statusVerifikasi = $_POST['statusVerifikasi'];
    $accept = $_POST['accept'];
    $decline = $_POST['decline'];

    if ($accept == "Terima") {
        mysqli_query($con, "UPDATE tbdaftarpranikah SET statusVerifikasi = '1' WHERE statusVerifikasi = '0'");
        echo "###terima";
    } else if ($decline == "Tolak") {
        mysqli_query($con, "DELETE FROM tbdaftarpranikah where idDaftarPranikah = '$idDaftarPranikah'");
        echo "###tolak";
    } else echo "###";
?>
