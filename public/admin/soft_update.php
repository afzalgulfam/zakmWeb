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
                <div class="card-title">Billing Software Form</div>
                <hr>
                <?php
                if(isset($_POST['submit'])) {
                $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `soft` WHERE id = 1"));
                $fname = $data['soft_name'];
                unlink("uploads/".$fname);
                $img1 = $_FILES["soft_name"]["name"];
                $basename1 = substr($img1, 0, strripos($img1, '.')); // get file name
                $file_ext1 = substr($img1, strripos($img1, '.')); // get file extention
                $newfilename1 = $basename1.$file_ext1;
                $sql = "UPDATE `soft` SET `soft_name`='$newfilename1' WHERE id = 1";
                if(mysqli_query($conn, $sql)) {
                move_uploaded_file($_FILES["soft_name"]["tmp_name"], "uploads/" . $newfilename1);
                echo "<script>alert('New Data Add Successfully!')</script>";
                echo " <script> window.location.href='soft.php'; </script>";
                }
                else {
                echo "<script>alert('something wrong😔..')</script>";
                }
                }
                ?>
                <form method="POST" enctype="multipart/form-data" action="soft_update.php">
                    <div class="form-group">
                        <label for="input-1">Import Billing Software with Only (.msi and .exe file) Extension</label>
                        <input type="file" name="soft_name" class="form-control" id="file" onchange="return fileValidation()">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-light px-5" onclick="myFunction()" id="m"> Update</button>
                    </div>
                </form>
                <div id="myDIV" style="display: none;">
                    <p class="btn btn-light px-5"> Update</p>
                    <div class="spinner-border" role="status">
                        <span class="visually-hidden"></span>
                    </div>
                </div>
                <script>
                function myFunction() {
                var x = document.getElementById('myDIV');
                var m = document.getElementById('m');
                x.style.display = 'block';
                m.style.display = 'none';
                }
                </script>
            </div>
        </div>
    </div>
    </div><!--End Row-->
    <script>
    function fileValidation() {
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    // Allowing file type
    var allowedExtensions = /(\.msi|\.exe)$/i;
    if (!allowedExtensions.exec(filePath)) {
    alert('Invalid file type');
    fileInput.value = '';
    return false;
    }
    if (fileInput.files.length > 0) {
    for (const i = 0; i <= fileInput.files.length - 1; i++) {
    const fsize = fileInput.files.item(i).size;
    const file = Math.round((fsize / 1024));
    // The size of the file.
    if (file >= 200000) {
    alert("File too Big, please select a file less than 200mb");
    fileInput.value = '';
    return false;
    }
    }
    }
    else
    {
    // Image preview
    if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    // document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result+ '"/>';
    };
    reader.readAsDataURL(fileInput.files[0]);
    }
    }
    }
    </script>
    <?php include 'include/footer.php'; ?>