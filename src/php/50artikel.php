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
$sql="SELECT * FROM artikel";

$abfrage=$db->query($sql);

//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	echo $row["artikelID"]." ".$row["artikelName"]."<br>";
}
?>
</div>
</body>
</html>