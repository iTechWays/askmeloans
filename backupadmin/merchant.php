
<?php
include "header.php";
include "sidebar.php";
include "config.php";
$result=mysql_query("select * from loanuser");
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
				<h3 class="box-title">Customer Loan Request List</h3>
			  </div>
			  <div class="pull-right">
			  <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add merchants to top list</button>-->
			  </div>
            </div>
			<?php 
			if(isset($_REQUEST['ins']) == "success"){

$errormessage = "Status Updated Succsessfully";
?>
<span><p color="red" style="color: green;font-weight: bold;font-size: 16px;

text-align: center;margin-top: 10px;"><?php echo $errormessage;?></p></span>
<?php 
}
?>
 
			<?php
			$i=0;
			//while($row=mysql_fetch_array($result)){ ?>
            <div class="box-body">
			<?php
$start=0;
$limit=2;
 
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $start=($id-1)*$limit;
}
else{
    $id=1;
}
//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
$query=mysql_query("select * from loanuser LIMIT $start, $limit");
?>
<ul>

				<!--<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
			  <div class="row">-->
				<!--<div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div>-->
				<div class="col-sm-6"><div id="example1_filter" class="dataTables_filter pull-right"><!--<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>--></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                
			
			<table class="table table-striped">
			<thead>
			<th>S.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Loan Type</th>
			<th>Mobile Number</th>
			<th>City</th>
			<th>Loan Amount</th>
			<th>Pincode</th>
			<th>Status</th>
			<th>Edit</th>
			<th>Delete</th>
			</thead>
			<tbody>
			<?php
//print 10 items
$i=0;
while($result1=mysql_fetch_array($query))
{ ?>				
			<tr>
			<td><?php echo ++$i; ?></td>
			<td><?php echo $result1['name']; ?></td>
			<td><?php echo $result1['email']; ?></td>
			<td><?php echo $result1['loantype']; ?></td>
			<td><?php echo $result1['phone']; ?></td>
			<td><?php echo $result1['city']; ?></td>
			<td><?php echo $result1['amount']; ?></td>
			<td><?php echo $result1['pincode']; ?></td>
			<td><?php echo $result1['status']; ?></td>
			<td align="center"><a class="btn btn-warning btn-minier" href="editloanuser.php?id=<?php echo $result1['id']; ?>" data-toggle="modal" data-id="<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a> &nbsp;</td>
			<td><a href="deleteloanuser.php?id=<?php echo $result1['id']; ?>"><button class="btn btn-danger btn-xs">Delete</button></a></td>
			</tr>
<?php } ?>
			</tbody>
			</table>
			<div id="content">
</ul>
<?php
//fetch all the data from database.
$rows=mysql_num_rows(mysql_query("select * from loanuser"));
//calculate total page number for the given table in the database 
$total=ceil($rows/$limit);

?>
<style>
.page{
	float:right;
	list-style-type:none; 
	display:inline-flex; 
	letter-spacing:12px;
	font-size:18px;
}
</style>
<ul class='page'>
<?php
//show all the page link with page number. When click on these numbers go to particular page. 
        for($i=1;$i<=$total;$i++)
        {
            if($i==$id) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
        }
?>
</ul>
</div>
			  <!--<div class="row"><div class="col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>-->
			  
			  <div class="col-md-7">
			  <!--<div class="dataTables_paginate paging_simple_numbers pull-right" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>-->
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
