<?php
	$did=$_POST['id'];
	$name=$_POST['name'];
	$addr=$_POST['dept'];
	$phone=$_POST['dname'];
	$email=$_POST['date'];
	$gender=$_POST['problem'];
	$password=$_POST['unof'];
	mysqli_query($con,"insert into patient(pat_id,pat_name,pat_addr,pat_phone,pat_email,pat_gender,pat_password) values('$did','$name','$addr','$phone','$email','$gender','$password')"); 

	mysqli_query($con,"INSERT INTO `patient` (`pat_id`, `pat_name`, `pat_addr`, `pat_phone`, `pat_email`, `pat_gender`, `pat_password`) VALUES ('453253', 'dfhgdfgdg', 'dgdgdfgdf', '432532453', 'dsfsgdsg', 'dgssfgs', '32453')");
	
?>