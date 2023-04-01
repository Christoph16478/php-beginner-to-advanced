<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Beispielformular</title>
</head>
<body>
<?php
$themen = ["HTML", "CSS", "JavaScript", "PHP"];
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
Ihr Nachname: <br />
<input type="text" name="nachname" size="20" maxlength="30" />
<br />
Themen: <br />
<select name="thema">
<?php 
foreach ($themen as $el) {
  echo "<option value='$el'>$el</option>\n";
}
?>
</select>
<br />
<input type="submit" value="Abschicken" />
</form>
<?php
if (!empty($_GET["nachname"]) && is_string($_GET["nachname"])) {
  echo "Ihre Eingaben<br />\n";
  echo "Name: " . htmlspecialchars($_GET["nachname"]) . "<br />\n";
  if (isset($_GET["thema"]) &&  (in_array($_GET["thema"], $themen))){
    echo "Das gewählten Thema: {$_GET['thema']}<br />\n ";
   }
}
?>

</body>
</html>

