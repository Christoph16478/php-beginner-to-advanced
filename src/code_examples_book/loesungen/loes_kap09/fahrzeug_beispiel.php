<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Fahrzeug</title>
</head>
<body>
<?php
class Fahrzeug 
{
  public $hersteller;
  public $farbe;

  public function __construct($farbe, $hersteller) 
  {
    $this->farbe=$farbe;
    $this->hersteller = $hersteller;
  }

  public function starten()
  {
   echo "gestartet<br />\n";
  }
  
  public function stoppen()
  {
   echo "gestoppt<br />\n";
  }
}
$f = new Fahrzeug("rot", "Mobile");
$f->starten();
$f->stoppen();
?>
</body>
</html>