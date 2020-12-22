<?php 
define('TITLE', 'Products');
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

<div class="col-sm-9 col-md-9 mt-5 text-center">
<p class="bg-dark text-white p-2">List of Products</p>
<?php 
$sql = "SELECT * FROM assets_tb";
$result = $conn->query($sql);
if($result->num_rows > 0){
  echo '<table  class="table">';
    echo '<thead>';
      echo '<tr>';
        echo '<th scope="col">Product ID</th>';
         echo '<th scope="col">Name</th>';
          echo '<th scope="col">DOP</th>';
           echo '<th scope="col">Availability</th>';
          echo '<th scope="col">Total</th>';
           echo '<th scope="col">Original Price Each</th>';
           echo '<th scope="col">Selling Price Each</th>';
           echo '<th scope="col">Action</th>';
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while($row = $result->fetch_assoc()){
      echo '<tr>';
      echo '<td>'.$row["pid"].'</td>';
      echo '<td>'.$row["p_name"].'</td>';
      echo '<td>'.$row["p_dop"].'</td>';
      echo '<td>'.$row["p_aval"].'</td>';
      echo '<td>'.$row["p_total"].'</td>';
      echo '<td>'.$row["p_costprice"].'</td>';
      echo '<td>'.$row["p_sellingprice"].'</td>';
      echo '<td>';
        echo '<form action="editAssets.php" method="POST" class="d-inline">';
        echo '<input type="hidden" name="id" value='.$row["pid"].'>
        <button type="submit" class="btn btn-info mr-3" name="edit" value="Edit"><i class="fas fa-pen"></i></button>';
        echo '</form>';
          echo '<form action="" method="POST" class="d-inline">';
          echo '<input type="hidden" name="id" value='.$row["pid"].'>
          <button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete"><i class="fas fa-trash-alt"></i></button>';
          echo '</form>';
            echo '<form action="sellProducts.php" method="POST" class="d-inline">';
            echo '<input type="hidden" name="id" value='.$row["pid"].'>
            <button type="submit" class="btn btn-warning mr-3" name="issue" value="Issue"><i class="fas fa-handshake"></i></button>';
            echo '</form>';
      echo '</td>';
      echo '</tr>';
    }
    echo '</tbody>';
  echo '</table>';
} else{
  echo '0 Result';
}
?>
</div>

<?php 
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM assets_tb WHERE pid = {$_REQUEST['id']}";
  if($conn->query($sql) == TRUE){
    echo '<meta http-equiv="refresh" content="0; URL=?deleted" />';
  } else{
    echo 'Unable to Delete';
  }
}
?>

    </div>
    <div class="float-right mx-5"><a href="insertAssets.php" class="btn btn-danger"><i class="fas fa-plus fa-2x"></i></a></div>
  </div>


  <!-- Javascript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>

</body>
</html>


