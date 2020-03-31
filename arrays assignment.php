<html>
 <head></head>
 <body>
   <?php
        echo("Arrays-1(deleting element from the array).<br>");
   	$month = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	echo("<br>array before deleting:<br>");
        print_r($month);
        echo("<br>array after deleting:<br>");
	unset($month[3]);
	print_r($month);

        echo("<br><br><br><br>");
        echo("<br>Arrays-2(sorting of array,add element to the  array)<br>");
	$city=array("Tokyo","Mexico city","New York city","Mumbai","Seoul","Shanghai","Lagos","Buenos Aries","Cario","London");
	echo("<br><br>Cities are:<br><br>");
	for($i=0;$i<count($city);$i++)
	{
		echo($city[$i].",");
	}
	echo("<br><br>Sorted array is:<br><br>");
	sort($city);
	for($i=0;$i<count($city);$i++)
        {
		echo($city[$i].",");
        }
	echo("<br><br>after adding elements<br><br>");
	array_push($city,"Los Angeles","Osaka","Beijing");
	for($i=0;$i<count($city);$i++)
	{
		echo($city[$i].",");
	}
	echo("<br><br>Sorted array is:<br><br>");
	sort($city);
	for($i=0;$i<count($city);$i++)
        {
		echo($city[$i].",");
        } 
   ?>
 </body>
</html>