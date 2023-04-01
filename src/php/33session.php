<?php
session_start();
//id erneuert , alte id wird gelöscht -true
session_regenerate_id(true);
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
echo session_id();
$_SESSION["userName"]="Anna";
$_SESSION["userRole"]=3;

echo $_SESSION["userName"];
echo $_SESSION["userRole"];

?>
</div>
</body>
</html>