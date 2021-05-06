<?php

function validate ($postvalue,$count)
{
	
/*	if($postvalue['employeecoloum'] > $count)
	{
		
		return "Employee Code coloumn number is not valid";
	}
	if($postvalue['namecoloum'] > $count)
	{
		return "Name coloumn number is not valid";
	}
	if($postvalue['departmentcoloum'] > $count)
	{
		return "Department coloumn number is not valid";
	}
	if($postvalue['dobcoloum'] > $count)
	{
		return "Date of Birth coloumn number is not valid";
	}
	if($postvalue['joindatecoloum'] > $count)
	{
		return "Join of Birth coloumn number is not valid";
	}*/
	$error = "";
	foreach ($postvalue as $key=>$value)
	{
		if($value > $count)
		{
			$error .= $key.",";
			 
		}
	}
	return $error;
	
}


?>