<?php

include 'koneksi.php';

$idKelas = $_GET['idKelas'];

$sqlSesiKelas = "SELECT * FROM tbsesikelas WHERE idKelas = '$idKelas'";
$querySesiKelas = mysqli_query($con, $sqlSesiKelas);
$resultSesiKelas = mysqli_fetch_all($querySesiKelas, MYSQLI_ASSOC);

echo json_encode($resultSesiKelas);

?>