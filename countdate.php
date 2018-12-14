<?php
include("connection.php");
$d = "2018-03-14";
$q = "SELECT count(date) from appoint where date='$d'";
$r = mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
	{
		while($row=mysqli_fetch_assoc($r))
		{
			echo "<br>".$row["count(date)"];
		}
	}
	else{
		echo "0 rows";
	}
?>