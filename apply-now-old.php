<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Ask Me Loans - Home page</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">


</head>

<body>
<!-- header Start -->
<div>
<?php include "includes/header.php";?>
</div>
<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link href="assets/css/style-main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>

		<title>Admin</title>
	</head>
	<body>
	
		<div class="container">
		<div class="row main">
			<div class="col-md-12">
			<div class="col-md-8">
			<div class="row">
			<?php 
			if(isset($_REQUEST['ins']) == "success"){

$errormessage = "Loan Application Request Sent Succsessfully";
?>
<span><p color="red" style="color: green;font-weight: bold;font-size: 16px;

text-align: center;margin-top: 10px;"><?php echo $errormessage;?></p></span>
<?php 
}
?>
			<form method="post" action="applyloan.php" id="loginform" name="loginform" >
                            <div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
									<span id="usernameError"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
									<a class="msg error">Not a valid email address</a>
								</div>
							</div>
			</div>
		
							<div class="row">
								<div class="col-md-12">
								   <div class="input-group">
										<span class="input-group-addon"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
													<select class="form-control" id="exampleInputEmail1" name="loan">
														<option value="" disabled selected>Select your Loan Type</option>
														<option>Home Loan</option>
														<option>Business Loan</option>
														<option>Personal Loan</option>
														<option>Construction Finance</option>
														<option>LRD</option>
													</select>
									</div>
								  </div>
							</div>
                                <input type="hidden" name="status" class="form-control" value="Received" id="exampleInputEmail1" placeholder="Loan Amount">
                                <input type="hidden" name="message" class="form-control" id="exampleInputEmail1" value="Welcome to Ask me Loan">
               &emsp; 
			<div class="row">
                            <div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<input type="text" name="phone" class="form-control" onkeypress='return isNumberKey(event)'  id="exampleInputEmail1" placeholder="Enter Mobile number">
								    <span id="phoneError"></span>
								</div>
							</div>
							<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-telegram" aria-hidden="true"></i></span>
										<input type="text" name="pincode" onkeypress='return isNumberKey(event)' class="form-control" id="email" placeholder="Enter Pincode">
									    <span id="pincodeError"></span>
									</div>
							</div>
			</div> &emsp; 
			<div class="row">
                            <div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
									<input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City">
									<span id="cityError"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                                <input type="text" name="amount" class="form-control" onkeypress='return isNumberKey(event)' id="email" placeholder="Enter Loan Amount">
								</div>
							</div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<div class="form-group" align="center">
							<input type="submit" style="width:30%;" name="submit" id="button" style="width:50%;" class="btn btn-primary btn-lg btn-block login-button" value="Apply">
						</div>
						</div>
						</div>
						</form>
		</div>
		</div>
		</div>
		</div>
<script>
	    window.onload = function(){
        function handleinput(){
            if(document.loginform.name.value == "")
			{
                document.getElementById("usernameError").innerHTML = "<p style='color:red;'>You must enter name</p>";
                return false;
            }
				else
			   {
					document.getElementById("usernameError").style.display = "none";
				}
			if(document.loginform.phone.value == "")
			{
                document.getElementById("phoneError").innerHTML = "<p style='color:red;'>You must enter Mobile Number</p>";
                return false;
            }
			else
			   {
					document.getElementById("phoneError").style.display = "none";
				}
			if(document.loginform.pincode.value == "")
			{
                document.getElementById("pincodeError").innerHTML = "<p style='color:red;'>You must enter Pincode</p>";
                return false;
            }
			else
			   {
					document.getElementById("pincodeError").style.display = "none";
				}
			if(document.loginform.city.value == "")
			{
                document.getElementById("cityError").innerHTML = "<p style='color:red;'>You must enter City</p>";
                return false;
            }
			else
			   {
					document.getElementById("cityError").style.display = "none";
				}
			if(document.loginform.amount.value == "")
			{
                document.getElementById("amountError").innerHTML = "<p style='color:red;'>You must enter Amount</p>";
                return false;
            }else
			   {
					document.getElementById("amountError").style.display = "none";
				}
        }
     
        document.getElementById("loginform").onsubmit = handleinput;
    }

</script>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
<style>
.col-md-12{
	padding-top: 30px;
}
.col-md-8{
	border:1px solid #ccc;
	padding-top:20px;
	padding-bottom:10px;
	border-radius:2px;
}
body, html{
     height: 100%;
 	background-repeat: no-repeat;
 	//background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
	background:white;
 	font-family: 'Oxygen', sans-serif;
	    background-size: cover;
}

</style>
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
<script>
$(document).ready(function()
{
$("#reg").validate
        ({
                rules: 
                {
                    name: "required",
					email: {
                        required: true,
                        email: true
                    },
					phone:{
						required : true,
						phone : true,
						maxlength:10
					}
                },
                messages: 
                {
                    name: "Please enter name",					
					email: "Please enter a valid email address",
					phone: "Please give valid phone number",
                },
        });
});
</script>
<div>
<?php include "includes/footer.php";?>
</div>
<!-- Footer End -->
