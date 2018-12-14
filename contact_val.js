function val(formob)
{
	if(formob.name.value=="")
	{
		alert("Please Enter Name.");
		return false;
	}

	else if(formob.exampleInputEmail.value=="")
	{
		alert("Please Enter Email.");
		return false;
	}
	else
	{
		return true;
	}
		
}