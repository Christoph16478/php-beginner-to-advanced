<?php
$dbHost="localhost";
$dbName="kurs";
$dbCharset="utf8";
$dbUser="schulung";
$dbPw="123x";

try
{	
	$db=new PDO(
		"mysql:host=$dbHost;dbname=$dbName;charset=$dbCharset",
		$dbUser,
		$dbPw
		);

}
catch(PDOException $e)
{
	exit("Keine Verbindung zur Datenbank");
}
?>