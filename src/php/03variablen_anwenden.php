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
$ordner="bilder";
$datei="see.jpg";
$alt="Bild vom See";
$breite=100;

echo "<img src='$ordner/$datei' alt='$alt' width='$breite'>";
echo "<br>";

$ziel="01basics.php";
$text="zum Anfang";
$title="zur Startseite";
echo "<a href='$ziel' title='$title'>$text</a>";


?>
</div>
</body>
</html>