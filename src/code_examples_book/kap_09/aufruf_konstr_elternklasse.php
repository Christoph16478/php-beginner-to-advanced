<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Konstruktor Elternklasse</title>
</head>
<body>
<?php
class Elternklasse
{
  public function __construct() 
  {
    echo "In " . get_class($this);
    echo ": Aufruf des Konstruktors der Elternklasse<br />\n";
  }
}

class Kindklasse1 extends Elternklasse 
{

} 

class Kindklasse2 extends Elternklasse 
{
  public function __construct() 
  {
    echo "In " . get_class($this);
    echo ": Aufruf des Konstruktors der Kindklasse<br />\n";
    parent::__construct();
  }
} 

$objekt1 = new Elternklasse();
$objekt2 = new Kindklasse1();
$objekt3 = new Kindklasse2();

?>

</body>
</html>