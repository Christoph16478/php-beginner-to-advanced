<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Sortieren</title>
</head>
<body>
<?php

echo "<pre>";
$umlaute = ["Abend", "Oper", "Öl", "Ärger"];
echo "\nStandardsortierung\n";
sort($umlaute);
print_r($umlaute);
/* für Windows */
//setlocale(LC_ALL, "de_DE@euro", "de_DE", "deu_deu", "de", "ge", "deu", "german");
sort($umlaute, SORT_LOCALE_STRING);
print_r($umlaute);
echo "</pre>";
?>

</body>
</html>
