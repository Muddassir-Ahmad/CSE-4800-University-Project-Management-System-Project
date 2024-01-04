

<?php

include '../config.php';

$result = mysqli_query($conn, "SELECT proposal FROM proposal");

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo '<td><a href="up.php">'.$row['proposal']. '</a></td>';
    }
}
mysqli_free_result($result);

?>


