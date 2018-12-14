$sql= "select * from patient";
	$result= mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<br>id  ".$row["pat_id"];
		}
	}
	else{
		echo "0 rows";
	}
	