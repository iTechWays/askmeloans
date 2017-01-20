<?php
include "config.php";
//session_start();
?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
		 <?php
			  $result=mysql_query("select * from login where id='$id'");
			  while($row=mysql_fetch_array($result)){ ?>
          <p><?php echo $row['name']; ?></p>
			  <?php } ?>
          <!-- Status -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
		<!--<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>User Profile</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="login.html"><i class="fa fa-circle-o"></i> login</a></li>
            <li><a href="register.html"><i class="fa fa-circle-o"></i> Register</a></li>
          </ul>
        </li>-->
        <!--<li><a href="configuration.html"><i class="fa fa-gear"></i> <span>Configuration</span></a></li>
		<li><a href="reports.html"><i class="fa fa-table"></i> <span>Reports</span></a></li>-->
		<!--<li><a href="member-search.html"><i class="fa fa-user"></i> <span>Member Search</span></a></li>-->
		<li  class="active"><a href="merchant.php"><i class="fa fa-user"></i> <span>Loan Customers</span></a></li>
		<!--<li><a href="merchant-config.html"><i class="fa fa-gears"></i> <span>Site Settings</span></a></li>
		<li><a href="support.html"><i class="fa fa-envelope"></i> <span>Customer Support</span></a></li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>