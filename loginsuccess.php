
<?php
include ("connection.php");

	$did=$_POST['id'];
	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$phone=$_POST['phone'];
	$email=$_POST['mail'];
	$gender=$_POST['gender'];
	$password=$_POST['pass'];
	$delete=$_POST['delete'];
	$sql ="update patient set pat_name='$name' where pat_id='$did' ";
	if(mysqli_query($con,$sql))
	{
		echo "success";
	}
	else
		echo"<br>no";
$q= "select * from patient";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<br>id  ".$row["pat_id"];
			echo "<br>id  ".$row["pat_name"];
			echo "<br>id  ".$row["pat_addr"];
			echo "<br>id  ".$row["pat_phone"];
			echo "<br>id  ".$row["pat_email"];
			echo "<br>id  ".$row["pat_gender"];
			echo "<br>id  ".$row["pat_password"];
			echo"<br>";
		}
	}
	else{
		echo "0 rows";
	}
	
	mysqli_close($con);
?>