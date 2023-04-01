<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
<?php
$zahl=1;
$limit=10;

while( $zahl<=$limit )
{
	echo $zahl;
	$zahl++;//Zahl wird um 1 erhöht
	echo "<br>";
}

?>
</div>
</body>
</html>