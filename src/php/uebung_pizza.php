<?php
$pizzen=[
"Napoli"=>5.7,
"Italia"=>5.3,
"Mozarella"=>7.8,
];

?>
<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-Kurs</title>
    </head>
    <body>
        <main>
       <form  method = "post">
		   <p><input name="name"> Name</p>
		   <p><input name="adresse"> Adresse</p>
		   <p>
		   <input type="radio" name="anrede" value="Herr"> Herr <br>
		   <input type="radio" name="anrede" value="Frau"> Frau</p>
		   <p>
		   <select name="uhrzeit">
		   <?php
		   
		   for ($stunde = 8; $stunde < 20; $stunde++) 
		   {
			  for ($minuten = 0; $minuten < 60; $minuten+=15) 
			  { 
				$anzeigeStunden=str_pad($stunde,2,0,STR_PAD_LEFT);
				$anzeigeMinuten=str_pad($minuten,2,0,STR_PAD_LEFT);
				echo "<option>$anzeigeStunden:$anzeigeMinuten</option>\n";  
			  }  
			} 
		   ?>
		   </select> Uhrzeit
		   </p>
		   <p>
		   <select name="pizza">
		   <?php
			foreach($pizzen as $pizzaname=>$pizzapreis)
			{
				echo "<option value='$pizzaname'>$pizzaname ($pizzapreis &euro;)</option>";
			}
			?>
		   </select> Pizza
		   </p>
		   <p>
		   <input type="checkbox" name="knoblauch" value="Extra Knoblauch" /> Extra Knoblauch (Aufpreis 0,60 &euro;)<br />
		   <input type="checkbox" name="kaese" value="Extra Käse" /> Extra Käse (Aufpreis 1,10 &euro;)</p>
		   <p><input type = "submit" name="senden" />
		   <input type = "reset"></p>
		</form>
		<?php
		if(isset($_POST["senden"]))
		{			
			/* Auswahl der Pizza */
			$pizza=$_POST["pizza"];
			/* Zuordnung des Preises zur Pizza */
			$preis=$pizzen[$pizza];
			
		   /* Anrede */
		   if ($_POST["anrede"] == "Herr")
		   {
			  echo "<p>Sehr geehrter Herr " . $_POST["name"] . "<br>";
		   }
		   else
		   {
			  echo "<p>Sehr geehrte Frau " . $_POST["name"] . "<br>";
		   }
			
		   /* Ausgabe */
		   echo "Vielen Dank für Ihre Bestellung</p>";
		   echo "<p>Wir liefern Ihre Pizza $pizza";

		   /* Zusätze */
		   if (isset($_POST["kaese"]))
		   {
			  echo " mit " . $_POST["kaese"];
			  $preis = $preis + 1.1;
		   }
		   
		   if (isset($_POST["knoblauch"]))
		   {
			  echo " mit " . $_POST["knoblauch"];
			  $preis = $preis + 0.6;
		   }

		   echo "<br>um ".$_POST["uhrzeit"]." an die folgende Adresse:<br>";
		   echo $_POST["adresse"] . "</p>";
		   echo "<p>Der Preis beträgt $preis &euro;</p>";
		   echo "<p>Ihr Pizza-Team</p>";
		}




		?>
        </main>
    </body>
</html>