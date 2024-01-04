<?php
include '../config.php';
$id = $_REQUEST['id'];
$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_short_name = $_POST['r_short_name'];
$r_dept = $_POST['r_dept'];
$r_des = $_POST['r_des'];
$r_pass = $_POST['r_pass'];
$r_mobile = $_POST['r_mobile'];

$updateQuery ="UPDATE `teacher_register` SET `name`='$r_name',`email`='$r_email',`short_name`='$r_short_name',`department`='$r_dept',`designation`='$r_des',`password`='$r_pass',`mobile`='$r_mobile' WHERE id='$id'";


if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Profile Not Updated!')</script>";
    echo "<script>location.href='profileTeacher.php'</script>";
}
else{
    echo "<script>alert('Information Updated!')</script>";
    echo "<script>location.href='profileTeacher.php'</script>";
}