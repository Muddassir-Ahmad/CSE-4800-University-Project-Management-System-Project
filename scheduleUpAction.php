<?php 

include 'config.php';

$p_code = $_POST['p_code'];
$s_date = $_POST['s_date'];

$schedulepdf=$_FILES['s_pdf'];

$pdfLocation = $schedulepdf['tmp_name'];
$pdfName = $schedulepdf['name'];


//dynamically image name change howar jonno
$pdf_des = "Schedule/" .$pdfName;


move_uploaded_file($pdfLocation,$pdf_des);


$insert_query = "INSERT INTO `schedule`(`p_code`, `s_date`, `s_pdf`) VALUES ('$p_code','$s_date','$pdf_des')";

    if(!mysqli_query($conn,$insert_query)){

            die ("Not inserted");

        }else{

            echo "<script>alert('Schedule Uploaded')</script>";
            echo "<script>location.href='Admin_Panel/adminPanel.php'</script>";
           
        }


?>