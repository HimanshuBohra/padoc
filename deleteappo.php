<?php

include("connection.php");
session_start();
if(isset($_SESSION['pid']) && isset($_SESSION['pass']))
{	
	$pid=$_SESSION['pid'];
	$aid=$_POST['aid'];
	$sql= "select * from appoint where ap_id='$aid' and pat_id='$pid' ";
	$result= mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	
		$q="delete from appoint where ap_id='$aid' and pat_id='$pid'";
		if(mysqli_query($con,$q))
		{
		?><script>alert('Appointment Record Deleted');
		window.location.href="patdet.php";
		</script>
		<?php
	}
	}
	else{
		?>
		<script>
		alert('Inncorrect Appointment ID');
		window.location.href="deleteap.html";
		</script>
		<?php
	}
	


}
else{
	echo"".mysqli_error($con);
	
}
		?>