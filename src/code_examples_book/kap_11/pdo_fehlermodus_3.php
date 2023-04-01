<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>PDO</title>
</head>
<body>
<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=garten;charset=UTF8", "root", "geheim");
  //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT name, beschreibung FROM pflanzn WHERE beschreibung IS NOT NULL";
  $ergebnis = $db->query($sql);
  if ($ergebnis !== false) {
    while ($zeile = $ergebnis->fetch(PDO::FETCH_ASSOC)) {
      echo $zeile["name"] . ": " . $zeile["beschreibung"] . "<br />\n";
    }
  } else {
    print_r($db->errorInfo());
  }
} catch (PDOException $e) {
  echo "Hat nicht geklappt: " . $e->getMessage();
}
?>
</body>
</html>

