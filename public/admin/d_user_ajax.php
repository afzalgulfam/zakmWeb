<?php
include "conn/conn.php";
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
 $mobile_number=$_POST['mobile_number'];
 $sql = "INSERT INTO `d_user`(`id`, `date_time`, `mobile_number`) VALUES (NULL, '$currentTime', '$mobile_number')";
mysqli_query($conn, $sql);
?>