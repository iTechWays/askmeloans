<?php
include "config.php";
session_start();
			if(isset($_POST['submit']))
			{
				$email=$_POST['email'];
				$password=md5($_POST['password']);
				$result=mysql_query("select * from login where email='$email' and password='$password'");
				while($row=mysql_fetch_array($result))
				{
					$id = $row['id'];
				}	
					$_SESSION['id']=$id;
					$num_row=mysql_num_rows($result);
					if($num_row>0)
					{
                                        //header("location:pages/index.php");
echo '<meta http-equiv="refresh" content="0; URL=home.php">';
					}
					else
					{
						echo "<script>alert('invalid login details')</script>";
						echo '<meta http-equiv="refresh" content="0; URL=index.php">';
					}
					  mysql_close($con);
			}
			?>