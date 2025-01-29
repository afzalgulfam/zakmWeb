<?php
    $servername='localhost';
    $username='u306478443_zakm';
    $password='Zakm@@@1234';
    $dbname = "u306478443_zakm";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
die('Could not Connect MySql Server:' .mysql_error());
}
?>
