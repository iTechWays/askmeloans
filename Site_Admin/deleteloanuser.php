<?php
include "header.php";
include "sidebar.php";
include "config.php";
$id=$_REQUEST['id'];
$sql="delete from loanuser where id='$id'";
$result=mysql_query($sql);
if($result){
//header("location:merchant.php");
echo '<meta http-equiv="refresh" content="0; URL=merchant.php">';
}else{
echo "";
}
?>