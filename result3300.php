<?php

include 'config.php';


$query = mysqli_query($conn, "SELECT * FROM `result` where c_code='CSE-3300'");

    while ($row = mysqli_fetch_array($query)){
        $pdf = "".$row['resultpdf'];
    

    //$filename = ' .$imageName . ';
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $pdf . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($pdf);
    }
?>