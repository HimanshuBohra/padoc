<?php
session_start();
if(isset($_SESSION['pid']) && isset($_SESSION['pass'])) 
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
<title>change password</title>
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
     <li><a class="anchor" href="home.html"><h4>Padoc.com</h4></a></li>
 <li ><a class="anchor" href="home.html">Home</a></li>
   <li class="dropdown">
 <a class="dropdown-toggle anchor" data-toggle="dropdown" href="#">Services
 <span class="caret"></span></a>
 <ul class="dropdown-menu">
 <li><a href="#">View Appointment</a></li>
   <li><a href="#">View Treatment History</a></li>
 
 </ul>
 
 </li>
 <li><a href="passchangedoc.php">Change Password</a></li>

 </ul>
 <ul class="nav navbar-nav navbar-right">
<li class="active"><a class="anchor" href="logout.php" style="background-color:red;"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
 </ul>
 </div>
</nav>
    
</header>
<div class="bcontainer">

<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="lf-contain">
<div class="login-container">
<div class="form-header">
</div>
<div class="form-items">
<form method="post" action="patpassc.php" onsubmit="return val(this)">

<input type="password" name="npass" placeholder="Enter Password to Change" class="inputs"> <br> <br> <br>
<button type="Submit">Change Password</button> <br> <br>

</form>
</div>
</div>
</div>
</div>
<div class="col-sm-4"></div>
</div>
</div>
</body>
</html>