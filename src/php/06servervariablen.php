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
//IP-Adresse
echo $_SERVER["REMOTE_ADDR"];
echo "<br>\n";
//Eigene Seite
echo $_SERVER["PHP_SELF"];
echo "<br>\n";
//Browser
echo $_SERVER["HTTP_USER_AGENT"];
echo "<hr>\n";
/*
$_POST
$_GET
$_COOKIE
$_SESSION
*/
foreach($_SERVER as $schluessel=>$wert)
{
	echo "$schluessel : $wert <br>";
}


?>
</div>
</body>
</html>