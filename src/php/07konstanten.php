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
//Konstanten kann man nicht mehr ändern
const WERT=10;
echo "Zahl ist:".WERT;
echo "<br>\n";
//mit Funktion definieren
define("ZAHL",100);
echo "Zahl ist:".ZAHL;
echo "<br>\n";
//"Magische Kontsanten sin vordefiniert
echo __DIR__;//absoluter Pfad
echo "<br>\n";
echo PHP_VERSION;
?>
</div>
</body>
</html>