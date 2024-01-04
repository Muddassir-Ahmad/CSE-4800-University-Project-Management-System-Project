<?php
include 'config.php';
if (isset($_POST['view'])) {
    $allData = mysqli_query($conn, "SELECT * FROM `proposal`");
    $row = mysqli_fetch_array($allData);

    header("content-type:application/pdf");
    //readfile('file/sample.pdf');
    readfile($row['proposal']);
}






?>



<!DOCTYPE html>
<html>

<head>

    <title>pdf</title>
    <style  type ="text/css">
       
    </style>

</head>

<body>


    <form action="" method="post">


        <button name="view"> View File</button>

    </form>



</body>

</html>