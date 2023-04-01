<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Sortieren</title>
</head>
<body>
<?php
$da = new Collator("da_DK");
$de = new Collator("de_DE");

echo "<pre>";
$sonderzeichen = ["æ", "a", "ø", "z"];
echo "\nSortierung nach da_DK\n";
$da->sort($sonderzeichen);
print_r($sonderzeichen);

echo "\nSortierung nach de_DE\n";
$de->sort($sonderzeichen);
print_r($sonderzeichen);
echo "</pre>";
?>

</body>
</html>
