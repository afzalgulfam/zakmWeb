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
    <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
    <div id="wrapper">
      <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
      <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="text-center">
              <img src="../assets/img/logo2.png" alt="logo icon" width="80">
            </div>
            <div class="card-title text-uppercase text-center py-3">Sign In</div>
            <form method="post">
              <div class="form-group">
                <label for="exampleInputUsername" class="sr-only">Username</label>
                <div class="position-relative has-icon-right">
                  <input type="text" name="admin_name" id="email"  class="form-control input-shadow" placeholder="Enter Username">
                  <div class="form-control-position">
                    <i class="icon-user"></i>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                  <input type="password" name="password" id="myInput" class="form-control input-shadow" placeholder="Enter Password">
                  <div class="form-control-position">
                    <input type="checkbox" onclick="myFunction()">
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-6">
                  <div class="icheck-material-white">
                    <input type="checkbox" id="rememberMe" checked="" />
                    <label for="rememberMe">Remember me</label>
                  </div>
                </div>
                <div class="form-group col-6 text-right">
                  <a href="mail/simplemfp">Forgot Password</a>
                </div>
              </div>
              <button type="submit" name="submit" onclick="lsRememberMe()" class="btn btn-light btn-block">Sign In</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
            $admin_name = $_POST['admin_name'];
            $pwd = $_POST['password'];
            $result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `admin` WHERE admin_name ='$admin_name' && password = '$pwd'"));
            if (!empty($result)) {
            $_SESSION['user_n'] = $admin_name;
            echo " <script> window.location.href='deshb'; </script>";
            }else{
            echo "<script>alert('ID and Password is Wrong😔..')</script>";
            }}
            ?>
            <script type="text/javascript">
            const rmCheck = document.getElementById("rememberMe"),
            emailInput = document.getElementById("email");
            if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
            } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
            }
            function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
            localStorage.username = emailInput.value;
            localStorage.checkbox = rmCheck.value;
            } else {
            localStorage.username = "";
            localStorage.checkbox = "";
            }
            }
            </script>
          </div>
        </div>
      </div>
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <div class="right-sidebar">
        <div class="switcher-icon">
          <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
        </div>
        <div class="right-sidebar-content">
          <p class="mb-0">Gaussion Texture</p>
          <hr>
          <ul class="switcher">
            <li id="theme1"></li>
            <li id="theme2"></li>
            <li id="theme3"></li>
            <li id="theme4"></li>
            <li id="theme5"></li>
            <li id="theme6"></li>
          </ul>
          <p class="mb-0">Gradient Background</p>
          <hr>
          <ul class="switcher">
            <li id="theme7"></li>
            <li id="theme8"></li>
            <li id="theme9"></li>
            <li id="theme10"></li>
            <li id="theme11"></li>
            <li id="theme12"></li>
            <li id="theme13"></li>
            <li id="theme14"></li>
            <li id="theme15"></li>
          </ul>
        </div>
      </div>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
    }
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/app-script.js"></script>
  </body>
</html>