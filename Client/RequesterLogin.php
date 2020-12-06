<?php 
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_REQUEST['rEmail'])){
$rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['rEmail']));
$rPassword = mysqli_real_escape_string($conn,  trim($_REQUEST['rPassword']));
$sql = "SELECT r_email, r_password FROM requesterlogin_tb WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
$result = $conn->query($sql);
if($result->num_rows == 1){
  $_SESSION['is_login'] = true;
  $_SESSION['rEmail'] = $rEmail;
  echo "<script> location.href='RequesterProfile.php';</script>";
  exit; 
} else{
  $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
}
}
} else {
  echo "<script> location.href='RequesterProfile.php';</script>";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">
  <title>Login</title>
</head>

<body>
  <div class="container pt-5">
    <h2 class="text-center">User Login</h2>
    <div class="row mt-4 mb-4 mt-5">
      <div class="col-md-6 offset-md-3">
        <form action="" class="shadow-lg p-5" method="POST">
          <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="email" class="font-weight-bold pl-2">Email</label>
            <input type="email" class="form-control" placeholder="Email" name="rEmail" required>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i>
            <label for="password" class="font-weight-bold pl-2">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="rPassword" required>
          </div>
          <button type="submit" class="btn btn-outline-light btn-lg mt-4 btn-block shadow-sm" name="rLogin"
            style="background-color:#6900d1">Login</button>
            <?php if(isset($msg)) {echo $msg; } ?>
        </form>
        <div class="text-center"><a href="../index.php" class="btn btn-outline-light mt-3 text-white shadow-sm"
            style="background-color:#6900d1">Back To Home</a></div>
      </div>
    </div>
  </div>



  <!-- JS Files -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>

</html>