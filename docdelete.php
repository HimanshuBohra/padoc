<?php

include("connection.php");
session_start();
if(isset($_SESSION['aid']) && isset($_SESSION['pass']))
{
	$aid=$_POST['aid'];
$q="delete from doctor where doctor_id='$aid'";
	if(mysqli_query($con,$q))
	{
		?><script>alert('Doctor Record Deleted');
		window.location.href="adminpage.php";
		</script>
		<?php
	}
	else
	{
		echo"<br>problem";
		mysqli_error($con);	
		}
}
else{
	echo"error";
}
		?>