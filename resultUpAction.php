<?php 

include 'config.php';

$p_name = $_POST['topic'];
$date = $_POST['date'];

$image=$_FILES['image'];

$imageLocation = $image['tmp_name'];
$imageName = $image['name'];


//dynamically image name change howar jonno
$image_des = "Result/" .$imageName;


move_uploaded_file($imageLocation,$image_des);


$insert_query = "INSERT INTO `result`(`c_code`, `date`, `resultpdf`) VALUES ('$p_name','$date ','$image_des')";

    if(!mysqli_query($conn,$insert_query)){

            die ("Not inserted");

        }else{

            echo "<script>alert('Result Uploaded')</script>";
            echo "<script>location.href='Admin_Panel/adminPanel.php'</script>";
           
        }


?>