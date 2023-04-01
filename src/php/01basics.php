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
// ein einzeiliger Kommentar

/*ein Kommentar über 
mehrere Zeilen*/

# Auch ein Kommentar
echo "<h1>Guten Tag</h1>\n";//Kommentar
echo "<p>Willkommen im Kurs</p>\n";
echo "<a href='test.php' title='Das ist ein Link'>zum Test</a>\n";
echo "<br>\n";
echo "<img src='bilder/rom.jpg' alt='Rom' width='100'>";
//echo '<img src="bilder/rom.jpg" alt="Rom">';
//echo "<img src=\"bilder/rom.jpg\" alt=\"Rom\">";

//Einbinden einer Include-Datei
include "include/include_footer.php";

?>
</div>
</body>
</html>