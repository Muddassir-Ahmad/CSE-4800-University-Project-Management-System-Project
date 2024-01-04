<?php

include 'config.php';


$query = mysqli_query($conn, "SELECT * FROM `schedule` where p_code='CSE-4801'");

    while ($row = mysqli_fetch_array($query)){
        $pdf = "".$row['s_pdf'];
    

    //$filename = ' .$imageName . ';
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $pdf . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($pdf);
    }
?>