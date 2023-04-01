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
//Index="Platzkarte"-beginnt bei 0
$orte=["Wien","Linz","Rom","Graz"];

//Einzelnes Element ausgeben
echo $orte[2];

//Neues Element hinzufügen
$orte[]="Salzburg";

//Element ändern
$orte[2]="Klagenfurt";

//Element entfernen
unset($orte[1]);

echo "<hr>\n";
foreach($orte as $element)
{
	echo $element;
	echo "<br>\n";
}
?>
</div>
</body>
</html>