<?php
include '../config.php';

if(isset($_POST['login'])){
    $l_short_name = $_POST['l_short_name'];
    $l_pass = $_POST['l_pass'];

    $result = mysqli_query($conn,"SELECT * FROM `teacher_register` WHERE short_name='$l_short_name' And password='$l_pass'");

    if(mysqli_num_rows($result)>0){
    session_start();
    $_SESSION['short_name']=$l_short_name;
    echo "<script>location.href='indexTeacher.php'</script>";
    }

else{
    echo "<script>alert('Incorrect Name & Password!')</script>";
    echo "<script>location.href='teacherLogin.html'</script>";
}
}