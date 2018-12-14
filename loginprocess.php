<?php
include ("connection.php");
		$pid=$_POST['pid'];
	
		$password=$_POST['pass'];
		

$q= "select * from patient where pat_id='$pid' and pat_password='$password'";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION['pid']=$pid;
		$_SESSION['pass']=$password;

		?>
		<script>window.alert("Lpgged In Successfully");
		window.location.href="patdet.php";</script>
		<?php
		
	}
	else
	{
		?>
		<script>
		window.location.href="patient_Login.html";</script>
		<?php
	}	
?>