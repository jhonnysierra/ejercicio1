<?php
	error_reporting(0);
	
	$num1=$_POST['txt1'];
	$num2=$_POST['txt2'];
	$num3=$_POST['txt3'];
	$ope=$_POST['rope'];
	$res="";
	
	if($ope=="amigos")
	{
		if(($num1+$num2)==$num3 || (($num2+$num3)==$num1) || (($num3+$num1)==$num2))
		{
			$res="Son Amigos";
		}
		else
		{
			$res="No Son Amigos";
		}
	}
	
	else if($ope=="mayor")
	{
		if($num1>$num2 && $num1>$num3)
		{
			$res="El mayor es el numero: ".$num1;
			
		}
		if($num2>$num1 && $num2>$num3)
		{
			$res="El mayor es el numero: ".$num2;
		}
		
		if($num3>$num1 && $num3>$num2)
		{
			$res="El mayor es el numero: ".$num3;
		}		
	}
	
	else if($ope=="menor")
	{
		if($num1<$num2 && $num1<$num3)
		{
			$res="El menor es el numero: ".$num1;
			
		}
		if($num2<$num1 && $num2<$num3)
		{
			$res="El menor es el numero: ".$num2;
		}
		
		if($num3<$num1 && $num3<$num2)
		{
			$res="El menor es el numero: ".$num3;
		}		
	}	

?>