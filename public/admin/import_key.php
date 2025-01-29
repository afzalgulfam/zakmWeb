<?php
error_reporting(0);
session_start();
include "conn/conn.php";
$tokn = $_SESSION['tok'];
$usernam = $_SESSION['user_n'];
if ($usernam  == true) { } else{ header('location:index.php'); }
?>
<?php include 'include/header.php'; ?>
<div class="container-fluid">
	
	<div class="row">
		<div class="col-lg-12 d-flex align-items-stretch">
			<div class="card w-100">
				<div class="card-body p-4">
					<h5 class="card-title fw-semibold mb-4">Import Key By Excel <a href="excel_format/key.xlsx" class="btn btn-sm btn-dark"> <b>Excel Format</b> </a> <- Only use this Format</h5>
					<form class="" action="" method="post" enctype="multipart/form-data">
						<input type="file" name="excel" required value="" class="form-control form-control-sm">
						<center><button type="submit" class="btn btn-sm btn-info w-25 mt-4" name="import" style=" font-size: 11px;">Import</button></center>
					</form>
					<?php
					if(isset($_POST["import"])){
						$fileName = $_FILES["excel"]["name"];
						$fileExtension = explode('.', $fileName);
					$fileExtension = strtolower(end($fileExtension));
						$newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;
						$targetDirectory = "excel_format/product_uplode_data_datewise/" . $newFileName;
						move_uploaded_file($_FILES['excel']['tmp_name'], $targetDirectory);
						error_reporting(0);
						ini_set('display_errors', 0);
						require 'excelReader/excel_reader2.php';
						require 'excelReader/SpreadsheetReader.php';
						$reader = new SpreadsheetReader($targetDirectory);
						foreach($reader as $key => $row){
					$key_name = $row[0];
					mysqli_query($conn, "INSERT INTO `all_key`(`id`, `key_name`) VALUES (null,'$key_name')");
						}
					echo "<script>alert('Product Succesfully Imported');
					document.location.href = 'key.php';
					</script>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'include/footer.php'; ?>