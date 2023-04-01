<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>DateTime</title>
</head>
<body>
<?php
$jetzt = new DateTime();
$morgen = new DateTime("+1 day");
$buechnergeburtstag = new DateTime("17.10.1813");
$weihnachten = new DateTime("2020-12-24");

echo $jetzt->format("d.m.Y");
echo "<br>\n";
echo $morgen->format("d.m.Y");
echo "<br>\n";
echo $buechnergeburtstag->format("d.m.Y");
echo "<br>\n";
echo $weihnachten->format("d.m.Y");
echo "<br>\n";
?>
</body>
</html>
