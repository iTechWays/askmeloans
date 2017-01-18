<?php
session_start();
include "config.php";
?>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>
<div class="login-block">
    <h1>Admin login</h1>
	<form method="post" action="logincheck.php" id="log">
    <input type="text" value="" name="email" placeholder="Email" id="email" />
    <input type="password" value="" placeholder="Password" name="password" id="password" />
    <button type="submit" name="submit">Login</button>
	</form>
</div>


			<link href="dist/css/style-main.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="dist/js/jquery.validate.min.js"></script>
			<script>
$(document).ready(function()
{
$("#log").validate
        ({
                rules: 
                {
					email: {
                        required: true,
                        email: true
                    },
					password:{
						required : true,
						
					}
                },
                messages: 
                {
					email: "Please enter a valid email address",
					password: "Please enter Password",
                },
        });
});
</script>
<style>
body {
    background: url('images/login-bg.png') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 263px;
    height: 67px;
    background: url('images/logo.png') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border: 2px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
	border-bottom:1px solid #cacaca;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
