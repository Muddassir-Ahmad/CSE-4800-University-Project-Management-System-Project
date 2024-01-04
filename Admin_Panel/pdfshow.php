<?php

include '../config.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM `proposal` where id=$id");

    while ($row = mysqli_fetch_array($query)){
        $pdf = "../".$row['proposal'];
    

    //$filename = ' .$imageName . ';
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $pdf . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($pdf);
    }
?>