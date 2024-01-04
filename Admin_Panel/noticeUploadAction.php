<?php 

include '../config.php';

$p_name = $_POST['topic'];
$p_des = $_POST['t_description'];
$image=$_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

//dynamically image name change howar jonno
$image_des = "../image/".$imageName;


move_uploaded_file($imageLocation,$image_des);


$insert_query = "INSERT INTO `notice`(`t_name`, `t_des`, `t_image`) VALUES  ('$p_name','$p_des','$image_des')";

    if(!mysqli_query($conn,$insert_query)){

            die ("Not inserted");

        }else{

            // echo "<script>alert('Notice Uploaded')</script>";
            echo "<script>location.href='noticeUpload.php'</script>";
           
        }


?>