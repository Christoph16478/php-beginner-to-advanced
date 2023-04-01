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
$zahl1=11.7;
$zahl2=3.5;//Komma als Punkt!!!

//addieren
$ergebnis=$zahl1+$zahl2;
echo $ergebnis;
echo "<br>";

//subtrahieren
$ergebnis=$zahl1-$zahl2;
echo $ergebnis;
echo "<br>";

//dividieren
$ergebnis=$zahl1/$zahl2;
echo $ergebnis;
echo "<br>";

//multiplizieren
$ergebnis=$zahl1*$zahl2;
echo $ergebnis;
echo "<br>";

echo "<hr>";
//Zahlenfunktionen
$zahl=12345.6789;
//Runden auf 2 Kommastellen
echo round($zahl, 2);
echo "<br>";
//Formatiert ausgeben
echo number_format($zahl, 1, ",", ".");

?>
</div>
</body>
</html>