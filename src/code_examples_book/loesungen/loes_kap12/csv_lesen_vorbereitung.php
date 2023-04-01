<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>CSV-Dateien lesen</title>
</head>
<body>
<?php
$datei="lieferanten.csv";
$dh = fopen($datei, "r");
echo "<pre>";
while (!feof($dh)) {
  $zeile = fgetcsv($dh);
  print_r($zeile);
}
fclose($dh);
echo "</pre>";
?>
</body>
</html>