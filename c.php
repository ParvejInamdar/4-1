<?php
	$a=$_GET['n3'];
	if($a<0)
		echo($a." is negative number");
	elseif($a>0)
		echo($a." is positive number");
	else
		echo($a." is zero");
?>