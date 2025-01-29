<?php
session_start();
error_reporting(0);
include "conn/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Zakm</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../assets/img/logo2.png" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
  </head>
  <body class="bg-theme bg-theme1"><br><br><br><br><br>
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
    <!-- end loader -->
    <!-- Start wrapper-->
    <div id="wrapper">
      <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
      <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="text-center">
              <img src="../assets/img/logo2.png" alt="logo icon" width="80">
            </div>
            <div class="card-title text-uppercase text-center py-3">Reset Password</div>
            <form method="post">
              <div class="form-group">
                <div class="position-relative has-icon-right">
                  <input type="text" name="old" id="email"  class="form-control input-shadow" placeholder="Enter Old Password">
                </div>
              </div>
              <div class="form-group">
                <div class="position-relative has-icon-right">
                  <input type="text" name="new" id="myInput" class="form-control input-shadow" placeholder="Enter New Password">
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-light btn-block">Update</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
            $old = $_POST['old'];
            $new = $_POST['new'];
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE password = '$old'"));
            if (!empty($result)) {
            $sql = "UPDATE `admin` SET `password`='$new' WHERE id = 1";
            mysqli_query($conn, $sql);
            echo "<script>alert('Password Change Successfully!')</script>";
            echo " <script> window.location.href='index'; </script>";
            }else{
            echo "<script>alert('Old Password is Wrong😔..')</script>";
            }}
            ?>
          </div>
        </div>
      </div>
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      </div><!--wrapper-->
      <!-- Bootstrap core JavaScript-->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- sidebar-menu js -->
      <script src="assets/js/sidebar-menu.js"></script>
      <!-- Custom scripts -->
      <script src="assets/js/app-script.js"></script>
    </body>
  </html>