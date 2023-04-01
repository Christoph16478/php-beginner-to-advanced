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
		// utf8
		$text = "Schöne Grüße aus Österreich";

		//Sonderzeichen nehmen einen zusätzlichen Platz ein
		$anzahl = strlen($text);
		echo "'$text' hat $anzahl Zeichen ohne utf8_decode";
		echo "<br>\n";

		//mit utf8_decode
		$anzahl = strlen(utf8_decode($text));
		echo "'$text' hat $anzahl Zeichen mit utf8_decode";
		echo "<br>\n";

		// Groß-Kleinbuchstaben
		echo "<br>\n";
		echo strtoupper($text);
		echo "<br>\n";
		echo mb_strtoupper($text);
		echo "<br>\n";
		echo strtolower($text);
		echo "<br>\n";
		echo mb_strtolower($text);
		echo "<br>\n";
				
		?>
        </main>
    </body>
</html>