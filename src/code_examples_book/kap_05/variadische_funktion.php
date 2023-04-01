<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Variadische Funktion</title>
</head>
<body>
<?php
function kofferpacken(...$dinge) {
  foreach($dinge as $ding) {
    echo "$ding ";
  }
}
echo "Ich nehme mit: ";
echo kofferpacken("Zahnbürste", "Bluse", "Bergschuhe");




?>
</body>
</html>