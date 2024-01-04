<?php
include '../config.php';
$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_short_name = $_POST['r_short_name'];
$r_dept = $_POST['r_dept'];
$r_des = $_POST['r_des'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$r_mobile = $_POST['r_mobile'];
$image=$_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

//dynamically image name change howar jonno
$image_des = "image/".$imageName;

//method
move_uploaded_file($imageLocation,$image_des);
// echo $r_image.$imageLocation.$image_des;
// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

    // $emailPattern = "/[a-z]+[0-9]*@(gmail|yahoo)\.com/";
    // $emailPattern ="/(a-z)_{3,10}@lus\.ac\.bd/";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";
    
//same name user
$duplicate_tshort = mysqli_query($conn,"SELECT * FROM `teacher_register` WHERE short_name='$r_short_name'");


// if(strlen($r_name)<3 || strlen($r_name)>30){
//     echo "<script>alert('3-20 char username is allowed!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }
// if(!preg_match($emailPattern,$r_email)){
//     echo "<script>alert('Invalid email!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }
if(!preg_match($passPattern,$r_pass)){
    echo "<script>alert('Invalid Password!')</script>";
    echo "<script>location.href='teacherReg.html'</script>";
}

else if($r_pass!==$r_con_pass){
    echo "<script>alert('Password not matched!')</script>";
    echo "<script>location.href='teacherReg.html'</script>";
}

else if(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Invalid mobile number!')</script>";
    echo "<script>location.href='teacherReg.html'</script>";
}
//duplicate name check
else if(mysqli_num_rows($duplicate_tshort)>0){
    echo "<script>alert('Teacher already Registered!')</script>";
    echo "<script>location.href='teacherReg.html'</script>";
}

else{
    $insert_query = "INSERT INTO `teacher_register`(`name`, `email`, `short_name`, `department`, `designation`, `password`, `mobile`,`image`) VALUES ('$r_name','$r_email','$r_short_name','$r_dept','$r_des','$r_pass','$r_mobile','$image_des')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            // echo "<script>alert('Inserted to DB!')</script>";
            echo "<script>location.href='teacherLogin.html'</script>";
        }
    
}