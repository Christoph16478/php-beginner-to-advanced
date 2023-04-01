<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>DatePeriod</title>
</head>
<body>
<?php
$start = new DateTime("01.01.2020 08:00");
$zeitspanne = new DateInterval("P1W");
$termine = new DatePeriod($start, $zeitspanne, 3);

foreach ($termine as $z) {
 echo $z->format("d.m.Y H:i"), "<br>\n";
}
?>
</body>
</html>
