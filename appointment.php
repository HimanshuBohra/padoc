<?php
    include("connection.php");
		session_start();

	if(isset($_SESSION['pid']) && isset($_SESSION['pass'])) 
	{}
else
{
	?>
	<script>
	window.location.href="Patient_Login.html";
	</script>
	<?php
}
?>

<html>
<head>

<title>
Doctor Appointment
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="appoint.css">
</head>
<body>
<h1 style="float:left;" style="text-decoration:none;"><a href="patdet.php" >Go Back to Your Details</a></h1><br>
<form method="post" action="docselect.php">
<fieldset>
<legend>Book Appointment</legend>
<table cellspacing="10" cellpadding="15" align="center">
</fieldset>
<tr>
<td colspan="3" align="center">Date of Appointment</td>
</tr>
<tr>
<td colspan="3"><input type="date" name ="date" class="inputs" required></td>
<tr>
<td colspan="3">
Select the Doctor type you want to consult
</td>
</tr>
<td colspan="3">
<select name="doctype" class="inputs" required>
										<option value="">&nbsp</option>
										<option value="Heart Specialist">Heart Specialist</option>
										<option value="Bones Specialist">Bones Specialist</option>
										<option value="Skin Specialist">Skin Specialist</option>
										<option value="Neurologist">Neurologist</option>
										<option value="Gynecologists">Gynecologists</option>
										<option value="Child Specialist">Child Specialist</option>

</select>
</td>
</tr>
<tr>
<td colspan="3">
<input type="submit" value="GET APPOINTMENT" name="submit">
</td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>