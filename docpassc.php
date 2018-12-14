<?php
include ("connection.php");
	
	session_start();

	$npass=$_POST['npass'];

	if(isset($_SESSION['aid']) && isset($_SESSION['pass'])) 
	{
		$did=$_SESSION['aid'];
		$pass=$_SESSION['pass'];
		$q= "select * from doctor where doctor_id='$did' and password='$pass'";
		$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
	$sql ="update doctor set password='$npass' where doctor_id='$did' ";
	if(mysqli_query($con,$sql))
	{
		?>
		<script>
		alert("Password Change Successfully");
			window.location.href="docdet.php";
		</script>
		<?php
		$_SESSION['pass']=$npass;
	}
	else
	{
		echo"".mysqli_error($con);
	}
	}
	}
?>