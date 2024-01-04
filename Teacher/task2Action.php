<?php
include '../config.php';
$id = $_REQUEST['id'];

$task = $_POST['task'];


$updateQuery ="UPDATE `proposal` SET `task`='$task' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Task Not Assigned!')</script>";
    echo "<script>location.href='4800.php'</script>";
}
else{
    echo "<script>alert('Task Assigned!')</script>";
    echo "<script>location.href='4800.php'</script>";
}