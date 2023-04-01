<?php
$titel="Php-Kurs";
$hobby="Aquarium";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titel; ?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
<?php
$name="Berta";
$ort="Graz";
echo $name . " wohnt in " . strtoupper($ort);
echo "<br>\n";
echo $name." liebt ihr ".$hobby;
echo "<br>\n";
//Variableninterpolation
//Variable kann im Text eingebaut werden
//nur bei ""
echo "$name fährt nach $ort";
echo "<br>\n";
echo "Das ist {$name}s Haus";

//Einbinden einer Include-Datei
include "include/include_footer.php";
?>
</div>
</body>
</html>