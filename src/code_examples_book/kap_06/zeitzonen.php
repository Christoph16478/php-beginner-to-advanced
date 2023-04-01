<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DateTime</title>
</head>
<body>
<?php
//http://php.net/manual/de/timezones.php

$format = "d.m. H:i:s";
$jetzt = new DateTime();
$jetztMexiko = new DateTime("America/Mexico_City");

echo $jetzt->format($format);
echo "<br>\n";
echo $jetztMexiko->format($format);

?>
</body>
</html>
