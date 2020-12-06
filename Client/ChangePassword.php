<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include('include/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
} else {
  echo "<script> location.href='RequesterLogin.php'</script>";
}
$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passwordUpdate'])){
  if($_REQUEST['rPassword'] == ""){
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">No Input Detected</div>';
  } else{
    $rPass = $_REQUEST['rPassword'];
    $sql = "UPDATE requesterlogin_tb SET r_password = '$rPass' WHERE r_email = '$rEmail'";
    if($conn->query($sql) == TRUE){
    $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
    } else{
    $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
        }
  }

}


?>

<div class="col-sm-6 mt-5">
<form class="mt-5 mx-5" action="" method="POST" >
<div class="form-group">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" value="<?php echo $rEmail; ?>" readonly>
</div>
<div class="form-group">
<label for="inputnewpassword">New Password</label>
<input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="rPassword">
</div>
<button type="submit" class="btn btn-success mr-4 mt-4" name="passwordUpdate">Update</button>
<button type="reset" class="btn btn-secondary mr-4 mt-4">Reset</button>
<?php if(isset($passmsg)) {echo $passmsg;} ?>
</form>
</div>




<?php 
include('include/footer.php');
?>