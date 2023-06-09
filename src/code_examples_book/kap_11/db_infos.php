<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Informationen ausgeben lassen</title>
</head>
<body>
<?php
require_once "db_daten.php";
$ergebnis = $mysqli->query("SELECT name as Pflanzenname, beschreibung AS Kurzbeschreibung, preis AS Nettopreis FROM pflanzen WHERE preis < 7;");
if ($ergebnis) {
  $spaltenzahl = $ergebnis->field_count;
  $zeilenzahl = $ergebnis->num_rows;
  $betroffen = $mysqli->affected_rows;

  echo "<p>Insgesamt $zeilenzahl Datensätze gefunden</p>\n";
  echo "<p>Spaltenanzahl: $spaltenzahl</p>\n";
  echo "<p>Betroffene Datensätze: $betroffen</p>\n";

  echo "<h2>Informationen zu den einzelnen Spalten</h2>\n";
  $infos = $ergebnis->fetch_fields();
  foreach($infos as $inf) {
    echo "<p>Name: " . $inf->name . "<br />\n";
    echo "Urspr. Name: " . $inf->orgname . "<br />\n";
    echo "Tabelle: " . $inf->table . "<br />\n";
    echo "Längste Zeichenkette: " . $inf->max_length . "</p>\n";
  } 
  $ergebnis->close();
}
$mysqli->close();
?>


</body>
</html>
