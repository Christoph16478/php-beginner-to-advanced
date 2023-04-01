<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>DateTime</title>
</head>
<body>
<?php
$datetime = new DateTime("2020-01-01 12:00:00");
echo $datetime->format("d.m.Y H:i:s");

echo "<br>\n";
$interval = new DateInterval("P2WT1H20M");

$datetime->add($interval);
echo $datetime->format("d.m.Y H:i:s");

?>
</body>
</html>
