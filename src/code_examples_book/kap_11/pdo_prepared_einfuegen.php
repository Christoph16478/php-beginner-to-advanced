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
           VALUES (?, ?, ?)";
  $stmt = $db->prepare($sql);
  $stmt->execute(["Schmetterlingsflieder", "lockt Schmetterlinge und  Bienen an", 10]);
  echo $stmt->rowCount() . " Datensatz/Datensätze betroffen";
} catch (PDOException $e) {
  echo "Hat nicht geklappt: " . $e->getMessage();
}
?>
</body>
</html>

