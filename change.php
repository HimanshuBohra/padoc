<?php
include ("connection.php");
		$pid=$_POST['pid'];
	
		$password=$_POST['pass'];
		$q= "select * from patient where pat_id='$pid' and pat_password='$password'";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
	$sql ="update patient set pat_password='$password' where pat_id='$pid' ";
	if(mysqli_query($con,$sql))
	{
		?>
		<script>window.alert("Password Changed Successfully");</script>
		<?php
	}
	else
	{
		?>
		<script>window.alert("There has been some problem");</script>
		<?php
	}
	}
	else
	{
		
		header('location:logi.html');
		?>
		<script>window.alert("There has been some problem");
		
		</script>
		
		<?php
	}
	
?>