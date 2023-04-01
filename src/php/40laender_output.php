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
$sql="SELECT Land,Einwohner, Einwohner/Flaeche as Dichte FROM laender";

$abfrage=$db->query($sql);

$output="";
$counter=0;
$menschen=0;
//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	$output.= $row["Land"]." ".$row["Dichte"]."<br>\n";
	$counter++;
	$menschen+=$row["Einwohner"];
}

echo "$menschen Menschen leben in  $counter Ländern <hr>";
echo $output;
?>
</div>
</body>
</html>