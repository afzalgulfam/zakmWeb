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
        <h3 class="card-title" style="color: black; font-size: 25px;"><u>Purchasing Users Table</u> </h3>
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Payment ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile No.</th>
                <th scope="col">Key</th>
                 <th scope="col">Address</th>
                   <th scope="col">StartDate</th>
                    <th scope="col">EndDate</th>
                    <th scope="col">IsPaymentReceived</th>
                    <th scope="col">Machine Code</th>
                    <th scope="col">AgentId</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  $i=0;
                  $qry = mysqli_query($conn, "SELECT * FROM `p_user` WHERE 1 order by id desc");
                  while ($row = mysqli_fetch_array($qry)) {
                  $i++;
                ?>
                <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['date_time']; ?></td>
                <td><?php echo $row['payment_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile_number']; ?></td>
                <td><?php echo $row['key_name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['is_payment_received']; ?></td>
                <td><?php echo $row['machine_code']; ?></td>
                <td><?php echo $row['agent_id']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
    </div>
  </div>
  </div><!--End Row-->
    <script>
        /* Initialization of datatables */
        $(document).ready(function () {
            $('table').DataTable();
        });
    </script>
	 <?php include 'include/footer.php'; ?>