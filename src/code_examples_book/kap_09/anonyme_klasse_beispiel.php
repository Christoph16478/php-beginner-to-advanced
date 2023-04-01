<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Anonyme Klasse</title>
</head>
<body>
<?php
$anonym = new class
{
  public $eigenschaft = "rot";
};
echo $anonym->eigenschaft;
?>
</body>
</html>
