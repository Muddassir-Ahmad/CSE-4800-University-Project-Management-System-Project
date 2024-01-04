<?php
include 'config.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$details = $_POST['details'];


$insert_query = "INSERT INTO `feedback`(`name`, `email`, `phone`, `subject`, `details`) VALUES ('$name','$email','$phone','$subject','$details')";
if (!mysqli_query($conn, $insert_query)) {
    die("Not Inserted to DB!");
} else {
    echo "<script>alert('Feedback Sent!')</script>";
    echo "<script>location.href='contact.php'</script>";
}
