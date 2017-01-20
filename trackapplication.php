<?php include "includes/header.php";?>


<div class="track-app-status">
            <h3>Track Your Application Status</h3>
            <div class="track-form">
               <form method="post" action="">
             <input type="text" class="form-control" name="appid" placeholder="Enter Application id"><br>
               


<div class="or-round">
                        <div class="line"></div>
                       
                    </div>
                    <button type="submit" name="submit" class="btn-block btn btn-primary js-login">Track application</button>
                <li class="dontshow">


</li></div>
        </div>
		 </form>
		<style>
		.track-app-status {
    width: 360px;
    margin: 20px auto;
}
.track-form {
    width: 273px;
    margin: 0 auto;
    position: relative;
}
</style>
<?php
include "Site_Admin/config.php";
if(isset($_POST['submit'])){
	$appid=$_POST['appid'];
	$sql="select * from loanuser where concat(time,autoid)='$appid'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
		
		?>
		<div align="center">
		Status : <input type="text" class="form-group" value="<?php echo $row['status']; ?>" readonly>
		</div>
<?php } 
$num_rows=mysql_num_rows($result);
		if($num_rows>0){
			echo "";
		}else{ echo "<div align='center' style='color:red'>Invalid Application Id</div>";
		}
} ?>
	</table>