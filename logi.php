<html>
<form method=post action=logi.php onsubmit="valid();">
<input type=text name=pid ><br>
<input type=password name=pass><br>
<input type=submit>
</form>
<?php
include ("connection.php");
		$pid=$_POST['pid'];
	
		$password=$_POST['pass'];
		$q= "select * from patient where pat_id='$pid' and pat_password='$password'";
	$result= mysqli_query($con,$q);
	function valid()
	{
	if(mysqli_num_rows($result)>0)
	{
	$sql ="update patient set pat_password='$password' where pat_id='$pid' ";
	if(mysqli_query($con,$sql))
	{
		
		echo"<script>window.alert('Password Changed Successfully')</script>";
		
	}
	else
	{
		
		echo"<script>window.alert('There has been some problem')</script>";
	}
	}
	else
	{
		
		header('location:logi.html');
		echo"<script>window.alert('There has been some problem')</script>";
		
		
	}
	}
?>
</html>