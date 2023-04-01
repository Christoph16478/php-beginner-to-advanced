<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>PDO</title>
</head>
<body>
<?php
//Passwort anpassen!
try {
  $db = new PDO("mysql:host=localhost;dbname=garten;charset=UTF8", "root", "geheim");
  //$db = new PDO("sqlite:C:\\xampp\\htdocs\\php-beispiele\\beispiel.db");
} catch (PDOException $e) {
  echo "Konnte Verbindung nicht erstellen " . $e->getMessage();
}
?>
</body>
</html>

