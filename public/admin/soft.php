<?php
session_start();
include "conn/conn.php";
$usernam = $_SESSION['user_n'];
if ($usernam  == true) {}
else{ header('location:index.php'); }
?>
<?php include 'include/header.php'; ?>
<!--Start Row-->
<div class="row mt-3">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Billing Software Table <a href="soft_update" class="btn btn-info btn-icon me-3 my-5 mt-xl-0" style="float: right;">Update Billing Software</a></h3>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Billing Software Name</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $i=0;
                $qry = mysqli_query($conn, "SELECT * FROM `soft` WHERE 1");
                while ($row = mysqli_fetch_array($qry)) {
                $i++;
                ?>
                <td><?php echo $row['soft_name']; ?></td>
                <?php } ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div><!--End Row-->
  <?php include 'include/footer.php'; ?>