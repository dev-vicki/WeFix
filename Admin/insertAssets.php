<?php 
define('TITLE', 'Add New Products');
define('PAGE', 'Products');
include('../dbConnection.php');
include('./include/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href = 'login.php'</script>";
}
if(isset($_REQUEST['psubmit'])){
  if(($_REQUEST['pname'] == "") || ($_REQUEST['pdop'] == "") || ($_REQUEST['paval'] == "") || ($_REQUEST['ptotal'] == "") || 
  ($_REQUEST['pcostprice'] == "") || ($_REQUEST['psellingprice'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
  }else {
    $pname = $_REQUEST['pname'];
    $pdop =  $_REQUEST['pdop'];
    $paval = $_REQUEST['paval'];
    $ptotal = $_REQUEST['ptotal'];
    $pcostprice =  $_REQUEST['pcostprice'];
    $psellingprice = $_REQUEST['psellingprice'];
    $sql = "INSERT INTO assets_tb (p_name,p_dop,p_aval,p_total,p_costprice,p_sellingprice) VALUES 
    ('$pname', '$pdop', '$paval', '$ptotal', '$pcostprice', '$psellingprice')";
            if($conn->query($sql) == TRUE){
          $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Added Successfully</div>';
        } else {
          $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Add</div>';
        }
  }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Add New Product</h3>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="pname" name="pname">
    </div>
    <div class="form-group">
      <label for="pdop">Date of Purchase</label>
      <input type="date" class="form-control" id="pdop" name="pdop">
    </div>
    <div class="form-group">
      <label for="paval">Availability</label>
      <input type="number" class="form-control" id="paval" name="paval" onKeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="ptotal">Total</label>
      <input type="number" class="form-control" id="ptotal" name="ptotal" onKeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="pcostprice">Original Price Each</label>
      <input type="text" class="form-control" id="pcostprice" name="pcostprice"
        onKeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="psellingprice">Selling Price Each</label>
      <input type="text" class="form-control" id="psellingprice" name="psellingprice" onKeypress="isInputNumber(event)">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-danger" id="psubmit" name="psubmit">Submit</button>
      <a href="assets.php" class="btn btn-secondary">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg;}?>
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