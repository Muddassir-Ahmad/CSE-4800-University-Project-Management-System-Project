<?php
include 'config.php';
$id = $_REQUEST['id'];

$Updateimage = $_FILES['image'];

$imageLocation = $Updateimage['tmp_name'];
$imageName = $Updateimage['name']; //cake.jpg

$image_des = "image/".$imageName;

move_uploaded_file($imageLocation,$image_des);


$updateQuery ="UPDATE `register` SET `image`='$image_des' WHERE id='$id'";

if(!mysqli_query($conn,$updateQuery)){
    echo "<script>alert('Photo not Uploaded!')</script>";
    echo "<script>location.href='profile.php'</script>";
}
else{
    echo "<script>alert('Photo Uploaded!')</script>";
    echo "<script>location.href='profile.php'</script>";
}