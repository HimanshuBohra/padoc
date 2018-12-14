<?php
   
	
    include("connection.php");
	session_start();

	if(isset($_SESSION['pid']) && isset($_SESSION['pass'])) 
	{
			$pid=$_SESSION['pid'];
			$pass=$_SESSION['pass'];
	}
else
{
	?>
	<script>
	window.location.href="Patient_Login.html";
	</script>
	<?php
}
	$doctype = $_POST['doctype'];
	$dc = strtotime($_POST['date']);
    $date = date('Y-m-d', $dc);
   	$query1="select doctor_name from doctor where department='$doctype'";
	$docty = mysqli_query($con, $query1);
	if($docty)
	{
		$_SESSION['date']=$date;
		$_SESSION['doctype']=$doctype;
		echo"<form method=post action=appoint.php><select name='docname'  >";
		while($d = mysqli_fetch_assoc($docty))
		{
			$dname=$d['doctor_name'];
			echo"<option value='$dname'>$dname</option> ";
		}
		echo"<input type=submit >";
		echo"</form>";
	} 	
?>