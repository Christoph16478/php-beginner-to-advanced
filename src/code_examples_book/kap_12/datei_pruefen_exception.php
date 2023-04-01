<!DOCTYPE html>
<html>
 <head>
  <title>Dateiprüfung mit Ausnahmen</title>
  <meta charset="UTF-8" />
</head>
<body>
<?php
require "Dateilesen.php";
try {
  $meinedatei = new Dateilesen("beschreibbar/zaehler.txt");
  $meinedatei->oeffnen();
  echo $meinedatei->lesen();
  $meinedatei->schliessen();
} catch (Exception $e) {
  echo "Folgender Fehler ist aufgetreten: " 
         . $e->getMessage();
}

?>
</body>
</html>
