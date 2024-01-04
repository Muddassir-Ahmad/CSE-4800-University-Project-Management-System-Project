<?php 

include '../config.php';

$p_name = $_POST['topic'];
$p_des = $_POST['t_description'];
$c_code = $_POST['c_code'];
$image=$_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$time = $_POST['time'];

//dynamically image name change howar jonno
$image_des = "../image/".$imageName;


move_uploaded_file($imageLocation,$image_des);


$insert_query = "INSERT INTO `requirement`(`t_name`, `c_code`, `t_details`, `t_image`, `time`) VALUES  ('$p_name','$c_code','$p_des','$image_des','$time')";

    if(!mysqli_query($conn,$insert_query)){

            die ("Not inserted");

        }else{

            echo "<script>alert('Requirement Uploaded')</script>";
            echo "<script>location.href='reqUpload.php'</script>";
           
        }


?>