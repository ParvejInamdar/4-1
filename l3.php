<?php
 $i;
 $j;
 $ij;
echo("<table border=solid>");
 for($i=1;$i<=8;$i++)
 {
   echo("<tr>");
   for($j=1;$j<=8;$j++)
    {
      $ij=$i+$j;
      if($ij%2==0)
      {
	echo("<td height=20px width=20px bgcolor=#ffffff></td>");
      }
      else
      {
	echo("<td height=20px width=20px bgcolor=#000000></td>");
      }
    }
   echo("</tr>");
 }
echo("<table>");
?>