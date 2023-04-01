<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="">
<?php
$ordner="bilder";
//scandir verpackt alle Dateien des Ordners in einen Array
$galerie=scandir($ordner);

$counter=0;
foreach($galerie as $datei)
{
	if($datei != "." && $datei != "..")
	{
		echo "<div style='width:100px;display:inline-block;
		border:1px solid red;margin:0 10px 10px 0'>";
		echo "<img src='$ordner/$datei' style='width:100%;'>";
		echo "<br>\n";
		echo "$datei";
		echo "</div>";
		$counter++;
	}
}
echo "$counter Bilder gefunden!";
?>
</div>
</body>
</html>