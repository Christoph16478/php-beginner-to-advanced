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
$orte=["Wien","Linz","Rom","Graz"];


foreach($orte as $element)
{
	echo $element;
	echo "<br>\n";
}
?>
</div>
</body>
</html>