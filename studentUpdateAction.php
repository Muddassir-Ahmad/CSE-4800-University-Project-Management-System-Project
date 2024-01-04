<?php
include 'config.php';
$id = $_REQUEST['id'];
$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_id = $_POST['r_id'];
$r_dept = $_POST['r_dept'];
$r_batch = $_POST['r_batch'];
$r_sec = $_POST['r_sec'];
$r_pass = $_POST['r_pass'];
$r_mobile = $_POST['r_mobile'];

$updateQuery ="UPDATE `register` SET `name`='$r_name',`email`='$r_email',`student_id`='$r_id',`department`='$r_dept',`batch`='$r_batch',`section`='$r_sec',`password`='$r_pass',`mobile`='$r_mobile' WHERE id='$id'";


if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Profile Not Updated!')</script>";
    echo "<script>location.href='profile.php'</script>";
}
else{
    echo "<script>alert('Information Updated!')</script>";
    echo "<script>location.href='profile.php'</script>";
}