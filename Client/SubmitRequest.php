<?php 
define('TITLE', 'Submit Request');
define('PAGE', 'SubmitRequest');

include('include/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
} else {
  echo "<script> location.href='RequesterLogin.php'</script>";
}

if(isset($_REQUEST['submitrequest'])){
  // Checking for empty fields
  if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") ||
  ($_REQUEST['requesteradd2'] == "") || ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") ||
   ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requestdate'] == "")) {
    $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>All Fields are Required</div>";
  } else{
    $rinfo = $_REQUEST['requestinfo'];
    $rdesc = $_REQUEST['requestdesc'];
    $rname = $_REQUEST['requestername'];
    $radd1 = $_REQUEST['requesteradd1'];
    $radd2 = $_REQUEST['requesteradd2'];
    $rcity = $_REQUEST['requestercity'];
    $rstate = $_REQUEST['requesterstate'];
    $rzip  = $_REQUEST['requesterzip'];
    $remail = $_REQUEST['requesteremail'];
    $rmobile = $_REQUEST['requestermobile'];
    $rdate = $_REQUEST['requestdate'];
    $sql = "INSERT INTO submitrequest_tb(request_info, request_desc, requester_name, requester_add1, requester_add2, 
    requester_city, requester_state, requester_zip, requester_email, requester_mobile, request_date) VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2',
        '$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";
        if($conn->query($sql) == TRUE){
          $genid = mysqli_insert_id($conn);
        $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'>Request Submitted Successfully</div>";
        $_SESSION['myid'] = $genid;
        echo "<script> location.href='submitSuccess.php'</script>";

        } else{
        $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>Unable to Submit Your Request</div>";

        }
  }

}
?>
<!-- Requester Section -->
      <div class="col-sm-9 col-md-10 mt-5">
        <form class="mx-5" action="" method="POST">
          <div class="form-group">
          <label for="inputRequestInfo">Request Info</label>
          <input type="text" class="form-control" id="inputRequestInfo" placeholder="Regarding" name="requestinfo">
          </div>
          <div class="form-group">
          <label for="inputRequestDescription">Description</label>
          <input type="text" class="form-control" id="inputRequestDescription" placeholder="Short Snippet" name="requestdesc">
          </div>
          <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="inputName" placeholder="Rahul" name="requestername">
          </div>                    
          <div class="form-row">
          <div class="form-group col-md-6">
          <label for="inputAddress">Address Line 1</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="requesteradd1">
          </div>
          <div class="form-group col-md-6">
          <label for="inputAddress2">Address Line 2</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="RBI Layout" name="requesteradd2">
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6"> 
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="requestercity">
          </div>
          <div class="form-group col-md-4"> 
          <label for="inputState">State</label>
          <input type="text" class="form-control" id="inputState" name="requesterstate">
          </div>
          <div class="form-group col-md-2"> 
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" name="requesterzip" onkeypress="isInputNumber(event)">
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" name="requesteremail">
          </div>
          <div class="form-group col-md-2">
          <label for="inputMobile">Mobile</label>
          <input type="tel" class="form-control" id="inputMobile" name="requestermobile" onkeypress="isInputNumber(event)">
          </div>
           <div class="form-group col-md-2">
          <label for="inputDate">Date</label>
          <input type="Date" class="form-control" id="inputDate" name="requestdate" >
          </div>
          </div>
          <button type="submit" class="btn btn-success" name="submitrequest">Submit</button>
          <button type="Reset" class="btn btn-secondary" name="submitrequest">Reset</button>
        </form>
        <?php if(isset($msg)) {echo $msg;} ?>
      </div>
    
<!-- For Number Input Fields -->
  <script>
    function isInputNumber(evt){
      var ch - string.formCharCode(evt.which);
      if(!(/[0-9]/.test(ch))){
        evt.preventDefault();
      }
    }
  </script>
    
<?php 
include('include/footer.php');
?>