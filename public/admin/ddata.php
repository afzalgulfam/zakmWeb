<!doctype html>
<html lang="en">
  <head>
    <title>Zakm</title>
    <link rel="icon" href="../assets/img/logo2.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <style type="text/css">
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    html,
    body {
    height: 100%;
    }
    html {
    background: linear-gradient(to right bottom, white, #5D9AB9);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    background-attachment: fixed;
    }
    body {
    font-family: sans-serif;
    line-height: 1.4;
    display: flex;
    }
    .container {
    width: 400px;
    margin: auto;
    padding: 36px 48px 48px 48px;
    background-color: #f2efee;
    border-radius: 11px;
    box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.15);
    }
    .login-title {
    padding: 15px;
    font-size: 22px;
    font-weight: 600;
    text-align: center;
    }
    .login-form {
    display: grid;
    grid-template-columns: 1fr;
    row-gap: 16px;
    }
    .login-form label {
    display: block;
    margin-bottom: 8px;
    }
    .login-form input {
    width: 100%;
    padding: 1.2rem;
    border-radius: 9px;
    border: none;
    }
    .login-form input:focus {
    outline: none;
    box-shadow: 0 0 0 4px rgba(253, 242, 233, 0.5);
    }
    .btn--form {
    background-color: #5D9AB9;
    color: #fdf2e9;
    align-self: end;
    padding: 8px;
    }
    .btn,
    .btn:link,
    .btn:visited {
    display: inline-block;
    text-decoration: none;
    font-size: 20px;
    font-weight: 600;
    border-radius: 9px;
    border: none;
    cursor: pointer;
    font-family: inherit;
    transition: all 0.3s;
    }
    button {
    outline: 1px solid #5D9AB9;
    }
    .btn--form:hover {
    background-color: #5D9AB9;
    color: #f48982;
    }
    </style>
    <div class="container">
      <center><img src="../assets/img/logo2.png" alt="logo icon" width="80"></center><br>
      <?php
      include "conn/conn.php";
      $data = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `soft` WHERE id = 1"));
      $fname = $data['soft_name'];
      ?>
      <center><a href="uploads/<?php echo $fname; ?>" download class="btn btn--form">Download Free</a></center>
    </div>
  </body>
</html>