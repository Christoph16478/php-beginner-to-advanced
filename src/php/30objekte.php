<?php
//"Bauplan" der Objekte
class Auto
{
	//Eigenschaften: die Variablen im Objekt
	public $farbe;
	public $geschwindigkeit;
	
	//Methoden: die Funktionen im Objekt
	public function lackieren($lack)
	{
		$this->farbe=$lack;//mit $this-> Zugriff auf Eigenschaften
	}
	
	public function fahren($kmh)
	{
		$this->geschwindigkeit=$kmh;
	}	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
<?php
//Objekt wird aus der Klasse erzeugt
$vw=new Auto;
//Aufruf der eigenen Funktion ("Methode")
$vw->lackieren("rot");
$vw->fahren(50);

var_dump($vw);



?>
</div>
</body>
</html>