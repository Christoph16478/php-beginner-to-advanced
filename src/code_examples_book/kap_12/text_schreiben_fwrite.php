<!DOCTYPE html>
<html>
 <head>
  <title>Text schreiben</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
$inhalte = ["Riesenrad", "Achterbahn", "Schießstand"];
$datei ="beschreibbar/beispiel.txt";
$dh = fopen($datei, "w");
foreach ($inhalte as $inhalt) {
  fwrite($dh, "$inhalt ");
}
fclose($dh);
?>
</body>
</html>
