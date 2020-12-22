<?php 
session_start();
define('TITLE', 'Success');
include('../dbConnection.php');
include('./include/header.php');

if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
} else {
  echo "<script> location.href = 'login.php'</script>";
}

$sql = "SELECT * FROM customerbill_tb WHERE cus_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
  $row = $result->fetch_assoc();
  echo "<div class='ml-5 mt-5'>
  <h3 class='text-center'>Customer Bill</h3>
  <table class='table'>
  <tbody>
  <tr>
  <th>Customer ID</th>
  <td>".$row['cus_id']."</td>
  </tr>
  <tr>
  <th>Name</th>
  <td>".$row['cus_name']."</td>
  </tr>
  <tr>
  <th>Address</th>
  <td>".$row['cus_add']."</td>
  </tr>
  <tr>
  <th>Product Name</th>
  <td>".$row['cus_prod_name']."</td>
  </tr>
  <tr>
  <th>Quantity</th>
  <td>".$row['cus_prod_quant']."</td>
  </tr>
  <tr>
  <th>Price Each</th>
  <td>".$row['cus_prod_each']."</td>
  </tr>
  <tr>
  <th>Total Amount</th>
  <td>".$row['cus_prod_total']."</td>
  </tr>
  <tr>
  <th>Date of Purchase</th>
  <td>".$row['cus_prod_date']."</td>
  </tr>

  <tr>
  <td>
  <form class='d-print-none'>
  <input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'>
  </form>
  </td>
  <td>
  <a href='assets.php' class='btn btn-secondary d-print-none'>Close</a>
  </td>
  </tr>
  </tbody>
  </table>
  </div>";
} else{
  echo "Failed";
}
?>

<?php 
include('./include/footer.php');
?>