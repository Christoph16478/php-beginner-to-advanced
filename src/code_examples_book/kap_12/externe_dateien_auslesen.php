<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Webseite auslesen</title>
</head>
<body>
<?php
$url="https://google.de/";
$inhalt = file_get_contents($url);
if ($inhalt === false) {
  echo "Hat nicht geklappt";
}
else {
  echo $inhalt;
}
?>
</body>
</html>
