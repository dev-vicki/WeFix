<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo TITLE ?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/custom.css">
</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0" style="background-color:#6900d1">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashBoard.php"><img src="../images/logo2a.png" alt="logo"></a>
  </nav>

  <!-- Side Bar -->
  <div class="container-fluid" style="margin-top:70px;">
    <div class="row ">
      <nav class="col-sm-2 sidebar py-5 d-print-none" style="background-color:#6900d1">
        <ul class="nav flex-column">
          <div class=" sidebar-sticky">
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?> "
                href="./dashBoard.php">
                <i class="fas fa-tachometer-alt"></i><label class=" pl-2">Dashboard</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Workorder'){echo 'active';} ?>"
                href="./workOrder.php">
                <i class="fab fa-accessible-icon"></i><label class=" pl-2">Work Order</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Requests'){echo 'active';} ?>"
                href="./requestTrack.php">
                <i class="fa fa-tasks" aria-hidden="true"></i><label class=" pl-2">Requests</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Products'){echo 'active';} ?>"
                href="./assets.php">
                <i class="fa fa-database" aria-hidden="true"></i><label class=" pl-2">Assets</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Employees'){echo 'active';} ?>"
                href="./technicians.php">
                <i class="fas fa-headset" aria-hidden="true"></i><label class=" pl-2">Technician</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Requester'){echo 'active';} ?>"
                href="./Requester.php">
                <i class="fa fa-users" aria-hidden="true"></i><label class=" pl-2">Requester</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Sales Report'){echo 'active';} ?>"
                href="./salesReport.php">
                <i class="fa fa-table" aria-hidden="true"></i><label class=" pl-2">Sell Report</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Work Report'){echo 'active';} ?>"
                href="./workReport.php">
                <i class="fa fa-table" aria-hidden="true"></i></i><label class=" pl-2">Work Report</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Change Password'){echo 'active';} ?>"
                href="./ChangePassword.php">
                <i class="fas fa-key"></i><label class=" pl-2">Change Password</label></a>
            </li>
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'Logout'){echo 'active';} ?>" href="#">
                <i class="fas fa-sign-out-alt"></i><label class=" pl-2">Logout</label></a>
            </li>
          </div>
      </nav> <!-- Sidebar Ends HERE!!!  -->