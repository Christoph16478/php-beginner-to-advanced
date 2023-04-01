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

foreach($daten as $key=>$value)
{
	echo "$key hat den Wert $value <br>";
}

?>
</div>
</body>
</html>