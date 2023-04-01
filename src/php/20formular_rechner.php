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
if(isset($_POST["senden"]))
{
	$zahl1=$_POST["zahl1"];
	$zahl1=str_replace("," , "." , $zahl1);//Komma durch Punkt ersetzen
	$zahl1=(float)$zahl1;
	
	$zahl2=$_POST["zahl2"];
	$zahl2=str_replace("," , "." , $zahl2);//Komma durch Punkt ersetzen
	$zahl2=(float)$zahl2;
	
	$rechenart=$_POST["rechenart"];
	
	
	switch($rechenart)
	{
		case "+": $ergebnis=$zahl1+$zahl2;
			break;
		case "-": $ergebnis=$zahl1-$zahl2;
			break;		
		case "*": $ergebnis=$zahl1*$zahl2;
			break;
		case "/":
			if($zahl2==0)
			{
				$ergebnis="Keine Division durch Null!";
			}
			else
			{
				$ergebnis=$zahl1/$zahl2;
			}
			break;
		default:$ergebnis="Keine Rechenart";
	}
	
	echo "Ergebnis: ".$ergebnis;
	
}



?>
<form method="post">
	<input type="text" name="zahl1">
	<input type="text" name="zahl2">
	<select name="rechenart">
		<option value="+">addieren</option>
		<option value="-">subtrahieren</option>
		<option value="*">multiplizieren</option>
		<option value="/">dividieren</option>
	</select>
	<input type="submit" name="senden" value="rechnen">
</form>

</div>
</body>
</html>