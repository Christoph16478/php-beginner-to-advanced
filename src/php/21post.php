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
//Nur wenn der senden Button gedrückt wurde
if(  isset( $_POST["senden"] )  )
{
	$user=$_POST["user"];
	$pw=$_POST["pw"];

	echo "$user $pw wurden gesendet";
}
?>
</div>
</body>
</html>