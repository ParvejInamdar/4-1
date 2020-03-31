<?php
 $no1=$_GET['n1'];
 $no2=$_GET['n2'];
 $i;
 echo("Numbers between ".$no1." to ".$no2);
 for($i=$no1;$i<=$no2;$i++)
 {
  echo("<br>".$i);
 }
?>