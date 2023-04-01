<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<?php

$email="susi@hallo.at";
//if(!filter_var($email, FILTER_VALIDATE_EMAIL))
if(filter_var($email, FILTER_VALIDATE_EMAIL)===false)
{
	echo "Keine gültige Email!";		
}
else
{
	echo "Email ok";		
}

echo "<br>\n";

// Zahl checken
echo "<br>\n";
//ab hier optional...

$zahl=300.7;

if(!filter_var($zahl, FILTER_VALIDATE_INT))
{
	echo "Keine gültige Ganzzahl!";		
}
else
{
	echo "Ganzzahl ok";		
}

echo "<br>\n";


?>
</body>
</html>

















