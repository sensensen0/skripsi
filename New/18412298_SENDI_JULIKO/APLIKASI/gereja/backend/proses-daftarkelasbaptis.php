<?php
    include "koneksi.php";
    $idDaftarKelasBaptis = $_POST['idDaftarKelasBaptis'];
    $statusVerifikasi = $_POST['statusVerifikasi'];
    $accept = $_POST['accept'];
    $decline = $_POST['decline'];

    if ($accept == "Terima") {
        mysqli_query($con, "UPDATE tbdaftarkelasbaptis SET statusVerifikasi = '1' WHERE statusVerifikasi = '0'");
        echo "###terima";
    } else if ($decline == "Tolak") {
        mysqli_query($con, "DELETE FROM tbdaftarkelasbaptis where idDaftarKelasBaptis = '$idDaftarKelasBaptis'");
        echo "###tolak";
    } else echo "###";
?>