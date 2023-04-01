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
		//Array ersetze
		$angabe="Schöne Grüße aus Österreich";
		$alt=array("ö","Ö","ä","Ä","ü","Ü","ß"," ");
		$neu=array("oe","Oe","ae","Ae","ue","Ue","ss","_");
		echo strtolower(  str_replace($alt,$neu,$angabe)  );
		echo "<hr>\n";
		// Leerzeichen entfernen
		$name="  Karl  ";
		echo strlen($name);
		$name=trim($name);
		echo "<br>\n";
		echo strlen($name);
		echo "<br>\n";
		$name="test12.12.2019test";
		$name=trim($name,"test");
		echo $name;
		
		$name="test12.12.2019test";
		
		echo substr($name,4,99999);
		?>
        </main>
    </body>
</html>