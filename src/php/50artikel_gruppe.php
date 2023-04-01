<?php
require_once "include/include_db.php";
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
$sql="SELECT * FROM artikel 
ORDER BY artikelGruppe ASC,artikelName ASC";

$abfrage=$db->query($sql);

$artikelGruppeAlt="";
//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	if( $artikelGruppeAlt<>$row["artikelGruppe"] )
	{
		echo "<h2>".$row["artikelGruppe"]."</h2>";	
	}
	
	echo $row["artikelID"]." ".$row["artikelName"]." ".$row["artikelGruppe"]."<br>";
	$artikelGruppeAlt=$row["artikelGruppe"];
}
?>
</div>
</body>
</html>