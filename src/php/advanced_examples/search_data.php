<?php
require_once "include/include_db.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title>search_data</title>
	<meta charset="UTF-8">
</head>
<body>

<h1 style='text-align:center;'>Suche deinen Lieblingstitel bei uns</h1>
<p style='text-align:center;'>Die Suchfunktion sucht nach einem Titel oder dem Autor eines in unserer Bücherei enthaltenene Werkes.</p>

<div id="wrapper">

<form method="post" style='text-align:center;'>
    <input type="text" name="suche">
    <input type="submit" name="senden">
</form>
<br>
<br>

<?php
if( isset( $_POST["senden"] ) )
{

    $suche="%".strip_tags( $_POST["suche"] )."%";
}
else
{
    $suche="%%";
}

$sql="SELECT * FROM buecher WHERE Autor OR Titel LIKE :suche";

$abfrage=$db->prepare($sql);
$abfrage->bindParam(":suche",$suche);
$abfrage->execute();
?>

<h2>Ihre Suche hat folgendes ergeben:</h2>
<br>

<?php

while($row = $abfrage->fetch())
{
    echo "<b>".$row["Autor"]."</b>".", ".$row["Herausgeber"]." (".$row["Erscheinungsdatum"]."): "."<b><i>".$row["Titel"]."</i></b>".", ".$row["Verlag"].", ".$row["ISBN"]."<br>"."<br>";
}
?>

</div>
</body>
</html>