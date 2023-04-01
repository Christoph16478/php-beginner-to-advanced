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
$daten=[
"vorname"=>"Andreas",
"zuname"=>"Reinisch",
"plz"=>1190
];

//Element hinzufügen
$daten["ort"]="Wien";

//Element ändern
$daten["vorname"]="Andy";

//Element entfernen
unset($daten["plz"]);

foreach($daten as $key=>$value)
{
	echo "$key hat den Wert $value <br>";
}

?>
</div>
</body>
</html>