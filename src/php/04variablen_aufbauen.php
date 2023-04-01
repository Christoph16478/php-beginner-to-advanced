<?php
$newsletter=true;
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
$mailtext="Hallo user";
//Schrittweiser Aufbau mit .=
$mailtext.=" danke für die Bestellung";
if($newsletter==true)
{
	$mailtext.=" Sie bekommen einen NL ";
}

$mailtext.=" Ihr E-Shop";

echo $mailtext;
?>
</div>
</body>
</html>