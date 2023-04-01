<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Einmaleins</title>
<style>
.wichtig { background-color: red; }
</style>
</head>
<body>
<table border="1">
<?php
$zufallszahl = rand(1, 10);
for ($i = 1; $i <= 10; $i++) {
    if ($i == $zufallszahl) {
        echo "<tr class='wichtig'>\n";
    } else {
        echo "<tr>\n";
    }
    for ($j = 1; $j <= 10; $j++) {
        $zahl = $i * $j;
        echo "\t<td>$zahl</td>\n";
    }
    echo "</tr>\n";
}
?>
</table>
</body>
</html>
