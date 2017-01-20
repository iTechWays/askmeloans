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

  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      
<div class="container">
<?php 
			if(isset($_REQUEST['ins']) == "success"){

$errormessage = "Loan Application Request Sent Succsessfully";
?>
<span><p color="red" style="color: green;font-weight: bold;font-size: 16px;

text-align: center;margin-top: 10px;"><?php echo $errormessage;?></p></span>
<?php 
}
?>
    <form class="well form-horizontal" action="applyloan.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Contact Us Today!</legend>

<!-- Text input-->

<div class="col-md-12">
<div class="col-md-8">
<div class="row">
  <div class="col-md-6">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Enter Name" class="form-control"  type="text">
    </div>
</div>

      
    <div class="col-md-6">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
        <div class="row">
    <div class="col-md-12">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="loan" class="form-control selectpicker" >
      <option value=" " >Please select your Loantype</option>
      <option>Home Loan</option>
      <option>Personal Loan</option>
      <option >Construction Loan</option>
      <option >Business Loan</option>
      <option >LRD Loan</option>
      
    </select>
  </div>
</div>
</div>
&emsp; 
<div class="row">
    <div class="col-md-6">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="Enter Mobile Number" class="form-control" type="text">
    </div>
  </div>


<!-- Text input-->
      

    <div class="col-md-6">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="pincode" placeholder="Enter Pincode" class="form-control" type="text">
    </div>
  </div>
</div>
&emsp; 
<input type="hidden" name="status" class="form-control" value="Received" id="exampleInputEmail1" placeholder="Loan Amount">
<input type="hidden" name="message" class="form-control" id="exampleInputEmail1" value="Welcome to Ask me Loan">
<!-- Text input-->
 <div class="row">
    <div class="col-md-6">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="Enter city" class="form-control"  type="text">
    </div>
  </div>
   <div class="col-md-6">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="amount" placeholder="Enter Loan Amount" class="form-control"  type="text">
    </div>
</div>
</div>
&emsp; 
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Apply<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div></div></div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>



	<style>
	#success_message{ display: none;}
	.col-md-12{
	padding-top: 30px;
}
.col-md-8{
	//border:1px solid #ccc;
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
	<script>
	  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: '<p style="color:red;">Please Enter your first name</p>'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your email address</p>'
                    },
                    emailAddress: {
                        message: '<p style="color:red;">Please Enter a valid email address</p>'
                    }
                }
            },
			loan: {
                validators: {
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your Loan Type</p>'
                    },
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your phone number</p>'
                    },
                    phone: {
                        country: 'IN',
                        message: '<p style="color:red;">Please Enter a vaild phone number</p>'
                    }
                }
            },
            pincode: {
                validators: {
                     stringLength: {
                        min: 6,
                    },
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your pincode</p>'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your city</p>'
                    }
                }
            },
            
            amount: {
                validators: {
                    notEmpty: {
                        message: '<p style="color:red;">Please Enter your Loan Amount</p>'
                    },
                    
                }
            },
          
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

</script>