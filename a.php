<?php
   $a=$_GET['t1'];
   	
	while($a<=250)
	{
		if($a<=50)
		{
			$a=$a*3.50;
			echo("Rs is=".$a);
			break;
		}
		else if($a>=51 and $a<=150)
		{
			$a=$a*4.00;
			echo("Rs is=".$a);
			break;
		}
		else if($a>=151 && $a<=250)
		{
			$a=$a*5.20;
			echo("Rs is=".$a);
			break;
		}
		else
		{
			$a=$a*6.50;
			echo("Rs is=".$a);
			break;
		}
	}
	
 ?>
