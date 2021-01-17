<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS FontAwesome -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/all.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <title><?php echo TITLE ?></title>
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0" style="background-color:#6900d1">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="RequesterProfile.php"><img src="../images/logo2a.png"alt="logo"></a>
  </nav>

  <!-- Side Bar -->
  <div class="container-fluid" style="margin-top:70px;">
    <div class="row ">
      <nav class="col-sm-2 sidebar py-5 d-print-none" style="background-color:#6900d1">
        <ul class="nav flex-column">
          <div class="sidebar-sticky">
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'RequesterProfile'){echo 'active';} ?> " href="./RequesterProfile.php">
                <i class="fas fa-user"></i><label class=" pl-2">Profile</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'SubmitRequest'){echo 'active';} ?>" href="./SubmitRequest.php">
                <i class="fab fa-accessible-icon"></i><label class=" pl-2">Submit Request</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'CheckStatus'){echo 'active';} ?>" href="./CheckStatus.php">
                <i class="fas fa-align center"></i><label class=" pl-2">Service Status</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'ChangePassword'){echo 'active';} ?>" href="./ChangePassword.php">
                <i class="fas fa-key"></i><label class=" pl-2">Change Password</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Logout'){echo 'active';} ?>" href="../Logout.php">
                <i class="fas fa-sign-out-alt"></i><label class=" pl-2">Logout</label></a>
            </li>
          </div>
      </nav>
    
    
