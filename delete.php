$q="delete from patient where pat_id='$delete'";
	if(mysqli_query($con,$q))
	{
		echo "<br>deleted";
	}
	else
	{
		echo"<br>problem";
		mysqli_error($con);	
		}