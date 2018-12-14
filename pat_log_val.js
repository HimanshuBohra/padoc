function val(formob)
{
	if(formob.pid.value=="")
	{
		alert("Please Enter Patient ID.");
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