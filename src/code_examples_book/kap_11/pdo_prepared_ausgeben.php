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
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT name, beschreibung, preis
          FROM pflanzen
          WHERE preis < :preis";
  $stmt = $db->prepare($sql);
  $stmt->execute([
    ":preis" => 8
  ]);
  while ($zeile = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $zeile["name"] . ": " . $zeile["beschreibung"] . " (". $zeile["preis"] .")<br />\n";
  }
} catch (PDOException $e) {
  echo "Hat nicht geklappt: " . $e->getMessage();
}
?>
</body>
</html>

