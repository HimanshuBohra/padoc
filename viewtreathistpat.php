
   <?php
include("connection.php");
session_start();
		if(isset($_SESSION['pid']) && isset($_SESSION['pass']))
		{}
		else
		{
			echo"login First";
		}
?>

<html>
<head>
<title>Treatment History</title>
<link rel="stylesheet" href="viewdoc.css">
</head>
<body>
<?php
$pid=$_SESSION['pid'];
	
    $sql = "SELECT * FROM treatment where p_id='$pid'";
    $result = mysqli_query($con,$sql);

   
		if(mysqli_num_rows($result)<=0)
		{
				?>
			<script>
				alert("No RECORDS!!");
				window.location.href="patdet.php";
				</script>
				<?php
		}
		else{
			
			    echo "<h1>Patient Treatment History</h1>";
    echo "<table cellspacing=20 cellpadding=20>";
    echo "<tr>";
    echo "<th>Treatment ID</th>";
    echo "<th>Patient Name</th>";
	  echo "<th>Doctor Type</th>";
	    echo "<th>Doctor Name</th>";
		  echo "<th>Date</th>";
		    echo "<th>Patient ID</th>";
			
	
    echo "</tr>";
while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row['treat_id']."</td>";
            echo "<td>".$row["pname"]."</td>";
			echo "<td>".$row["doctype"]."</td>";
			echo "<td>".$row["doc_name"]."</td>";
			echo "<td>".$row["date"]."</td>";
			echo "<td>".$row["p_id"]."</td>";
	
            echo "</tr>";
        }
		echo "<button type='button' style='height:15%; width:15%;' onclick='window.print()'>Print Report</button>";
			}
      
    
    echo "</tr>";
    mysqli_close($con);
?>
</body>
</html>