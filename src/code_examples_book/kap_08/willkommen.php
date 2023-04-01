<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] == "ok") {
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="UTF-8">
    <title>Willkommen im geschützten Bereich</title>
  </head>
  <body>
  <?php
  echo "<h1>Hallo " . $_SESSION["name"] . "</h1>";
  ?>
  <p>Hier stehen viele weitere interessante Informationen</p>
  <p><a href="logout.php">Ausloggen</p>
  </body>
  </html>
  <?php
} else {
  $host = $_SERVER["HTTP_HOST"];
  $uri = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
  $extra = "start.php";
  header("Location: http://$host$uri/$extra");
}