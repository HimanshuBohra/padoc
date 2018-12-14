<?php
	include("connection.php");
	session_start();
	if(isset($_POST['id']))
	{
	$did = $_POST['id'];
	$docname = $_POST["name"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$email = $_POST["email"];
	$quali = $_POST["dept"];
	$exp = $_POST["experience"];
	$pass = $_POST["pass"];
	if(isset($_POST["submit"]))
	{
		$sql="INSERT INTO doctor (doctor_id,doctor_name,doc_phone,doctor_address,experience,department,password,email) VALUES ('$did','$docname','$phone', '$address','$exp','$quali', '$pass', '$email')";
	
		if(mysqli_query($con, $sql))
		{	
			echo "<script>alert('Doctor Added Successfully');
			window.location.href='adminpage.php';</script>";
		}
		else
		{
	
			echo"".mysqli_error($con);
		}
	}
	}
	else{
		echo"".mysqli_error($con);
	}
?>