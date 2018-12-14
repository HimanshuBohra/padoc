function val(formob)
{
	if(formob.pid.value=="")
	{
		alert("Please Enter Admin ID.");
		return false;
	}

	else if(formob.pass.value=="")
	{
		alert("Please Enter Password.");
		return false;
	}
	else
	{
		return true;
	}
		
}