<?php
session_start();
$host = $_SERVER["HTTP_HOST"];
$uri = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");

$benutzer = [
  "frodo" => "12345",
  "sam" => "6789",
  "merry" => "asdfg"
];

if(isset($_POST["name"])) {
  $name = $_POST["name"];
} else {
  $name = "";
}
if(isset($_POST["passwort"])) {
  $passwort_aktuell = $_POST["passwort"];
} else {
  $passwort_aktuell = "";
}


if (!array_key_exists($name, $benutzer)) {
  $extra = "start.php?f=1";
} elseif ($benutzer[$name] != $passwort_aktuell) {
  $extra = "start.php?f=2";

} else {
  $extra = "willkommen.php";
  $_SESSION["login"] = "ok";
  $_SESSION["name"] = $name;
}

header("Location: http://$host$uri/$extra");
