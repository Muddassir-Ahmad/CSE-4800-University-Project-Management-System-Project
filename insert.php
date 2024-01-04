<?php
include 'config.php';



$r_name = $_POST['r_name'];
$r_email = $_POST['r_email'];
$r_id = $_POST['r_id'];
$r_dept = $_POST['r_dept'];
$r_batch = $_POST['r_batch'];
$r_sec = $_POST['r_sec'];
$r_pass = $_POST['r_pass'];
$r_con_pass = $_POST['r_con_pass'];
$r_mobile = $_POST['r_mobile'];
$image = $_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name']; //cake.jpg

$image_des = "image/".$imageName;

move_uploaded_file($imageLocation,$image_des);





// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

    // $emailPattern = "/[a-z]+[0-9]*@(gmail|yahoo)\.com/";
    $emailPattern ="/(cse|eee|law)_\d{10}@lus\.ac\.bd/";
    $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
    $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";
    
//same name user
$duplicate_stID = mysqli_query($conn,"SELECT * FROM `register` WHERE student_id='$r_id'");


if(strlen($r_name)<3 || strlen($r_name)>20){
    echo "<script>alert('3-20 char username is allowed!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}
else if(!preg_match($emailPattern,$r_email)){
    echo "<script>alert('Invalid email!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}
else if(!preg_match($passPattern,$r_pass)){
    echo "<script>alert('Invalid Password!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}

else if($r_pass!==$r_con_pass){
    echo "<script>alert('Password not matched!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}

else if(!preg_match($mobilePattern,$r_mobile)){
    echo "<script>alert('Invalid mobile number!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}
//duplicate name check
else if(mysqli_num_rows($duplicate_stID)>0){
    echo "<script>alert('Student already Registered!')</script>";
    echo "<script>location.href='studentReg.html'</script>";
}
else{
    $insert_query = "INSERT INTO `register`(`name`, `email`, `student_id`, `department`, `batch`, `section`, `password`, `mobile`, `image`) VALUES ('$r_name','$r_email','$r_id','$r_dept','$r_batch','$r_sec','$r_pass','$r_mobile','$image_des')";

    if(!mysqli_query($conn,$insert_query)){
        die("Not Inserted to DB!");}
        else{
            // echo "<script>alert('Inserted to DB!')</script>";
            echo "<script>location.href='studentLogin.html'</script>";
        }
    
}