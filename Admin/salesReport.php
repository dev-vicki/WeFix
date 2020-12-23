<?php 
define('TITLE', 'Sales Report');
define('PAGE', 'Sales Report');
include('../dbConnection.php');
include('./include/header.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href = 'Adminlogin.php'</script>";
}
?>

<div class="col-sm-9 col-md-10 mt-5 text-center">
<form action="" method="POST" class="d-print-none">
<div class="form-row">
<div class="form-group col-md-2 mr-3">
<input type="date" class="form-control" id="startdate" name="startdate">
</div> 
<span class="mr-3"> to </span>
<div class="form-group col-md-2">
<input type="date" class="form-control" id="enddate" name="enddate">
</div>
<div class="form-group">
<input type="submit" class="btn btn-secondary ml-3" name="searchsubmit" value="Search">
</div>
</div>
</form>
<?php 
if(isset($_REQUEST['searchsubmit'])){
  $startdate = $_REQUEST['startdate'];
  $enddate = $_REQUEST['enddate'];
  $sql = "SELECT * FROM customerbill_tb WHERE cus_prod_date BETWEEN '$startdate' AND '$enddate' ";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    echo '<p class="bg-dark text-white p-2 mt-4">Details</p>';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th scope="col">Customer ID</th>';
    echo '<th scope="col">Customer Name</th>';
    echo '<th scope="col">Address</th>';
    echo '<th scope="col">Product Name</th>';
    echo '<th scope="col">Quantity</th>';
    echo '<th scope="col">Price Each</th>';
    echo '<th scope="col">Total</th>';
    echo '<th scope="col">Date</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()){
      echo '<tr>';
        echo '<td>'.$row['cus_id'].'</td>';
        echo '<td>'.$row['cus_name'].'</td>';
        echo '<td>'.$row['cus_add'].'</td>';
        echo '<td>'.$row['cus_prod_name'].'</td>';
        echo '<td>'.$row['cus_prod_quant'].'</td>';
        echo '<td>'.$row['cus_prod_each'].'</td>';
        echo '<td>'.$row['cus_prod_total'].'</td>';
        echo '<td>'.$row['cus_prod_date'].'</td>';
      echo '</tr>';
    }
    echo '<tr>';
    echo '<td>';
    echo '<input type="submit" class="btn btn-danger d-print-none"
    value="Print" onClick="window.print()">';
    echo '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
  } else {
    echo "<div class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'> No Records Found!</div>";
  }

}
?>
</div>



<?php 
include('./include/footer.php');
?>