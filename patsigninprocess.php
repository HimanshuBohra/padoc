
<?php
	$did=$_POST['id'];
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$sql="insert into patient(pat_id,pat_name,pat_addr,pat_phone,pat_email,pat_gender,pat_password) values('$did','$name','$addr','$phone','$email','$gender','$password')";
	if(!mysqli_query($con,$sql))
	{
		session_start();
		$_SESSION['sid']=session_id();
		?>
		<script>window.alert("User Made Successfully");
		window.location.href="patdet.php";</script>
		<?php
		
	}
	else
	{
		?>
		<script>
		window.location.href="Patient_Login.php";</script>
		<?php
	}	

	
?>