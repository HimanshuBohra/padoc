<?php
include ("connection.php");
	
	session_start();

	$npass=$_POST['npass'];

	if(isset($_SESSION['pid']) && isset($_SESSION['pass'])) 
	{
		$did=$_SESSION['pid'];
		$pass=$_SESSION['pass'];
		$q= "select * from patient where pat_id='$did' and pat_password='$pass'";
		$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
	$sql ="update patient set pat_password='$npass' where pat_id='$did' ";
	if(mysqli_query($con,$sql))
	{
		?>
		<script>
		alert("Password Change Successfully");
			window.location.href="patdet.php";
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