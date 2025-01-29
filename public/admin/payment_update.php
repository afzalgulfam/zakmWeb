<?php
session_start();
include "conn/conn.php";
if(isset($_POST['payment_id'])){
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
$payment_id=$_POST['payment_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mobile_number=$_POST['mobile_number'];
$key_name=$_POST['key_name'];
$plan = $_POST['plan'];
$sql = "INSERT INTO `p_user`(`id`, `date_time`, `name`, `email`, `mobile_number`, `key_name`, `payment_id`,`plan`) VALUES (null,'$currentTime','$name','$email','$mobile_number','$key_name','$payment_id','$plan')";
$sql1 = "DELETE FROM `all_key` WHERE key_name='$key_name'";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
}
?>