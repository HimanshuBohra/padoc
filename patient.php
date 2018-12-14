<?php
include("connection.php");
	$did=$_POST['id'];
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$phone=$_POST['phone'];
	$email=$_POST['mail'];
	$gender=$_POST['gender'];
	$password=$_POST['pass'];
	$query = "insert into patient(pat_id,pat_name,pat_addr,pat_phone,pat_email,pat_gender,pat_password) values($did,$name,$addr,$phone,$email,$gender,$password)";
	mysqli_query($con,$query);
	mysqli_query($con,"select * from patient where doc_id=");
	mysqli_close($con);
?>