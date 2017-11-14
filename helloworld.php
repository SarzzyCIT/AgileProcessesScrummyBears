<!DOCTYPE html >
<html>
<head>
	<title>Hello World</title>
</head>
<body>

<?php

	$WorldVar = "World";
	$SunVar = "Sun";
	$MoonVar = "Moon";
	$WorldInfo = 92897000;
	$SunInfo = 720000000;
	$MoonInfo = 3456;
	
	echo "<p>Hello $WorldVar ! <br/>";
	echo "The $WorldVar is $WorldInfo from the $SunVar <br/>";
	echo "Hello ", $SunVar, " <br/>";
	echo "The $SunVar's core temp is aprox $SunInfo deg Far <br/>";
	echo "Hello ", $MoonVar, "! <br/>";
	echo "The $MoonVar is $MoonInfo miles in diameter.</p>";

?>

</body>
</html>