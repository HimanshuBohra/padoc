<?php
include ("connection.php");
		$aid=$_POST['aid'];
	
		$password=$_POST['pass'];
		

$q= "select * from doctor where doctor_id='$aid' and password='$password'";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		session_start();
		$_SESSION['aid']=$aid;
		$_SESSION['pass']=$password;

		?>
		<script>window.alert("Lpgged In Successfully");
		window.location.href="docdet.php";</script>
		<?php
		
	}
	else
	{
		?>
		<script>
		alert("Wrong");
		window.location.href="Doctor_Login.html";</script>
		<?php
	}	
?>