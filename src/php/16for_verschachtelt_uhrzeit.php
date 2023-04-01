<!DOCTYPE html>
<html lang="de">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-Kurs</title>
    </head>
    <body>
        <main>
		
		<select name="uhrzeit">
	   <?php
	   //Zeiten im 15 min Abstand von 08:00-19:45
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
	   </select>
	   
        </main>
    </body>
</html>