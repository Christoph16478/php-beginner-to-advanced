<?php

$email="";
$password="";

if(isset($_POST["senden"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];

	require_once("include/include_db.php");

	$sql="SELECT * FROM user 
	WHERE userEmail = '$email' AND userPassword = '$password'  ";

	$abfrage=$db->query($sql);
	$row=$abfrage->fetch();

	echo  $row["userID"] . " " . $row["userName"] ;
}
?>

SQL-Injection
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
Ihre E-mail:
<input type="text" name="email"><br>
Kennwort:
<input type="text" name="password">
<input type="submit" name="senden" value="einloggen">
</form> 
