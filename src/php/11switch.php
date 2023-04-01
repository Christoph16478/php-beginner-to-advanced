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
<div id="wrapper">
<?php
$note=4;

switch($note)
{
	case 1:echo "Sehr gut";
		break;
	case 2:echo "gut";
		break;
	case 3:echo "befriedigend";
		break;
	default:echo "Keine gute Note";
}

?>
</div>
</body>
</html>