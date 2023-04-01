<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>PDO</title>
</head>
<body>
<?php
require "Pflanze.php";
try {
  $pdo = new PDO("mysql:host=localhost;dbname=garten;charset=UTF8", "root", "geheim");
  $stmt = $pdo->prepare("SELECT * FROM pflanzen");
  $stmt->execute();
  $pflanzen = $stmt->fetchAll(PDO::FETCH_CLASS, "Pflanze");
  //print_r($pflanzen);
  foreach ($pflanzen as $pflanze) {
    echo "<p>" . $pflanze->nameausgeben() . ": "
      . $pflanze->beschreibungausgeben()
      . "<em> " . $pflanze->preisausgeben()
      . "</em></p>\n";
  }
}
catch (PDOException $e){
  echo  "Fehler: " . $e->getMessage();
}
?>
</body>
</html>



