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
//wenn in der url eine seite übergeben wird
if( isset( $_GET["seite"]  )  )
{
	//übergebene seite sicher als Zahl darstellen
	$seite=(int)$_GET["seite"];
	$user=$_GET["user"];

	echo "$seite $user";
}



?>
</div>
</body>
</html>