<?php
include '../config.php';
$id = $_REQUEST['id'];
// echo $id;

$a_supervisor = $_POST['a_supervisor'];

$sum = 0;
$swl = mysqli_query($conn, "SELECT * FROM `proposal` where assigned='$a_supervisor'");
while ($row = mysqli_fetch_array($swl)) {
    $sum++;
}

if ($sum < 4) {
    $updateQuery = "UPDATE `proposal` SET `assigned`='$a_supervisor' WHERE id='$id'";
    echo "<script>alert('Supervisor Assigned!')</script>";
    echo "<script>location.href='proposalData.php'</script>";
    if (!mysqli_query($conn, $updateQuery)) {
        echo "<script>alert('Supervisor Not Assigned!')</script>";
        echo "<script>location.href='proposalData.php'</script>";
    }
} else {
    echo "<script>alert('Supervisor Slot Limit Reached!')</script>";
    echo "<script>location.href='proposalData.php'</script>";
}

?>