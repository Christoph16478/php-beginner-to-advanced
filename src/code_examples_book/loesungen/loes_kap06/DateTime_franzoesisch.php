<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>DateTime</title>
</head>
<body>
<?php
$formatter = new IntlDateFormatter(
    "fr-FR ",
    IntlDateFormatter::LONG,
    IntlDateFormatter::NONE,
    "Europe/Berlin",
    IntlDateFormatter::GREGORIAN,
    "EEEE dd. MMMM YYYY"
);
$weihnachten = new DateTime("24.12.2022");
echo $formatter->format($weihnachten);



?>
</body>
</html>
