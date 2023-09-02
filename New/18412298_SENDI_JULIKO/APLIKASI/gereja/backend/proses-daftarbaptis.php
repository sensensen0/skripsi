<?php
    include "koneksi.php";
    $idDaftarBaptis = $_POST['idDaftarBaptis'];
    $statusVerifikasi = $_POST['statusVerifikasi'];
    $accept = $_POST['accept'];
    $decline = $_POST['decline'];

    if ($accept == "Terima") {
        mysqli_query($con, "UPDATE tbdaftarbaptis SET statusVerifikasi = '1' WHERE statusVerifikasi = '0'");
        echo "###terima";
    } else if ($decline == "Tolak") {
        mysqli_query($con, "DELETE FROM tbdaftarbaptis where idDaftarBaptis = '$idDaftarBaptis'");
        echo "###tolak";
    } else echo "###";
?>