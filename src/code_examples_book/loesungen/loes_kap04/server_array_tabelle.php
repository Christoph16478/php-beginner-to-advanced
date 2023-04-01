<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>$_SERVER</title>
</head>
<body>
<?php
echo "<table border='1'>\n";
foreach ($_SERVER as $k => $v){
  echo "\t<tr><td>$k</td><td>$v</td></tr>\n";
}
echo "</table>\n";
?>
</body>
</html>
