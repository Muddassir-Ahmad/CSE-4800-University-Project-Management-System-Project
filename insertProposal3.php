<?php
include 'config.php';
$p_name = $_POST['p_name'];
$p_supervisor = $_POST['p_supervisor'];
$p_code = $_POST['p_code'];
// $p_members = $_POST['p_member'];
$s1_name = $_POST['s1_name'];
$s1_id = $_POST['s1_id'];

$s2_name = $_POST['s2_name'];
$s2_id = $_POST['s2_id'];

$s3_name = $_POST['s3_name'];
$s3_id = $_POST['s3_id'];

// $email = $_POST['email'];
// $phone = $_POST['phone'];
$p_proposal = $_FILES['p_proposal'];

$imageLocation = $p_proposal['tmp_name'];
$imageName = $p_proposal['name'];

// $imageLocation = $image['tmp_name'];
// $imageName = $image['name'];

//dynamically image name change howar jonno
// $image_des = "image/".$imageName;
$image_des = "proposal/" . $imageName;

//method
move_uploaded_file($imageLocation, $image_des);
// echo $r_image.$imageLocation.$image_des;
// echo $r_username.$r_pass.$_con_pass.$r_email.$r_mobile;

// $emailPattern = "/[a-z]+[0-9]*@(gmail|yahoo)\.com/";
// $emailPattern ="/(a-z)_{3,10}@lus\.ac\.bd/";
// $mobilePattern = "/(\+88-|\+88)?01[3-9]\d{8}/";
// $passPattern = "/((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%&])).{8,20}/ ";

//same name user
// $duplicate_id = mysqli_query($conn,"SELECT * FROM `proposal` WHERE student_id='$r_name'");
$duplicate_id = mysqli_query($conn, "SELECT * FROM `proposal` WHERE s1_id='$s1_id' AND s2_id='$s2_id' AND s3_id='$s3_id' AND project_code='CSE-3300'");
$duplicate_id1 = mysqli_query($conn, "SELECT * FROM `proposal` WHERE s1_id='$s1_id' AND s2_id='$s2_id' AND s3_id='$s3_id' AND project_code='CSE-4800'");



// if(strlen($r_name)<3 || strlen($r_name)>30){
//     echo "<script>alert('3-20 char username is allowed!')</script>";
//     echo "<script>location.href='one.php'</script>";
//  }
// if(!preg_match($emailPattern,$r_email)){
//     echo "<script>alert('Invalid email!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }
// if(!preg_match($passPattern,$r_pass)){
//     echo "<script>alert('Invalid Password!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }

// else if($r_pass!==$r_con_pass){
//     echo "<script>alert('Password not matched!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }

// else if(!preg_match($mobilePattern,$r_mobile)){
//     echo "<script>alert('Invalid mobile number!')</script>";
//     echo "<script>location.href='teacherReg.html'</script>";
// }
//duplicate name check
// else if(mysqli_num_rows($duplicate_username)>0){
//     echo "<script>alert('Username already taken!')</script>";
//     echo "<script>location.href='studentReg.html'</script>";
// }
if (mysqli_num_rows($duplicate_id) > 0) {
    echo "<script>alert('Student ID already Submitted!')</script>";
    echo "<script>location.href='proposal.php'</script>";
} 
else if (mysqli_num_rows($duplicate_id1) > 0) {
    echo "<script>alert('Student ID already Submitted!')</script>";
    echo "<script>location.href='proposal.php'</script>";
} 



else {



    // $insert_query = "INSERT INTO `teacher_register`(`name`, `email`, `short_name`, `department`, `designation`, `password`, `mobile`,`image`) VALUES ('$r_name','$r_email','$r_short_name','$r_dept','$r_des','$r_pass','$r_mobile','$image_des')";

    $insert_query = "INSERT INTO `proposal`(`p_name`, `p_supervisor`,`project_code`, `s1_name`, `s1_id`,`s2_name`,`s2_id`, `s3_name`, `s3_id`,`proposal`) VALUES ('$p_name','$p_supervisor','$p_code','$s1_name','$s1_id','$s2_name','$s2_id','$s3_name','$s3_id','$image_des')";

    if (!mysqli_query($conn, $insert_query)) {
        die("Proposal Submission Failed!");
    } else {
        echo "<script>alert('Proposal Submitted!')</script>";
        echo "<script>location.href='index.php'</script>";
    }
}
