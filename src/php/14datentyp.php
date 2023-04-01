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
$test=true;//Boolean
$test="Hallo";//String
$test=234;//Integer-Ganzzahl
$test=1.5;//Float-Kommazahl
$test=["vw","audi","bmw",5];//Array

var_dump($test);//Untersuchung der Variablen
echo "<br>";

$user="<script>alert('BÖSE')</script>";
//Datentyp umwandeln
echo (int)$user;

?>
</div>
</body>
</html>