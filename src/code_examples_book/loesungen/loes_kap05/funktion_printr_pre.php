<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktion</title>
</head>
<body>
<?php
function arrayinfo($arr) {
  echo "<pre>";
  print_r($arr);
  echo "</pre>";
}
$arr = ["ehne", "mehne", "muh"];
arrayinfo($arr);
?>
</body>
</html>