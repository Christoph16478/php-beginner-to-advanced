<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>DateTime</title>
</head>
<body>
<?php
$tage = [
    "Mon" => "Montag",
    "Tue" => "Dienstag",
    "Wed" => "Mittwoch",
    "Thu" => "Donnerstag",
    "Fri" => "Freitag",
    "Sat" => "Samstag",
    "Sun" => "Sonntag"];
$weihnachten = new DateTime("24.12.2022");
//echo $weihnachten->format("D");
echo $tage[$weihnachten->format("D")];
echo $weihnachten->format(",  d.m.Y");

?>
</body>
</html>
