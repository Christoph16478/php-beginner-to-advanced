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
		// Zufallsbilder
		//BITTE ORDNERINHALT  BEACHTEN !!!!
		$ordner="bilder";
		$galerie=["see.jpg","rom.jpg","baum.jpg","wolken.jpg"];
		$maximum=count($galerie)-1;				
		//Funktion rand "würfelt" eine Zufallszahl
		//zwischen minimum und maximum
		$zufallszahl=rand(0,$maximum);
		//Nur zur Kontrolle
		echo $zufallszahl;
		echo "<br>\n";
		echo "<img src='$ordner/$galerie[$zufallszahl]' width='100'>";
		?>
        </main>
    </body>
</html>