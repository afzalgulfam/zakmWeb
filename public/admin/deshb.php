<?php
session_start();
include "conn/conn.php";
$usernam = $_SESSION['user_n'];
if ($usernam  == true) {}
else{ header('location:index.php'); }
?>
<?php include 'include/header.php'; ?>
<!--Start Row-->
<div class="row row-group m-0">
  <div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
      <h5 class="text-white mb-0"><?php echo $total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `soft` WHERE 1")); ?> <span class="float-right"><i class="zmdi zmdi-case-download"></i></span></h5>
      <div class="progress my-3" style="height:3px;">
        <div class="progress-bar" style="width:55%"></div>
      </div>
      <p class="mb-0 text-white small-font">Total Billing Software
        <span class="float-right">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </span>
      </p>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
      <h5 class="text-white mb-0"><?php echo $total1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `all_key` WHERE 1")); ?> <span class="float-right"><i class="zmdi zmdi-8tracks"></i></span></h5>
      <div class="progress my-3" style="height:3px;">
        <div class="progress-bar" style="width:55%"></div>
      </div>
      <p class="mb-0 text-white small-font">Total Keys <span class="float-right"> <i class="zmdi zmdi-long-arrow-up"></i></span></p>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
      <h5 class="text-white mb-0"><?php echo $total1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `d_user` WHERE 1")); ?> <span class="float-right"><i class="zmdi zmdi-account-circle"></i></span></h5>
      <div class="progress my-3" style="height:3px;">
        <div class="progress-bar" style="width:55%"></div>
      </div>
      <p class="mb-0 text-white small-font">Downloading Users <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
    </div>
  </div>
  <div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
      <h5 class="text-white mb-0"><?php echo $total1 = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `p_user` WHERE 1")); ?> <span class="float-right"><i class="zmdi zmdi-account-circle"></i></span></h5>
      <div class="progress my-3" style="height:3px;">
        <div class="progress-bar" style="width:55%"></div>
      </div>
      <p class="mb-0 text-white small-font">Purchasing Users <span class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
    </div>
  </div>
  
</div>
<!--End Row-->
<?php include 'include/footer.php'; ?>