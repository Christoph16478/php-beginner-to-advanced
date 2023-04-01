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
$limit=5;
$auswahl=4;

for($zahl=1;$zahl<=$limit;$zahl++)
{
	if($zahl==$auswahl)
	{
		echo "<input type='radio' value='$zahl' name='anzahl' checked>$zahl<br>\n";
	}
	else
	{
		echo "<input type='radio' value='$zahl' name='anzahl'>$zahl<br>\n";
	}	
}
?>
</div>
</body>
</html>