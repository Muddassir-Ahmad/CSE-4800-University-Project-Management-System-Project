<?php
include '../config.php';
$id = $_GET['id'];
// echo $id;

//query create kore
$delete_query = "DELETE FROM `register` where id='$id' ";

//query chalate hoy
mysqli_query($conn,$delete_query);

//php diye redirect to index page
header("location:studentData.php");


?>