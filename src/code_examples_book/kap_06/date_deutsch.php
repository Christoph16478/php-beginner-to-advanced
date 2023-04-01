<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>date()</title>
</head>
<body>
<?php
date_default_timezone_set("Europe/Berlin");
$tage = [
        "Mon" => "Montag",
        "Tue" => "Dienstag",
        "Wed" => "Mittwoch",
        "Thu" => "Donnerstag",
        "Fri" => "Freitag", 
        "Sat" => "Samstag",
        "Sun" => "Sonntag"
	];
$monate = [
        "Jan" => "Januar",
        "Feb" => "Februar",
        "Mar" => "März",
        "Apr" => "April",
        "Mai" => "Mai",
        "Jun" => "Juni",
        "Jul" => "Juli",
        "Aug" => "August",
        "Sep" => "September",
        "Oct" => "Oktober",
        "Nov" => "November",
        "Dec" => "Dezember"
	];
$monat = $monate[date("M")];
$wochentag = $tage[date("D")];
echo "$wochentag, den ";
echo date("j. " ) .$monat;

?>
</body>
</html>