<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Dateien mit Klassen bei Bedarf laden</title>
</head>
<body>
<?php

spl_autoload_register(function ($klasse) {
  require_once $klasse . ".php";
});

$obj  = new Beispiel1();
$obj->info();
$obj2 = new Beispiel2();
$obj2->info();
?>

</body>
</html>
