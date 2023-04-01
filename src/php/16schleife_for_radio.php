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
$limit=3;

for($zahl=1;$zahl<=$limit;$zahl++)
{
	echo "<input type='radio' value='$zahl' name='anzahl'>$zahl<br>\n";
}

?>
</div>
</body>
</html>