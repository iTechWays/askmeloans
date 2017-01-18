<?php
session_start();
include "config.php";
$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
  <!-- jquerry -->
  <script src="dist/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/Admin.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
	<!-- Theme Js -->
	<script src="dist/sparkline/jquery.sparkline.min.js"></script>
	<script src="dist/flot/jquery.flot.min.js"></script>
	<script src="dist/bootstrap/js/bootstrap.min.js"></script>
	<script src="dist/js/app.min.js"></script>
	
	
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>AM</b>L</span> 	
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="images/logo.png" width="215px;"/></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/admin.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
			  <?php
			  $result=mysql_query("select * from login where id='$id'");
			  while($row=mysql_fetch_array($result)){ ?>
              <span class="hidden-xs"><?php echo $row['name']; ?></span>
			  <?php } ?>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/admin.png" class="img-circle" alt="User Image">
<?php
			  $result=mysql_query("select * from login where id='$id'");
			  while($row=mysql_fetch_array($result)){ ?>
                <p>
                  <?php echo $row['name']; ?>
                </p>
			  <?php } ?>
              </li>
            
             <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>