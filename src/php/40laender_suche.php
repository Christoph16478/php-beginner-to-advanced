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
<form method="post">
<input type="text" name="suche">
<input type="submit" name="senden">
</form>
<?php
if( isset( $_POST["senden"])   )
{
	//Was über das Suchfeld kommt
	$suche="%".strip_tags( $_POST["suche"] )."%";
}
else
{
	//Beim 1. Aufruf
	$suche="%%";
}

$sql="SELECT Land, Einwohner/Flaeche as Dichte FROM laender 
WHERE Land LIKE :suche";

$abfrage=$db->prepare($sql);
$abfrage->bindParam(":suche",$suche);
$abfrage->execute();

//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	echo $row["Land"]." ".$row["Dichte"]."<br>";
}

?>
</div>
</body>
</html>