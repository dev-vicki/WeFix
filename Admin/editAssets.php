<?php 
define('TITLE', 'Update Product');
define('PAGE', 'Products');
include('../dbConnection.php');
include('./include/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href = 'login.php'</script>";
}
?>


<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Update Product Details</h3>
    <?php 
    if(isset($_REQUEST['edit'])){
    $sql = "SELECT * FROM assets_tb WHERE pid = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    }

    if(isset($_REQUEST['pupdate'])){
    if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || 
    ($_REQUEST['paval'] == "") || ($_REQUEST['ptotal'] == "") || ($_REQUEST['pcostprice'] == "") || 
    ($_REQUEST['psellingprice'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
  } else{
    $pid = $_REQUEST['pid'];
    $p_name = $_REQUEST['pname'];
    $p_dop =  $_REQUEST['pdop'];
    $p_aval = $_REQUEST['paval'];
    $p_total = $_REQUEST['ptotal'];
    $p_costprice =  $_REQUEST['pcostprice'];
    $p_sellingprice = $_REQUEST['psellingprice'];
    $sql = "UPDATE assets_tb SET  p_name = '$p_name', p_dop = '$p_dop', p_aval = '$p_aval', p_total = '$p_total', 
    p_costprice = '$p_costprice', p_sellingprice = '$p_sellingprice' WHERE pid = '$pid'";
    if($conn->query($sql) == TRUE){
      $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
      } else {
        $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
  }
}
?> 
  <form action="" method="POST">
      <div class="form-group">
      <label for="pid">Product ID</label>
      <input type="text" class="form-control" id="pid" name="pid" value="<?php if(isset($row['pid'])) {echo $row['pid'];} ?>" readonly>
    </div>
    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="pname" name="pname" value="<?php if(isset($row['p_name'])) {echo $row['p_name'];} ?>">
    </div>
    <div class="form-group">
      <label for="pdop">Date of Purchase</label>
      <input type="date" class="form-control" id="pdop" name="pdop" value="<?php  if(isset($row['p_dop'])) {echo $row['p_dop'];} ?>">
    </div>
    <div class="form-group">
      <label for="paval">Availability</label>
      <input type="number" class="form-control" id="paval" name="paval" onKeypress="isInputNumber(event)" value="<?php if(isset($row['p_aval'])) {echo $row['p_aval'];} ?>">
    </div>
    <div class="form-group">
      <label for="ptotal">Total</label>
      <input type="number" class="form-control" id="ptotal" name="ptotal" onKeypress="isInputNumber(event)" value="<?php if(isset($row['p_total'])) {echo $row['p_total'];} ?>">
    </div>
    <div class="form-group">
      <label for="pcostprice">Original Price Each</label>
      <input type="text" class="form-control" id="pcostprice" name="pcostprice"
        onKeypress="isInputNumber(event)" value="<?php if(isset($row['p_costprice'])) {echo $row['p_costprice'];} ?>">
    </div>
    <div class="form-group">
      <label for="psellingprice">Selling Price Each</label>
      <input type="text" class="form-control" id="psellingprice" name="psellingprice" onKeypress="isInputNumber(event)"
      value="<?php if(isset($row['p_sellingprice'])) {echo $row['p_sellingprice'];} ?>">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="pupdate" name="pupdate">Update</button>
      <a href="assets.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg;} ?>
  </form>
</div>

<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>

<?php 
include('./include/footer.php');
?>
