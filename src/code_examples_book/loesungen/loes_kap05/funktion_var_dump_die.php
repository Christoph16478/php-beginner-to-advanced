<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Funktion</title>
</head>
<body>
<?php
//dd - dump und die
function dd($arr) {
  echo "<pre>";
  var_dump($arr);
  echo "</pre>";
  die();
}
$arr = ["ehne", "mehne", "muh"];
dd($arr);
?>
</body>
</html>