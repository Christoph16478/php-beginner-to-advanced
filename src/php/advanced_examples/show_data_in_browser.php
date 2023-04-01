<?php
require_once "include/include_db.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>show_data_in_browser</title>
	<meta charset="UTF-8">
</head>

<body>
<h1 style='text-align:center;'>Herzlich willkommen in unserer Bücherei</h1>
<p style='text-align:center;'>Hier sehen Sie unsere gesamtes Sortiment gelistet.</p>

<div id="wrapper">

<?php
$sql="SELECT * FROM buecher";
$abfrage = $db->query( $sql );
$abfrage_headers = $db->query( $sql );

echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";
$fields = array_keys( $abfrage_headers->fetch( PDO::FETCH_ASSOC ) );
foreach( $fields as $value )
{
	echo "<td>".$value."</td>";
}
while( $row = $abfrage->fetch() )
{
	echo "<tr>";
	echo "<td>".$row["BuchID"]."</td>";
	echo "<td>".$row["Autor"]."</td>";
	echo "<td>".$row["Herausgeber"]."</td>";
	echo "<td>".$row["Erscheinungsdatum"]."</td>";
	echo "<td>".$row["Titel"]."</td>";
	echo "<td>".$row["Verlag"]."</td>";
	echo "<td>".$row["ISBN"]."</td>";
	echo "</tr>";
}
echo "</table>";
?>

</div>
</body>
</html>