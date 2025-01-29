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
    <div class="col-lg-12 px-5">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Keys Form</div>
                <hr>
                <?php
                if(isset($_POST['submit'])) {
                $key_name = $_POST['key_name'];
                $sql = "INSERT INTO `all_key`(`id`, `key_name`) VALUES (null, '$key_name')";
                if(mysqli_query($conn, $sql)) {
                echo "<script>alert('New Data Add Successfully!')</script>";
                echo " <script> window.location.href='key.php'; </script>";
                }
                else {
                echo "<script>alert('something wrong😔..')</script>";
                }
                }
                ?>
                <form method="POST">
                    <div class="form-group">
                        <label for="input-1">Name</label>
                        <input type="text" name="key_name" class="form-control" placeholder="Enter Your Key">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-light px-5">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div><!--End Row-->
    <?php include 'include/footer.php'; ?>