
<?php
include "config.php";
include "header.php";
include "sidebar.php";
session_start(); 
$id=$_SESSION['id'];
$result=mysql_query("select * from login where id='$id'");
while($row=mysql_fetch_array($result)){ 
?>
  <!-- Left side column. contains the logo and sidebar -->
  
<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Add merchants To Top list</h4>
				</div>
				<div class="modal-body">
				  <p>Merchant table</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			  </div>
			  
			</div>
		  </div>
		  <!-- Modal box -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Customer
        <!--small>Control panel	</small-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customer </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Start Small boxes (Stat box) -->
      <div class="row">
		<div class="col-md-12">
				<div class="box box-primary">
            <div class="box-header with-border">
              <div class="col-md-6">
				<!--<i class="fa fa-th"></i>-->
				<h3 class="box-title">
				<div class="row">
    <div class="col-sm-12 text-center">
        <a href="profile.php"><button id="btnSearch" class="btn btn-primary btn-md center-block" Style="width: 100px;" OnClick="btnSearch_Click">Edit Profile</button></a>
         <a href="changepassword.php"><button id="btnClear" class="btn btn-primary btn-md center-block" Style="width: 120px;" OnClick="btnClear_Click" >Change Password</button></a>
     </div>
</div>
<style>
#btnSearch,
#btnClear{
    display: inline-block;
    vertical-align: top;
}
</style>
				
				</h3>
			  </div>
			  <div class="pull-right">
			  <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add merchants to top list</button>-->
			  </div>
            </div>
			
            <div class="box-body">
			
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
			  <div class="row">
				<!--<div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>-->
				
                
			<style>
						.success {
color: #4F8A10;
background-color: #DFF2BF;
font-size: 18px;
font-family:Arial;
}
</style>
						<?php
						$upid=$_SESSION['id'];
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$sql="update login set name='$name',email='$email' where id='$upid'";
	$result1=mysql_query($sql);
	if($sql){
		echo '<div class="success">Profile Updated Successfully</div>';
	}else{
		echo "Fail to update";
	}
}

?>
                                <div class="col-lg-6">
                                    <form method="post" action="">
<table border="0">
<tr><td>Name :</td>&emsp; &emsp; <td> <input type="text" name="name" class="form-control" readonly value="<?php echo $row['name']; ?>"></td></tr>
<tr><td>Email : </td><td> <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>"></td></tr>
<td>&emsp; </td>
<tr><td><input type="submit" name="submit" value="Update"> &emsp; <input type="reset" name="reset" value="Reset"></td></tr>
<?php } ?>
</table>
                                </div>
                            
                            <!-- /.row (nested) -->
                        
                
                <tfoot>
                </tfoot>
			</table></div></div>
			  
			  
			  <div class="col-md-7">
			 
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
		</div>
	  </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Ask Me loan</a>.</strong> All rights reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<!--<script src="dist/jQuery/jquery-2.2.3.min.js"></script>-->
<!-- Bootstrap 3.3.6 -->
<!--<script src="dist/bootstrap/js/bootstrap.min.js"></script>-->
<!-- AdminLTE App -->
<!--<script src="dist/js/app.min.js"></script>-->

</body>
</html>
