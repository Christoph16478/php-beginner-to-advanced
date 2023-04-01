<?php
//ab jetzt 60 sek
$ablauf=time()+60;
//Cookies werden im Browser gespeichert
setcookie("user","Donald Duck",$ablauf);
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
Cookie:
<?php
if( isset( $_COOKIE["user"] ) )
{
	echo $_COOKIE["user"];
}



?>
</div>
</body>
</html>