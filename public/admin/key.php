<?php
session_start();
include "conn/conn.php";
$usernam = $_SESSION['user_n'];
if ($usernam  == true) {}
else{ header('location:index.php'); }
?>
<?php include 'include/header.php'; ?>
<!--Datatable plugin CSS file -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />
<!--jQuery library file -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!--Datatable plugin JS library file -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<style type="text/css">
body {
color: black;
}
table, th, td {
border: 1px solid white;
border-collapse: collapse;
}
th, td {
background-color: #5D9AB9;
}
</style>
<!--Start Row-->
<div class="row " style="background-color: white;">
  <div class="col-lg-12">
    <h2 class="card-title" style="color: black; font-size: 25px;"><u>Keys Table</u>
    <span style="float: right;">
      <a href="key_add.php" class="btn btn-sm btn-dark"> <b>+Add Key</b> </a>
      <a href="import_key.php" class="btn btn-sm btn-success"> <b>+Import Excel</b> </a>
    </span>
    </h2>
    <div class="table-responsive">
      <table>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">key</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody style="color: black;">
          <?php
          $i=0;
          $qry = mysqli_query($conn, "SELECT * FROM `all_key` WHERE 1 order by id desc");
          while ($row = mysqli_fetch_array($qry)) {
          $i++;
          ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['key_name']; ?></td>
            <td><a href="key_delete.php? id=<?php echo $row['id']; ?>" title="" class="btn btn-sm" style="font-size: 20px; color: red;">  <b>🗑</b>  </a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--End Row-->
<script>
/* Initialization of datatables */
$(document).ready(function () {
$('table').DataTable();
});
</script>
<?php include 'include/footer.php'; ?>