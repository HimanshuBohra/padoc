<?php
include ("connection.php");
		$aid=$_POST['aid'];
	
		$password=$_POST['pass'];
		

$q= "select * from admin where admin_id='$aid' and admin_password='$password'";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION['aid']=$aid;
		$_SESSION['pass']=$password;

		?>
		<script>window.alert("Lpgged In Successfully");
		window.location.href="adminpage.php";</script>
		<?php
		
	}
	else
	{
		?>
		<script>
		alert("Wrong details");
		window.location.href="Admin_Login.html";</script>
		<?php
	}	
?>