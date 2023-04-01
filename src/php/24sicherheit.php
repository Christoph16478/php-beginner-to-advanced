<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
$eingabe="<p>Willkommen <strong>auf 
<em>meiner</em> tollen und guten Webseite</strong><p>";
echo $eingabe;
echo "<br>\n";

//Siehe Quellcode!
echo htmlspecialchars($eingabe);
echo "\n<br>\n";

echo "<hr>\n";
//Tags entfernen
echo strip_tags($eingabe);
echo "<br>\n";
//einzelne Tags zulassen
echo strip_tags($eingabe,"<em><p>");

?>
</body>
</html>



























