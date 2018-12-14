<?php
session_start();
if(isset($_SESSION['aid']) && isset($_SESSION['pass'])) 
{}
	else
	{
		?>
		<script>window.alert("Login First");
		window.location.href="Doctor_Login.html";</script>
		<?php
	}	
?>
<!DOCTYPE html5>
<html>
<head>
<title>Patient Log In</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="pat_login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="pat_log_val.js"></script>
<style>		<!-- Inlline CSS -->
a:link 
{
    color: #3b5998;
}
a:visited
{
    color: aqua;
}
a:hover 
{
    color: red;
}
a:active
{
	color : yellow;
}

</style>
</head>
<body>
<header>
<nav class="navbar navbar-inverse navbar-fixed-top" style="height:70px opacity:.7">
 <div class="container-fluid">
 <div class="navbar-header collapse navbar-collapse">
 <a class="navbar-brand" href="home.html"><img class="img-circle" src="main icon.jpg" alt="main icon" width="60px" height="60px"></a>
 </div>
 <ul class="nav navbar-nav">
 <li><a href="viewappodoc.php">View Appointment</a></li>
   <li><a href="viewtreatdoc.php">View Treatment History</a></li>


 

 <li><a href="passchangedoc.php">Change Password</a></li>

 </ul>
 <ul class="nav navbar-nav navbar-right">
<li class="active"><a class="anchor" href="logout.php" style="background-color:red;"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
 </ul>
 </div>
</nav>
    
</header>
<style>
h1
{
	font-family:"Century Gothic";
	margin-top:9%;
	font-size:600%;
	color:grey;
}
.table1
{
	margin-top:6%;
	 border-spacing: 20px;
    border-collapse: separate;
	background:color:lightblue;
	color:blue;
}
td,th{
	padding:10px;
	background-color:white;
}
</style>
<h1 >Your Detail</h1>
<?php
include ("connection.php");
	
		$aid=$_SESSION['aid'];
		$pass=$_SESSION['pass'];
		$q= "select * from doctor where doctor_id='$aid' and password='$pass'";
		$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		echo "<table class=table1 > ";
		echo"<tr>";
		echo"<th>Patient ID</th><th>Name</th><th>Phone </th><th>Address</th><th>Department</th><th>Experience</th><th>E-mail</th>";
		echo"</tr>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<tr>";
			echo"<td>".$row["doctor_id"]."</td>";
			echo"<td>".$row["doctor_name"]."</td>";
			echo"<td>".$row["doc_phone"]."</td>";
			echo"<td>".$row["doctor_address"]."</td>";
			echo"<td>".$row["department"]."</td>";	
			echo"<td>".$row["experience"]."</td>";
			echo"<td>".$row["email"]."</td>";					
			echo"</tr>";
		}
		echo"</table>";
	}
	else{
			echo"invalid Credentials";	
			echo"<a href=Patient_Login>Go Back To Previous Page</a>";
	}
	
	mysqli_close($con);
	

?>
</body>
</html>