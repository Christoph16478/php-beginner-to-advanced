<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>date() vs DateTime</title>
</head>
<body>
<?php
$datumsstring = "4.4.2050";
echo date("d.m.Y", strtotime($datumsstring));
echo "<br>\n";
echo (new DateTime($datumsstring))->format("d.m.Y");
?>
</body>
</html>