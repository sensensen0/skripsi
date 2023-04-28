<?php 
    session_start();

    session_destroy();

    header("location: halamanUtama.php");
?>