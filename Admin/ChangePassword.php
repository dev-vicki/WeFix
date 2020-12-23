<?php 
define('TITLE', 'Change Password');
define('PAGE', 'Change Password');
include('../dbConnection.php');
include('./include/header.php');
session_start();
if($_SESSION['is_adminlogin']){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href='login.php'</script>";
}
$aEmail = $_SESSION['aEmail'];
if(isset($_REQUEST['passwordUpdate'])){
  if($_REQUEST['aPassword'] == ""){
    $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">No Input Detected</div>';
  } else{
    $aPass = $_REQUEST['aPassword'];
    $sql = "UPDATE adminlogin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
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
<input type="email" class="form-control" id="inputEmail" value="<?php echo $aEmail; ?>" readonly>
</div>
<div class="form-group">
<label for="inputnewpassword">New Password</label>
<input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="aPassword">
</div>
<button type="submit" class="btn btn-success mr-4 mt-4" name="passwordUpdate">Update</button>
<button type="reset" class="btn btn-secondary mr-4 mt-4">Reset</button>
<?php if(isset($passmsg)) {echo $passmsg;} ?>
</form>
</div>



<?php 
include('./include/footer.php');
?>