<?php
session_start();
session_regenerate_id(true);
require_once "include/include_db.php";

if( isset( $_POST["senden"])   )
{
	//Prüfung Email
	if(  filter_var( $_POST["email"], FILTER_VALIDATE_EMAIL ) !==false )
	{
		//Prüfung, ob user existiert
		//Prüfen, ob Email existiert
		$sql="SELECT * FROM user 
		WHERE userEmail=:email";
		
		$abfrage=$db->prepare($sql);
		$abfrage->bindParam(":email", $_POST["email"]);
		$abfrage->execute();
		$row=$abfrage->fetch();
		//Wenn user gefunden wurde, dann wird Password abgeglichen
		if($row !== false)
		{
			if( password_verify( $_POST["password"],$row["userPassword"] ) )
			{
				//User erkannt
				$_SESSION["userID"]=$row["userID"];
				$_SESSION["userName"]=$row["userName"];
				$_SESSION["userRole"]=$row["userRole"];
				//Weiterleitung
				header("location:portal.php");
				
			}//PW ENDE			

		}//Prüfung user ENDE
		
	}//Email Ende

}//senden Ende

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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>">
email:<input type="email" name="email"><br>
password:<input type="password" name="password"><br>
<input type="submit" name="senden">
</form>
</div>
</body>
</html>