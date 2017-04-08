<html>
<head></head>
<title></title>
<body>
<h1>hello world </h1>

<p>Countdown from 0 to 1000</p>
<p>
<?php
	echo "<table border='1'><br />";
	for ($x = 0; $x <= 1000; $x++) 
	{
		echo "<tr>";
		$f = 1000-$x;		
		echo "<td>".$f."</td>";
		echo "<td>".$x."</td>";
		echo "</tr>";			
	}
	//echo "</table>";
?>
	</table>
</p>
</body>


</html>