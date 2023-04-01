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
$orte=["Wien","Linz","Rom","Graz","London"];

foreach($orte as $element)
{
	echo "<input type='radio' name='ort' value='$element'>$element<br>";
}
?>
</div>
</body>
</html>