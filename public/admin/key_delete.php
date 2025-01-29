<?php
include "conn/conn.php";
$id= $_GET['id'];
$query = "DELETE FROM all_key WHERE `all_key`.`id` = '$id'";
if (mysqli_query($conn, $query)) {
echo "<script>alert('Record has been Delete successfully!')</script>";
}
else {
echo "Error: " . $query . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
include_once 'key.php';
?>