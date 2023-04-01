<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Sortieren</title>
</head>
<body>
<?php
function sortieren($a, $b)
{
  return $a <=> $b;
}
$array = [20, 5, 3, 17];
usort($array, "sortieren");
echo "<pre>";
print_r($array);
echo "</pre>";
?>
</body>
</html>