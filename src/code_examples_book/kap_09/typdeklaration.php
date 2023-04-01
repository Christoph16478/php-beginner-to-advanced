<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Typdeklaration</title>
</head>
<body>
<?php
interface Schreiben
{
  public function oeffnen();
  public function schreiben();
  public function schliessen();
}
class Dateischreiben implements Schreiben
{ 
   public function oeffnen()
  {
    echo "Datei geöffnet. ";
  }
  public function schreiben() 
  {
    echo "In Datei schreiben. ";
  }
  public function schliessen()
  {
    echo "Datei geschlossen. ";
  }
}
$beispiel = new Dateischreiben();

function direktschreiben(Dateischreiben $obj) 
{
  $obj->oeffnen();
  $obj->schreiben();
}
direktschreiben($beispiel);

?>
</body>
</html>
