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
$sql="SELECT * FROM user";

$abfrage=$db->query($sql);

//Zeile für Zeile
while( $row= $abfrage->fetch() )
{
	echo $row["userName"]." ".$row["userEmail"]."<br>";
}

?>
</div>
</body>
</html>