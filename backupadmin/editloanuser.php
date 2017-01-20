
<?php
include "header.php";
include "sidebar.php";
include "config.php";
$id=$_GET['id'];
$result=mysql_query("select * from loanuser where id='$id'");
?>

  <!-- Left side column. contains the logo and sidebar -->
  
<!-- Modal -->
		  <div id="modal-form-edit" class="modal" tabindex="-1" align="center">
 <div class="modal-content" style="width:50%">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Edit Loan</h4>
      </div>
	  
      <div class="modal-body">
        <input type="text" name="product_name" placeholder="Product Name" value="" id="product_name" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
            
          
</div>
<script>
$('#modal-form-edit').on('show.bs.modal', function(e) {
  var product = $(e.relatedTarget).data('id');
  $("#product_name").val(product);
});
</script>
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
				<i class="fa fa-th"></i>
				<h3 class="box-title">Edit Customer Loan Request List</h3>
			  </div>
			  <div class="pull-right">
			  <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add merchants to top list</button>-->
			  </div>
            </div>
			
			<?php
			$i=0;
			while($row=mysql_fetch_array($result)){ ?>
            <div class="box-body">
			
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<!--<div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>-->
				<div class="col-sm-6"><div id="example1_filter" class="dataTables_filter pull-right"><!--<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>--></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <div class="row" align="center">
				<form method="post" action="updateloanuser.php?id=<?php echo $row['id']; ?>">
				<tr>
				<td><b>Name :</b></td><td><input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" readonly></td></tr>
				<tr>
				<td><b>Email :</b></td><td><input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>" readonly></td></tr>
				<tr>
				<td><b>Loan Type :</b></td><td><input type="text" class="form-control" name="loantype" value="<?php echo $row['loantype']; ?>" readonly></td></tr>
				<tr>
				<td><b>Mobile number :</b></td><td><input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" readonly></td></tr>
				<tr>
				<td><b>City :</b></td><td><input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>" readonly></td></tr>
				<tr>
				<td><b>Loan Amount :</b></td><td><input type="text" class="form-control" name="amount" value="<?php echo $row['amount']; ?>" readonly></td></tr>
				<tr>
				<td><b>Pincode :</b></td><td><input type="text" class="form-control" name="pincode" value="<?php echo $row['pincode']; ?>" readonly></td></tr>
				<tr>
				<td><b>Status :</b></td><td><select name="status" value="<?php echo $row['status']; ?>" class="form-control">
				<option value="Received">Received</option>
				<option value="Pending">Pending</option>
				<option value="Success">Success</option>
				<option value="Rejected">Rejected</option>
				</td></tr>
				<tr>
				<td><b>Message :</b></td><td><textarea name="message" class="form-control" rows="4" cols="40" required></textarea></td></tr>
				<tr>
				<tr><td><input type="submit" align="center" name="submit" value="Update"></td></tr>
				</form>
                <tfoot>
                </tfoot>
			</table><?php } ?></div></div>
			  
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
