<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html5>
<html>
<head>
<title>Admin Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Admin_login.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="admin_log_val.js"></script>
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
<body background="bg-banner.jpg">
<header>
<nav class="navbar navbar-inverse navbar-fixed-top" style="height:70px opacity:.7">
 <div class="container-fluid">
 
 <ul class="nav navbar-nav">

  <li><a href="addnewdoc.html">Add Doctors</a></li>
 <li><a href="deletedoc.html">Delete Doctors</a></li>
 <li><a href="viewpat.php">View Patients</a></li>
 <li><a href="viewdoc.php">View Doctors</a></li>
  <li><a href="viewappoadmin.php">View Appointment</a></li>
   <li><a href="viewtreatadmin.php">View Treatment History</a></li>

 <li><a href="#">Change Password</a></li>

 </ul>
 <ul class="nav navbar-nav navbar-right">
<li class="active"><a class="anchor" href="home.html" style="background-color:red;"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
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
if(isset($_SESSION['aid']) && isset($_SESSION['pass']))
{
	$aid=$_SESSION['aid'];
		$pass=$_SESSION['pass'];
$q= "select * from admin where admin_id='$aid' and admin_password='$pass'";
	$result= mysqli_query($con,$q);
	if(mysqli_num_rows($result)>0)
	{
		echo "<table class=table1 > ";
		echo"<tr>";
		echo"<th>Admin ID</th><th>Admin Name</th>";
		echo"</tr>";
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<tr>";
			echo"<td>".$row["admin_id"]."</td>";
			echo"<td>".$row["admin_name"]."</td>";
	
			echo"</tr>";
		}
		echo"</table>";
	}
	else{
			echo"invalid Credentials";	
			echo"<a href=Admin_Login>Go Back To Previous Page</a>";
	}
	
	mysqli_close($con);
}
else{echo"<script>window.location.href='Admin_login.php';</script>";}
?>
</body>
</html>