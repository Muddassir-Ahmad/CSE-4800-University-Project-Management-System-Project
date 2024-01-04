<?php
include 'config.php';

if(isset($_POST['login'])){
    $l_id = $_POST['l_id'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `register` WHERE student_id='$l_id' And password='$l_pass' AND approve='approved'");

    if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['student_id']=$l_id;
    echo "<script>location.href='index.php'</script>";
    }

else{
    echo "<script>alert('Incorrect ID & Password! Or Unapproved')</script>";
    echo "<script>location.href='studentLogin.html'</script>";
}
}