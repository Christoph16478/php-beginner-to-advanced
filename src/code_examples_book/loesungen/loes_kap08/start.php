<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login mit Sessions</title>
  <style>
    .fehler {
      color: red;
    }

    label {
      display: block;
    }
  </style>
</head>
<body>
<?php
if (isset($_GET["f"]) && ($_GET["f"] == 1 )) {
  echo "<p class='fehler'>Benutzer nicht vorhanden</p>";
}
elseif (isset($_GET["f"]) && ($_GET["f"] == 2 )) {
  echo "<p class='fehler'>Passwort passt nicht</p>";
}
?>
<form method="post" action="login.php">
  <p>
    <label>Ihr Name: </label>
    <input type="text" name="name" size="20">
  </p>
  <p>
    <label for="passwort">Passwort:</label>
    <input type="password" name="passwort" size="20">
  </p>
  <input type="submit" value="Login">
</form>
</body>
</html>
