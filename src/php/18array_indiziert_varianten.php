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
//Variante 1
$orte=["Wien","Linz","Rom","Graz"];


//Variante 2
//$orte=array("Paris","Wien","Linz","Rom","Graz");

//Variante 3
//$orte[]="Wien";
//$orte[]="Linz";

foreach($orte as $element)
{
	echo $element;
	echo "<br>\n";
}
?>
</div>
</body>
</html>