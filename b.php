<?php 

$no1=$_GET['n1'];
  	 $no2=$_GET['n2'];
  	 $ope=$_GET['op1'];
	switch($ope)
	{
		case "+":
			$z=$no1+$no2;
			echo(nl2br());
			echo("\nAddition is:".$z);
			break;
		case "-":
			$z=$no1-$no2;
			echo("Subtraction is:".$z);
			break;
		case "*":
			$z=$no1*$no2;
			echo("Multiplication is:".$z);
			break;
		case "/":
			$z=$no1/$no2;
			echo("Division is:".$z);
			break;
		deafult:
			echo("enter proper inputs");
			break;
	}
?>