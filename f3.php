<?php
 $country=array("Tokyo"=>"Japan","Mexico City"=>"Mexico","New York City"=>"USA","Mumbai"=>"India","Seoul"=>"Korea","Shanghai"=>"China","Lagos"=>"Nigeria","Buenos Aires"=>"Argentina","Cairo"=>"Egypt","London"=>"England");
foreach($country as $key=>$value)
{
	if(isset($_GET['submit']))
 	{
 		if(isset($_GET['city']))
 		{	
			foreach($_GET['city'] as $cities)
 			{ 				
				if($cities==$key)
				{
  					echo("<br>".$cities." is in ".$value."<br>");
				}
			}
		}
	}
 }

?>