<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>PDO</title>
</head>
<body>
<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=garten;charset=UTF8", "root", "geheim");
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT name, beschreibung FROM pflanzen WHERE beschreibung IS NOT NULL";
  foreach($db->query($sql) as $zeile) {
    echo $zeile["name"] . ": " . $zeile["beschreibung"] . "<br />\n";
  }
} catch (PDOException $e) {
  echo "Hat nicht geklappt: " . $e->getMessage();
}
?>
</body>
</html>

