<?php
include('connection.php');
session_start();
		
	if(!isset($_SESSION['pid']) || trim($_SESSION['pid'])=='')
	{
		//header("location:SignIn.php");
	}
	else
	{
		$uno=$_SESSION['uid'];
		$username= $_SESSION['username'];
	}
	
	$res=mysqli_query($con,"select uno,pname from patient where uno='$uno'");
	while($row=mysqli_fetch_array($res))
	{
		
		$pname=$row['pname'];
		
		
	}
if(isset($_POST['submit']))
{
	
	
	$funo=mysqli_escape_String($uno);
	
	$hospital=null;
	$department=null;
	$doctor=null;
	$date2=null;
	$problem=null;
	$date=date('Y-m-d H:i:s');
	extract($_POST);
	
	$sql=mysql_query("insert into datepick(id,name,hosp_name,dept,doc_name,appodate,problem,date,unof) values('','$pname','$hospital','$department','$doctor','$date2','$problem',Now(),'$funo')") or die(mysql_error());
	
	//header("location:patientappointment.php");
	echo "<script type='text/javascript'>window.location.href='patientappointment.php';</script>";
	echo "successfully inserted..!!";


}
	
?> 