<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Text auslesen</title>
</head>
<body>
<?php
$datei="datei.txt";
$inhalt = @file_get_contents($datei);
if ($inhalt === false) {
  echo "Hat nicht geklappt";
}
else {
  echo "Inhalt ist: $inhalt";
}
?>
</body>
</html>