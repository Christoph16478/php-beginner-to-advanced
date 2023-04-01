<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>isset</title>  
</head>
<body>
<?php
$name = "Tim";
if (isset($name)) {
    $benutzer = $name;
} else {
    $benutzer = "Unbekannter";
}
echo "Hallo $benutzer";

?>
</body>
</html>
