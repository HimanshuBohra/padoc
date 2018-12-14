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
$date=$_SESSION['date'];
	$doctype=$_SESSION['doctype'];
	$dname=$_POST['docname'];
	$q = "SELECT count(date) from appoint where date='$date'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
	{
		while($row=mysqli_fetch_assoc($r))
		{
			echo "<br>";
			
			if($row['count(date)']<=10)
			{
			$query="select * from patient where pat_id='$pid' and pat_password='$pass'";
			$result=mysqli_query($con,$query);
			if(mysqli_num_rows($result)>0)
			{
			while($row=mysqli_fetch_assoc($result))
			{
			 $email=$row['pat_email'];
			 $name=$row['pat_name'];
			 $addr=$row['pat_addr'];
				$sql="INSERT INTO appoint(date,dtype ,address,pat_name, email,pat_id,doctor_appointed) VALUES('$date', '$doctype','$addr','$name','".$email."','$pid','$dname')";
				$q="INSERT INTO treatment(pname,doctype,doc_name,date,p_id) VALUES('$name','$doctype','$dname','$date','$pid')";
				mysqli_query($con, $q);
				$res = mysqli_query($con, $sql);
					if($res)
					{
			
						echo "<script>alert('Check Your Appointment ID in View Appointment Menu ');window.location.href='patdet.php';</script>";
			
					}
					else
					{
						echo "<script>alert('Appointment Unsuccessfull');</script>";
					}
			}
			}
			}
			else
			{
			?>
				<script>
				alert("Select Another Date");
				window.location.href="patdet.php";
				</script>
			<?php
			}
		}
	}
		
?>
<html>
<head>
</head>
<body>
<section id="">
</section>
</body>
</html>