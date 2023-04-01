<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-Kurs</title>
    </head>
    <body>
        <main>
        <?php
		$muster="/[A-Z]/";
		$text="bundB";

		if(preg_match($muster,$text))
		{
			echo "passt<br>";	
		}


		// Passwort-Check
		$muster1="/[A-Z]/";
		$muster2="/[a-z]/";
		$muster3="/[0-9]/";
		$muster4="/[#!§&]/";
		$text="1x#yc11X";

		if(
		preg_match($muster1,$text) && 
		preg_match($muster2,$text) && 
		preg_match($muster3,$text) &&
		preg_match($muster4,$text)
		)
		{
			echo "Passwort passt<br>";	
		}
		echo "<br>\n";
		

		
		// Dateiendungen testen nur .jpeg,.jpg,.gif und .png am Ende erlaubt
		//egal, ob groß oder klein geschrieben i
		$muster="/\.(jpe?g|gif|png)$/i";
		$text="ROM.JPG";

		if(preg_match($muster,$text))
		{
			echo "Dateiendung passt<br>";	
		}
		echo "<br>\n";

		//Alle Zeichen entfernen die NICHT Buchstaben _ - Zahlen sind
		$text="Alles-<w@ird>-1!3'[3-g]ut";
		$text=preg_replace("/[^A-Za-z0-9_-]/", '', $text);
		echo $text;
		echo "<br>\n";

		// Groß-Kleinschreibung
		$zeichenkette = "Dies IST ein kleines Beispiel und es isst doof";
		$suchmuster = "/iss?t/i"; 
		$ersetzung = "war";
		echo preg_replace($suchmuster, $ersetzung, $zeichenkette);
		echo "<br>\n";
		?>
        </main>
    </body>
</html>