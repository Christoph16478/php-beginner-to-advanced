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
Cookie lesen:
<?php
if( isset( $_COOKIE["user"] ) )
{
	echo $_COOKIE["user"];
}



?>
</div>
</body>
</html>