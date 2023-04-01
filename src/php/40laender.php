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
$sql="SELECT Land, Einwohner/Flaeche as Dichte FROM laender";

$abfrage=$db->query($sql);



//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	echo $row["Land"]." ".$row["Dichte"]."<br>";
}

?>
</div>
</body>
</html>