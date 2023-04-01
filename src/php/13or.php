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

$gender="w";
//Wenn eines zutrifft
// || entspricht dem OR
if($gender=="w" || $gender=="f")
{
	echo "Liebe Frau";
}

?>
</div>
</body>
</html>