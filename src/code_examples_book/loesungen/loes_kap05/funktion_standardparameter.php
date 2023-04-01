<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktion</title>
</head>
<body>
<?php
/* Ohne Defaultparameter */
function kostenberechnen($anzstunden, $stundensatz) {
  $gesamt = $stundensatz * $anzstunden;
  return $gesamt;
}
$anzstunden = 12;
$stundensatz = 80;
$kosten = kostenberechnen($anzstunden, $stundensatz);
echo "Die Kosten: $kosten<br />\n";

/* Mit Defaultparameter */
function kostenberechnen2($anzstunden, $stundensatz = 75) {
  $gesamt = $stundensatz * $anzstunden;
  return $gesamt;
}

$anzstunden = 10;

/* Aufruf nur mit Anzahl der Stunden, der Defaultparameter wird genommen */
$kosten = kostenberechnen2($anzstunden);
echo "Die Kosten: $kosten<br />\n";


/* Aufruf mit zwei Parametern - der angegebene Stundensatz wird genommen */
$kosten = kostenberechnen2($anzstunden, 60);
echo "Die Kosten: $kosten<br />\n";

?>
</body>
</html>