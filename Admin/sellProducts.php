<?php 
define('TITLE', 'Sell Product');
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
  <h3 class="text-center">Customer Bill</h3>
  <?php 
    if(isset($_REQUEST['issue'])){
    $sql = "SELECT * FROM assets_tb WHERE pid = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    }

    if(isset($_REQUEST['gbill'])){
    if(($_REQUEST['cname'] == "") || ($_REQUEST['cadd'] == "") || ($_REQUEST['pname'] == "") || ($_REQUEST['pquantity'] == "") || 
  ($_REQUEST['psellingprice'] == "") || ($_REQUEST['totalcost'] == "") || ($_REQUEST['selldate'] == "")){
    $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields</div>';
  } else{
    $pid = $_REQUEST['pid'];
    $paval = $_REQUEST['paval'] - $_REQUEST['pquantity'];

    $custname = $_REQUEST['cname'];
    $custadd = $_REQUEST['cadd'];
    $cpname = $_REQUEST['pname'];
    $cpquantity = $_REQUEST['pquantity'];
    $cpeach = $_REQUEST['psellingprice'];
    $cptotal = $_REQUEST['totalcost'];
    $cpdate = $_REQUEST['selldate'];
    $sql = "INSERT INTO customerbill_tb (cus_name, cus_add, cus_prod_name, 
    cus_prod_quant, cus_prod_each, cus_prod_total, cus_prod_date) VALUES ('$custname', '$custadd', 
    '$cpname', '$cpquantity', '$cpeach', '$cptotal', '$cpdate')";
    if($conn->query($sql) == TRUE){
      $genid = mysqli_insert_id($conn);
      session_start();
      $_SESSION['myid'] = $genid;
      echo "<script>location.href='productSellSuccess.php';</script>";
    }
    $sqlup = "UPDATE assets_tb SET p_aval = '$paval' WHERE pid = '$pid'";
    $conn->query($sqlup);
}
}
    ?>
  <form action="" method="POST">
    <div class="form-group">
      <label for="pid">Product ID</label>
      <input type="text" class="form-control" id="pid" name="pid"
        value="<?php if(isset($row['pid'])) {echo $row['pid'];} ?>" readonly>
    </div>
    <div class="form-group">
      <label for="cname">Customer Name</label>
      <input type="text" class="form-control" id="cname" name="cname">
    </div>
    <div class="form-group">
      <label for="cadd">Customer Address</label>
      <input type="text" class="form-control" id="cadd" name="cadd">
    </div>
    <div class="form-group">
      <label for="pname">Product Name</label>
      <input type="text" class="form-control" id="pname" name="pname"
        value="<?php if(isset($row['p_name'])) {echo $row['p_name'];} ?>" readonly>
    </div>
    <div class="form-group">
      <label for="paval">Available</label>
      <input type="number" class="form-control" id="paval" name="paval" onKeypress="isInputNumber(event)"
       value="<?php if(isset($row['p_aval'])) {echo $row['p_aval'];} ?>" readonly>
    </div>
    <div class="form-group">
      <label for="pquantity">Quantity</label>
      <input type="number" class="form-control" id="pquantity" name="pquantity" onKeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="psellingprice">Price Each</label>
      <input type="text" class="form-control" id="psellingprice" name="psellingprice" onKeypress="isInputNumber(event)"
        value="<?php if(isset($row['p_sellingprice'])) {echo $row['p_sellingprice'];} ?>">
    </div>
    <div class="form-group">
      <label for="totalcost">Total Price</label>
      <input type="text" class="form-control" id="totalcost" name="totalcost" onKeypress="isInputNumber(event)">
    </div>
    <div class="form-group col-md-4">
      <label for="inputdate">Date</label>
      <input type="date" class="form-control" id="inputdate" name="selldate">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-success" id="gbill" name="gbill">Generate Bill</button>
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