<?php
$dbHost="localhost";
$dbName="buecherei";
$dbCharset="utf8";
$dbUser="christoph";
$dbPw="hpotsirhc";

try{	
	$db=new PDO(
		"mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset",
		"$dbUser",
		"$dbPw"
		);

}
catch(PDOException $e)
{
	exit("Keine Verbindung zur Datenbank");
}
?>