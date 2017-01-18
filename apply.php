<?php
include "config.php";
?>
 <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/Admin.css">
  
  <!-- iCheck -->
  <link rel="stylesheet" href="dist/iCheck/square/blue.css">
  <!-- configuration js and css -->
  <link rel="stylesheet" href="dist/css/config.css">
  <style>
						.success {
color: #4F8A10;
background-color: #DFF2BF;
font-size: 18px;
font-family:Arial;
}
</style>
  
			
  <div class="config-box">
    <div class="row">
    	
        <div class="wizard">
		<?php
			if(isset($_POST['submit'])){
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
					echo '<div class="success">Loan Application Received Successfully</div>';
} 
				else{
					echo "Fail to Apply Loan";
				}
			} }
			?>
  <form role="form" method="post" action="">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                            <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Type Of Loan</label>
                                <select class="form-control" id="exampleInputEmail1" name="loan">
								<option></option>
								<option>Home Loan</option>
								<option>Business Loan</option>
								<option>Personal Loan</option>
								<option>Construction Finance</option>
								<option>LRD</option>
								</select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
								<span class="msg error">Not a valid email address</span>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Mobile number</label>
                                <input type="text" name="phone" class="form-control" onkeypress='return isNumberKey(event)' id="exampleInputEmail1" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Pincode</label>
                                <input type="text" name="pincode" class="form-control" onkeypress='return isNumberKey(event)' id="exampleInputEmail1" placeholder="Enter Pincode">
                            </div>
                                <label for="exampleInputEmail1">&emsp; City</label>
                            <div class="col-md-6">
                                <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City">
                            </div>
                        </div>
						<div class="col-md-12">
                                <label for="exampleInputEmail1">Loan Amount</label>
                                <input type="text" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter Loan Amount">
                            </div>
                        </div>
						<div class="col-md-12">
                                <input type="hidden" name="status" class="form-control" value="Received" id="exampleInputEmail1" placeholder="Loan Amount">
                            </div>
						&emsp; 
						<div class="col-md-12">
                                <input type="hidden" name="message" class="form-control" id="exampleInputEmail1" value="Welcome to Ask me Loan">
                            </div>
                        <ul class="list-inline" align="center">
                            <li><button type="submit" name="submit" class="btn btn-primary next-step" align="center">Save</button></li>&emsp; 
							<li><button type="reset" name="reset" class="btn btn-primary next-step" align="center">Reset</button></li>
                        </ul>
                    </div>
                </div>
            </form>
			</div>
			</div>
			</div>
			<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$('form input[name="email"]').blur(function () {
    var email = $(this).val();
var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
if (re.test(email)) {
    $('.msg').hide();
    $('.success').show();
} else {
    $('.msg').hide();
    $('.error').show();
}

});
</script>
<style>
.msg {
    display: none;
}
.error {
    color: red;
}
.success {
    color: green;
}
</style>