<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Beispielformular</title>
</head>
<body>
<?php
if (!isset($_GET["vorname"])) {
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
Ihr Vorname: <br />
<input type="text" name="vorname" size="20" maxlength="30" />
<br />
Ihr Nachname: <br />
<input type="text" name="nachname" size="20" maxlength="30" />
<br />
E-Mail: <br />
<input type="email" name="email" size="20" maxlength="30" />
<br />
Telefon: <br />
<input type="tel" name="telefon" size="20" maxlength="30" />
<br />
<input type="submit" value="Abschicken" />
</form>
<?php
} else {
    echo "Ihre Eingaben<br />\n" 
    . "Vorname: " . htmlspecialchars($_GET["vorname"]) 
    . "<br />\n Name: " . htmlspecialchars($_GET["nachname"]) 
    . "<br />\n E-Mail: " . htmlspecialchars($_GET["email"]) 
    . "<br />\n Telefon: " . htmlspecialchars($_GET["telefon"]) 
    . "<br />\n";
}
?>

</body>
</html>
