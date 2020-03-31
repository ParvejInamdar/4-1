<?php
 $a=$_GET['f1'];
 $i;
 $b=1;
 for($i=$a;$i>=1;--$i)
 {
  $b=$b*$i;
 }
 echo("Factorial of ".$a." = ".$b);
?>
