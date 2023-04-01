<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Einmaleins</title>
</head>
<body>
<table border="1">
<?php
$i = 1;
while ($i <= 10) {
  echo "<tr>\n";
  $j = 1;
  while ($j <= 10) {
    $zahl = $i*$j;
    echo "\t<td>$zahl</td>\n";
    $j++;
  }
  echo "</tr>\n";
  $i++;
}
?>
</table>
</body>
</html>