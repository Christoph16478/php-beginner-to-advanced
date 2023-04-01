<?php
require "include/include_functions.php";
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
echo "Anreise ";
$arrayAnreise=["Bahn","Auto","Flugzeug"];
echo displaySelectArray("anreise",$arrayAnreise);

echo " Zimmer ";
$arrayZimmer=["Standard","Luxus","Suite","Appartment"];
echo displaySelectArray("zimmer",$arrayZimmer);

echo " Essen ";
$arrayEssen=[
1=>"Zimmer mit F",
4=>"Brunch",
10=>"Vollpension"
];
echo displaySelectArrayAssoziativ("essen",$arrayEssen);
?>
</div>
</body>
</html>