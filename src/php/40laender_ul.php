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
$sql="SELECT Land,Flaeche, Einwohner/Flaeche as Dichte FROM laender";

$abfrage=$db->query($sql);

//Zeile für Zeile
$limit=100000;

echo "<ul>";
while( $row= $abfrage->fetch() )
{
	if( $row["Flaeche"]>$limit  )
	{
		$class="bunt";
	}
	else
	{
		$class="";	
	}
	
	echo "<li class='$class'>$row[Land] $row[Dichte]</li>";
}
echo "</ul>";
?>
</div>
</body>
</html>