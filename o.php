<?php
include "docdetail.php";

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=$_POST['addr'];
$e=$_POST['qualifi'];
$f=$_POST['exp'];
$g=$_POST['pass'];
$insert = mysqli_query("insert into doctor values('$a','$b','$c','$d','$e','$f','$g')");
if(!$insert)
{
	echo "error";
}
else
{echo"successful";}

?>
<html>
<form method="POST">
<input type="text" name="id" />
<input type="text" name="name" />
<input type="text" name="email" />
<input type="text" name="addr" />
<input type="text" name="qualifi" />
<input type="text" name="exp" />
<input type="text" name="pass" />
<input type="submit">
</form>
</html>