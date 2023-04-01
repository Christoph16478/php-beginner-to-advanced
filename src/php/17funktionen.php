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
$ehrung="Sehr geehrtr(r)";
define("WELCOME","Servus");//Konstanten sin immer global

function gruss($name,$anrede="Frau")
{
	global $ehrung;//Erlaubnis
	echo WELCOME." Hallo $ehrung $anrede $name<br>";
}

function kubik($laenge,$breite=1,$hoehe=1)
{
	return 	$laenge*$breite*$hoehe;
}

//Funktion wird aufgerufen
gruss("Berta");
gruss("Andreas","Herr");

$ergebnis=kubik(2,3,4);
echo $ergebnis;
?>
</div>
</body>
</html>