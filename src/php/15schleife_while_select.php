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

$output="<select name='anzahl'>\n";
while( $zahl<=$limit )
{
	$output.="<option>$zahl</option>\n";
	$zahl++;//Zahl wird um 1 erhöht
}
$output.="</select>";

echo $output;

?>
</div>
</body>
</html>