<?php
session_start();
$host = $_SERVER["HTTP_HOST"];
$uri = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");

//Hash nie in doppelten Anführungszeichen!
$benutzer = [
  "frodo" => '$2y$10$Od5E3W.JQNta0Vjd.F1OleO8tYa4lUoWUoWtfr6NbhDI8jXB0XGwC',
  "sam" => '$2y$10$gJXdI4jT.kU3al50w9uCHOwJMrr1YvuSFIvlv1cC.Eq.ZCZIVLQOi',
  "merry" => '$2y$10$QaxNOMPRD4n9bIn4IUBWH.Hz0BVbN3Dq3c2PRhkwtKEaZceLbxU8q'
];

$name = $_POST["name"] ??  "";
$passwort_aktuell = $_POST["passwort"] ??  "";

if (!array_key_exists($name, $benutzer)) {
  $extra = "start.php?f=1";
} elseif (!password_verify($passwort_aktuell, $benutzer[$name])) {
  $extra = "start.php?f=2";
} else {
  $extra = "willkommen.php";
  $_SESSION["login"] = "ok";
  $_SESSION["name"] = $name;
}

header("Location: http://$host$uri/$extra");

