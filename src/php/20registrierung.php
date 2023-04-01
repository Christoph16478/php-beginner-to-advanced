<!DOCTYPE html>
<html>
<head>
	<title>Schulung</title>
	<meta charset="UTF-8">
</head>
<body>
	<main>

	<?php
	//Hilfsvariablen
	$userName="";
	$email="";
	$password1="";
	$password2="";
	$zustimmung="";

	$ok=true;
	$bericht="";

	if(isset($_POST["absenden"]))
	{
		//Zuweisung an die Variablen
		//Übernahme aus dem Formular
		$userName=strip_tags(  $_POST["userName"]  );
		$email=$_POST["email"];
		$password1=$_POST["password1"];
		$password2=$_POST["password2"];
		
		//Prüfung ob AGB angehakt
		if(isset($_POST["zustimmung"]))
		{
			$zustimmung=$_POST["zustimmung"];
		}
		else
		{
			$ok=false;
			$bericht .= "Sie müssen den AGB zustimmen!<br>";
		}

		//Prüfung ob Email
		if(filter_var($email, FILTER_VALIDATE_EMAIL)===false)
		{
			$ok=false;
			$bericht .= "Keine gültige email!<br>";
		}

		//Prüfung PW Mind. 8 Zeichen hat
		if( strlen($password1) < 8 )
		{
			$ok=false;
			$bericht .= "Das Passwort muss mind 8 Zeichen haben!<br>";
		}
		
		//Prüfung ob PW übereinstimmt
		if($password1<>$password2)
		{
			$ok=false;
			$bericht .= "Das Passwort stimmt nicht!<br>";
		}

		// Passwort-Check
		$muster1="/[A-Z]/";
		$muster2="/[a-z]/";
		$muster3="/[0-9]/";

		if(
		preg_match($muster1,$password1) && 
		preg_match($muster2,$password1) && 
		preg_match($muster3,$password1) 
		)
		{
			
		}
		else
		{
			$ok=false;
			$bericht .= "Das Passwort braucht Großbuchstabe, Kleinbuchstabe, Zahl<br>";		
		}

		//Wenn immer noch ok
		if($ok===true)
		{
			$bericht = "GRATULATION! Alles bestens!<br><a href='login.php'>zum Login</a>";
			//hier kommt dann der DB-Eintrag
			
			$userName="";
			$userVorname="";
			$email="";
			$password1="";
			$password2="";
			$zustimmung="";
			
		}

	}

	echo $bericht;
	?>
	<form action="<?php  echo htmlspecialchars($_SERVER["PHP_SELF"]);   ?>" method="post">
	Ihr Username:<br>
	<input type="text" name="userName" value="<?php echo $userName; ?>"><br>
	email:<br>
	<input type="text" name="email" value="<?php echo $email; ?>"><br>
	<br>
	Passwort:<br>
	<input type="password" name="password1" value="<?php echo $password1; ?>"><br>
	<br>
	Passwort wiederholen:<br>
	<input type="password" name="password2" value="<?php echo $password2; ?>"><br>
	<br>

	<input type="checkbox" name="zustimmung" value="ok" <?php if($zustimmung=="ok") { echo "checked"; } ?>>ich stimme zu<br>

	<br>
	<input type="submit" name="absenden" value="absenden"><br>

	</form>
	</main>
</body>
</html>