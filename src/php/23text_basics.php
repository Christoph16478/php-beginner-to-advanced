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
		$text="Willkommen auf meiner Webseite!";

		echo $text[4];
		echo "<br>\n";

		// Länge ermitteln
		echo strlen($text);
		echo "<br>\n";

		// substr=Teil einer Zeichenkette
		echo substr($text,15,8);
		echo "<br>\n";
		echo substr($text,-6);//die letzten 5
		echo "<br>\n";
		

		// Textteile ersetzen
		echo str_replace("meiner","unserer",$text);
		echo "<br>\n";

		// Groß-Kleinbuchstaben
		echo "<br>\n";
		echo strtoupper($text);
		echo "<br>\n";
		echo strtolower($text);
		echo "<br>\n";

		
		?>
        </main>
    </body>
</html>