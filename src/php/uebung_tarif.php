<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-Kurs</title>
    </head>
    <body>
        <main>
		<form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="post">
			Mein Verbrauch<br>
			<input type="number" name="verbrauch" required><br>
			<input type="submit" value="Absenden"><br>
		</form>
        <?php
		if(isset($_POST["verbrauch"]))
		{
			$verbrauch=(int)$_POST["verbrauch"];
			$tarifA=3*12+0.16*$verbrauch;
			$tarifB=6*12+0.14*$verbrauch;
			$tarifC=12*12+0.12*$verbrauch;

			echo "A: $tarifA";
			echo "<br>\n";
			echo "B: $tarifB";
			echo "<br>\n";
			echo "C: $tarifC";
			echo "<br>\n";



			if(($tarifA<=$tarifB)&&($tarifA<=$tarifC))
			{
				echo "TarifA ist am Billigsten:$tarifA";
			}
			else
			{
				if(($tarifB<=$tarifA)&&($tarifB<=$tarifC))
				{
					echo "TarifB ist am Billigsten:$tarifB";
				}
				else
				{
					echo "TarifC ist am Billigsten:$tarifC";
				}
			}
		}
		?>
        </main>
    </body>
</html>