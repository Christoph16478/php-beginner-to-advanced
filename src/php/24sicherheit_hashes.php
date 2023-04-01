<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
<?php

// Verschlüsselungen

$text="hallo";
//http://www.md5-generator.de/
//http://md5cracker.org....oder dergleichen
echo md5($text);
echo "<hr>\n";



echo sha1($text);
echo "<br>\n";



//"versalzen"
$salz = "was sinnloses blabla";
$algo = "sha256";
$passwort = "geheim";
echo $hash = hash_hmac($algo, $passwort, $salz);
//Hinweis: ist veraltet - nur zum Verständnis von hash und salt
exit();
?>
</body>
</html>



























