<?php
require "Pflanze.php";
try {
  $pdo = new PDO("mysql:host=localhost;dbname=garten;charset=UTF8", "root", "geheim");
  $stmt = $pdo->prepare("SELECT * FROM pflanzen");
  $stmt->execute();
  $pflanzen = $stmt->fetchAll(PDO::FETCH_CLASS, "Pflanze");
  print_r($pflanzen);
}
catch (PDOException $e){
  echo  "Fehler: " . $e->getMessage();
}
