<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Netto-Brutto-Formatiert</title>
</head>
<body>
<?php

function brutto($netto) 
{
  return number_format($netto * 1.19, 2, ",", ".");
}
$betrag = 24;
$bruttowert = brutto($betrag);
echo number_format($betrag, 2, ",", ".") . " Euro ergibt $bruttowert Euro inkl. MWSt.<br />\n";


?>
</body>
</html>