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
  $sql = "INSERT INTO pflanzen 
           (name, beschreibung, preis)
           VALUES ('Ramblerrose', 'Blüte im Juni und Juli', 7)";
  $betroffeneZeilen = $db->exec($sql);
  echo $betroffeneZeilen . " Datensatz/Datensätze geändert";
} catch (PDOException $e) {
  echo "Hat nicht geklappt: " . $e->getMessage();
}
?>
</body>
</html>

