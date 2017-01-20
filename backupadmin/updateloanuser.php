<?php
include "config.php";
$id=$_GET['id'];
			if(isset($_POST['submit'])){
				$name=$_POST['name'];
				$email=$_POST['email'];
				$loantype=$_POST['loantype'];
				$phone=$_POST['phone'];
				$pincode=$_POST['pincode'];
				$city=$_POST['city'];
				$amount=$_POST['amount'];
				$status=$_POST['status'];
				$message=$_POST['message'];
				$sql="update loanuser set name='$name',email='$email',loantype='$loantype',phone='$phone',city='$city',amount='$amount',pincode='$pincode',message='$message',status='$status' where id='$id'";
				$result=mysql_query($sql);
				if($sql){
					echo '<meta http-equiv="refresh" content="0; URL=merchant.php?ins=success">';
				}
				else{
					echo "Fail to Apply Loan";
				}
			} ?>