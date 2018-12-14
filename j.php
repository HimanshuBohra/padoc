<?php
$host="localhost";
$user="root";
$pass="";
$db="db";
$con=mysqli_connect($host,$user,$pass,$db);
if(!$con)
{
	echo"error";	
}
else
{
	echo"success";
}

?>