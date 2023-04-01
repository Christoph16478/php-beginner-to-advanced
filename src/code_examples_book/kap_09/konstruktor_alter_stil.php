<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Klasse Kunde mit Objekt</title>
</head>
<body>
<p>Alter Stil der Konstruktor-Methode, seit PHP 7 deprecated</p>
<?php
class Kunde 
{
  public $name;
  public function kunde($name) 
  {
    $this->name=$name;
  }
  public function halloSagen()
 {
    echo "Hallo {$this->name}";
  }
}
$neuerKunde = new Kunde("Anja");
$neuerKunde->halloSagen();

?>

</body>
</html>