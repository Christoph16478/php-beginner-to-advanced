<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Assoziatives Array</title>
</head>
<body>
<?php
$farben = ["rot" =>   "#FF0000", 
          "grün" =>   "#00FF00", 
          "blau" =>   "#0000FF"];
$farben["schwarz"] =  "#000000";
print_r($farben);
echo "<br /><br />";
foreach ($farben as $k => $v){
  echo "Schlüssel: $k, Wert: $v<br />\n";
}
?>
</body>
</html>
