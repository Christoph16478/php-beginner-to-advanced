<?php

foreach($_POST as $key=>$value)
{
	echo "$key  :   $value <br>";
}

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
<form method="post">
	User:
	<input type="text" name="user"><br>
	AGB:
	<input type="checkbox" name="agb" value="ok"><br>
	<input type="submit" name="senden" value="absenden">
</form>


</div>
</body>
</html>