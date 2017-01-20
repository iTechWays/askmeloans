<?php
include "Site_Admin/config.php";
				$name=$_POST['name'];
				$email=$_POST['email'];
				$loantype=$_POST['loan'];
				$phone=$_POST['phone'];
				$pincode=$_POST['pincode'];
				$city=$_POST['city'];
				$amount=$_POST['amount'];
				$status=$_POST['status'];
				$message=$_POST['message'];
				$time=date('Ymd');
$result1=mysql_query("SELECT * FROM  loanuser WHERE id = (SELECT MAX(id)  FROM loanuser)");
while($row1=mysql_fetch_array($result1)){
	$e=$row1['autoid'];

$r=str_pad($e+1, "1", STR_PAD_LEFT);
				$sql="insert into loanuser values('','$name','$email','$loantype','$phone','$city','$amount','$pincode','$message','$time','$r','$status')";
				$result=mysql_query($sql);
				if($sql){
					echo '<meta http-equiv="refresh" content="0; URL=apply-now.php?ins=success">';
} 
				else{
					echo "Fail to Apply Loan";
				}
} 
			?>